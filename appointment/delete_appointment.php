<?php
include_once 'appointment.php';

if(isset($_GET['id']))
{
	$idn=$_GET['id'];
	$deleteq="delete from appointment where id='$idn'";
	$runsqr=mysqli_query($conn,$deleteq);
	if($runsqr)
	{
		header("location:view_appointment.php");
		}
		else
		{
			print("user is not removed");
			}
	}
?>