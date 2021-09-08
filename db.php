<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "hospital";
$con = mysqli_connect($host,$user,$pass,$dbname);
if (!$con) {
	echo "sorry your not connected with database!";
}


?>