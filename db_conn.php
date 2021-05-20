<?php

$sname= "localhost";
$username= "root";
$password = "root";

$DBname = "cats";

$conn = mysqli_connect($sname, $username, $password, $DBname);

if (!$conn) {
	echo "Connection failed!";
}