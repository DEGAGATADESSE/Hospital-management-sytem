<?php
include_once 'register_patient.php';
if (isset($_POST['submit']))
{
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$un=$_POST['uname'];
	$em=$_POST['email'];
	$gn=$_POST['checkbox'];
	$pn=$_POST['pnumber'];
	$pw=$_POST['pword'];

	
	$insertq = "insert into patient(firstname,lastname,username,email,gender,phonenumber,password)values('$fn','$ln','$un','$em','$gn','$pn','$pw')";
	$cmd=mysqli_query($conn,$insertq);
	if($cmd){
		echo"data has been inserted";
		}
		else{
			echo"data insertion is not succesful";
			}
	}
?>