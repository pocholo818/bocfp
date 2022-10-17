<?php 
    $conn = mysqli_connect("localhost", "root", "", "bocfp");
    if(mysqli_connect_error()){
        echo "CONNECTION FAILED: ".mysqli_connect_error();
        die();
    }
?>