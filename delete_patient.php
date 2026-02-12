<?php
include_once 'register_patient.php';

if(isset($_GET['id']))
{
	$idn=$_GET['id'];
	$deleteq="delete from patient where id='$idn'";
	$runsqr=mysqli_query($conn,$deleteq);
	if($runsqr)
	{
		header("location:view_patients.php");
		}
		else
		{
			print("user is not removed");
			}
	}
?>