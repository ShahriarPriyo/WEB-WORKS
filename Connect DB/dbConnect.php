<?php

$dbServername="localhost";
$dbUsername = "root";  //online server will have a different user name
$dbname="login System"; //db created in phpmyadmin
$dbpassword=""; //default pass is null

$conn = mysqli_connect($dbServername,$dbUsername,$dbname,$dbpassword);


?>