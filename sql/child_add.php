<?php
	include 'connect.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$bdate = $_POST['bdate'];
	$sex = $_POST['sex'];
	$guardian = $_POST['guardian'];
	$contact = $_POST['contact'];
	$purok = $_POST['purok'];

	$sql = "INSERT INTO child (fname, lname, bdate, sex, guardian, contact, purok) 
	VALUES ('$fname', '$lname', '$bdate', '$sex', '$guardian', '$contact', '$purok')";
    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>