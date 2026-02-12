 <?php 
 include_once'sessetionadmin.php';
 error_reporting(0);
 
 ?>
 <html>
 <head> <title></title>
 <style>
 table{
	 color:white;
	 border-radius:20px;
	 }
	 #button{
		 background-color:green;
		 color:white;
		 height:32px;
		 width:145;
		 border-radius:25px;
		 font-size:16px;
	 }
	 body{
		 background:linear-grsdient(red,blue); 
	 }
	 </style>
     </head>
		 
	 
<body>
<a href="admin_dashboard.php">BACK</a>
<br><br><br><br><br><br>
<form action="" method="POST">
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>User name</td>
<td><input type="text" value="" name="username" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" value="" name="password" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="change password"></a></td>
</tr>
 
 </html>
 <?php
 if($_POST['submit'])
 {
	 $un=$_POST['username'];
	 $pw=$_POST['password'];
	 $query="UPDATE admin SET password='$pw' where username='$un'";
	 $data=mysqli_query($conn,$query);
	 if($data)
	 {
		echo"password changed";
	 }
	 else
	 {
		 echo"Failed to change password";
	 }
	 }
 ?>