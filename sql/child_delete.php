<?php
	include 'connect.php';

	$id2 = $_POST['id'];
	$sql = "DELETE FROM child WHERE id = '".$id2."'";
    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
		echo "ID: ".$id2;
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>