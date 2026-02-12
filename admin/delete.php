<?php
include("register_doctor.php");
error_reporting(0);
$username=$_GET['$un'];
$query= "DELETE FROM doctors WHERE username='$un'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<font color='red'>Record Deleted from Database";}
	else
	{
echo"<font color='red'>Failed to Delete from Database";}

?>