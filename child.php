<?php include 'template/header.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/search.js"></script>

    <div class="container">	
	<h3></h3>
      <br />
      <div class="card">
        <div class="card-header">Child Search</div>
        <div class="card-body" id="searchSection">
          <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Type your search keyword here" />
          </div>
          <div class="table-responsive" id="searchResult"></div>
        </div>
      </div>
    </div>

<?php include 'template/footer.php' ?>