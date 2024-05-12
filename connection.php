<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "zomato_like_web_db";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn)
{
	echo "ok";
}
else
{
	echo "failed".mysqli_connect_error();
}




?>