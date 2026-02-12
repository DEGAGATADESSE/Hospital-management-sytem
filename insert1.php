<?php
include_once 'appointment.php';
if (isset($_POST['submit']))
{
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$em=$_POST['email'];
	$gn=$_POST['checkbox'];
	$pn=$_POST['pnumber'];
	$a=$_POST['age'];
	$w=$_POST['weight'];
	$sy=$_POST['symptom'];
	
	$insertq = "insert into appointment(firstname,lastname,email,gender,phonenumber,age,weight,symptom)values('$fn','$ln','$em','$gn','$pn','$a','$w','$sy')";
	$cmd=mysqli_query($conn,$insertq);
	if($cmd){
		header("location:appointment.html");
		}
		else{
			echo"data insertion is not succesful";
			}
	}
?>