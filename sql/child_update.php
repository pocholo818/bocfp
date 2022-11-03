<?php
	include 'connect.php';

	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$bday = $_POST['bday'];
	$sex = $_POST['sex'];
    $guardian = $_POST['guardian'];
    $contact_number = $_POST['contact_number'];
    $purok = $_POST['purok'];

	$sql = "UPDATE child SET 
    fname = '$first_name',
    lname = '$last_name',
	bdate = '$bday',
	sex = '$sex',
    guardian = '$guardian',
    contact = '$contact_number',
	purok = '$purok'
    WHERE id = '".$id."'";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>