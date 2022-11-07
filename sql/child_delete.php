<?php
	include 'connect.php';

	$id = $_POST['child_delete'];
	$sql = "DELETE FROM child WHERE id = '".$id."'";
    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>