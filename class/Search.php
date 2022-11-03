<?php
class Search {	
   
	private $productTable = 'child';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }

	public function product() {	
		$limit = '5';
		$page = 1;
		if($_POST['page'] > 1) {
		  $start = (($_POST['page'] - 1) * $limit);
		  $page = $_POST['page'];
		} else {
		  $start = 0;
		}
	
		$sqlQuery = "SELECT * FROM child";
		if($_POST['searchQuery'] != ''){
		  $sqlQuery .= ' WHERE fname LIKE "%'.str_replace(' ', '%', $_POST['searchQuery']).'%" 
		  				OR lname LIKE "%'.str_replace(' ', '%', $_POST['searchQuery']).'%" ';
		}
		$sqlQuery .= ' ORDER BY id ASC';

		$filter_query = $sqlQuery . ' LIMIT '.$start.', '.$limit.'';	
	
		$statement = $this->conn->prepare($sqlQuery);			
		$statement->execute();
	
		$result = $statement->get_result();
		$totalSearchResults =  $result->num_rows;	
	
		$statement = $this->conn->prepare($filter_query);			
		$statement->execute();
	
		$result = $statement->get_result();
		$total_filter_data = $result->num_rows;
		
		$resultHTML = '
			<label>Total Search Result - '.$totalSearchResults.'</label>
			<table class="table table-striped table-bordered">
			  <tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Sex</th>
				<th>Guardian</th>
				<th>Contact Number</th>
				<th>Purok</th>
				<th colspan="2" style="text-align: center;">Action</th>
			  </tr>';
	
		if($totalSearchResults > 0) {	  
		  while ($child = $result->fetch_assoc()) { 	
			$resultHTML .= '
			<tr>
			  <td>'.$child["id"].'</td>
			  <td>'.$child["fname"].'</td>
			  <td>'.$child["lname"].'</td>
			  <td>'.$child["bdate"].'</td>
			  <td>'.$child["sex"].'</td>
			  <td>'.$child["guardian"].'</td>
			  <td>'.$child["contact"].'</td>
			  <td>'.$child["purok"].'</td>
			  <td>'.'<button type="button" style="width:100%;" class="btn btn-success editbtn">EDIT</button>'.'</td>
			  <td>'.'<button type="button" style="width:100%;" class="btn btn-danger deletebtn"> DELETE </button>'.'</td>
			</tr>';
		  }
		} else {
		  $resultHTML .= '
		  <tr>
			<td colspan="8" align="center">No Record Found</td>
		  </tr>';
		}

		$resultHTML .= '
		</table>
		<br />
		<div align="center">
		  <ul class="pagination">';

		$totalLinks = ceil($totalSearchResults/$limit);
		$previousLink = '';
		$nextLink = '';
		$pageLink = '';	

		if($totalLinks > 4){
		  if($page < 5){
			for($count = 1; $count <= 5; $count++){
			  $pageData[] = $count;
			}
			$pageData[] = '...';
			$pageData[] = $totalLinks;
		  } else {
			$endLimit = $totalLinks - 5;
			if($page > $endLimit){
			  $pageData[] = 1;
			  $pageData[] = '...';
			  for($count = $endLimit; $count <= $totalLinks; $count++)
			  {
				$pageData[] = $count;
			  }
			} else {
			  $pageData[] = 1;
			  $pageData[] = '...';
			  for($count = $page - 1; $count <= $page + 1; $count++)
			  {
				$pageData[] = $count;
			  }
			  $pageData[] = '...';
			  $pageData[] = $totalLinks;
			}
		  }
		} else {
		  for($count = 1; $count <= $totalLinks; $count++) {
			$pageData[] = $count;
		  }
		}

		if(empty($pageData)){
			//
		}
		else{
			for($count = 0; $count < count($pageData); $count++){
				if($page == $pageData[$count]){
					  $pageLink .= '
					  <li class="page-item disabled">
					  <a class="page-link" href="#">'.$pageData[$count].' <span class="sr-only">(current)</span></a>
					  </li>';
	  
					  $previousData = $pageData[$count] - 1;
					  if($previousData > 0){
					  $previousLink = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previousData.'">Previous</a></li>';
					  } else {
					  $previousLink = '
					  <li class="page-item disabled">
						  <a class="page-link" href="#">Previous</a>
					  </li>';
					  }
					  $nextData = $pageData[$count] + 1;
					  if($nextData > $totalLinks){
					  $nextLink = '
					  <li class="page-item disabled">
						  <a class="page-link" href="#">Next</a>
					  </li>';
					  } else {
					  $nextLink = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$nextData.'">Next</a></li>';
					  }
					}
				  else {
				  if($pageData[$count] == '...'){
					$pageLink .= '
					<li class="page-item disabled">
						<a class="page-link" href="#">...</a>
					</li>';
				  } else {
					$pageLink .= '
					<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$pageData[$count].'">'.$pageData[$count].'</a></li>';
				  }
				}
			  }
		}
		
		$resultHTML .= $previousLink . $pageLink . $nextLink;
		$resultHTML .= '</ul></div>';
		echo $resultHTML;
	}	
}
?>

<!-- edit modal js -->
<script>
	$(document).ready(function () {

		$('.editbtn').on('click', function () {

			$('#editmodal').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function () {
				return $(this).text();
			}).get();

			console.log(data);

			$('#child_id').val(data[0]);
			$('#first_name').val(data[1]);
			$('#last_name').val(data[2]);
			$('#bday').val(data[3]);
			$('#sex').val(data[4]);
			$('#guardian').val(data[5]);
			$('#contact_number').val(data[6]);
			$('#purok').val(data[7]);
		});
	});
</script>