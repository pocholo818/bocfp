<?php
include_once 'sql/config.php';
include_once 'class/Search.php';

$database = new Database();
$db = $database->getConnection();

$search = new Search($db);

if(!empty($_POST['search']) && $_POST['search'] == 'search') {
	$search->product();
}

?>