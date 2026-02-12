<?php
$servern="localhost";
$username="root";
$password="";
$database="hospital_management_system";

$conn=mysqli_connect($servern,$username,$password,$database);
if(!$conn)
{
	die("not connected");
	}
	else{
		echo"database is connected";
		}
?>