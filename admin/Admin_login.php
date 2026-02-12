<?php
include('sessetionadmin.php');
if(isset($_POST['login'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$sql="select * from admin";
		$_result=mysqli_query($conn,$sql);
		if($_result){
			while($row=mysqli_fetch_assoc($_result)){
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				if($dbusername==$user && $dbpassword==$pass){
					echo "login succesful";
					session_start();
					$_SESSION['user']=$dbusername;
					header("location:admin_dashboard.php");
					}
					else{
						echo "username or password doesn't match!";
						}
				}
			}
			else{
				die(mysqli_error($conn));
				}
		}
		else{
			echo"All field are required";
			}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="adminlogin.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login doctor</title>

</head>

<body>
<a href="HOME.html">BACK</a>
     <form action="" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
 <div class="textbox">
                
          
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="textbox" placeholder="username"
                         name="username" value="" required>
            </div>
            
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="" required>
            </div>
 
            <input class="button" type="submit"
                     name="login" value="log in" onClick='admin_dashboard.php'>
        </div>
    </form>
</body>
</body>
</html>