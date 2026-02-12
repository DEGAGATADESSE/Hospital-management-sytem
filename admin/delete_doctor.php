<?php
include_once 'register_doctor.php';

if(isset($_GET['id']))
{
	$idn=$_GET['id'];
	$deleteq="delete from doctors where id='$idn'";
	$runsqr=mysqli_query($conn,$deleteq);
	if($runsqr)
	{
		header("location:view.php");
		}
		else
		{
			print("user is not removed");
			}
	}
?>