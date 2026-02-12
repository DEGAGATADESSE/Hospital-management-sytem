<?php
include('register_doctor.php');
if(isset($_POST['login'])){
	if(!empty($_POST['uname']) && !empty($_POST['pword'])){
		$user=$_POST['uname'];
		$pass=$_POST['pword'];
		$sql="select * from doctors";
		$_result=mysqli_query($conn,$sql);
		if($_result){
			while($row=mysqli_fetch_assoc($_result)){
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				if($dbusername==$user && $dbpassword==$pass){
					echo "login succesful";
					session_start();
					$_SESSION['user']=$dbusername;
					header("location:dashboard.php");
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login doctor</title>
<style type="text/css">
#div1{
	position: absolute;
	border: double;
	height: 409px;
	width: 319px;
	border-radius: 25px;
	align: right;
	left: 337px;
	top: 258px;
	font-weight: bold;
	color: black;
	}
	#err{
		color:#F00;
		}
body {

	background-image: url(image3.jpg);
	background-repeat: no-repeat;
	background-size:cover;

}
#submit{
	font-size:16px;
	color:black;
	}
body,td,th {
	font-size: 24px;
	color: #000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}

</style>
</head>

<body>
<a href="HOME.html">BACK</a>
<p>&nbsp;</p>
<div id="div1">
<center>
  <form id="form1" name="form1" method="post" action="">
    <blockquote>
      <blockquote>
        <p><strong>LOGIN NOW
        </strong></p>
      </blockquote>
    </blockquote>

   <div id="err">
     <?php  echo $err="";?>
   </div>
   
    <p>
      <label for="uname"> &nbsp;&nbsp;Username</label>
      <input type="text" name="uname" id="un" placeholder="enter username" />
</p>
   
  
      <p>
        <label for="pword">&nbsp;&nbsp;Password</label>
        <input type="password" name="pword" id="ps"  placeholder="enter password"/>
      </p>
     
       <p align="center">
         <strong>
         <input type="submit" name="login" id="submit" value="login" />
       </strong>       </p>
       <p>&nbsp; </p>
       <blockquote>
         <p><strong>I dont have an account  <a href="register_doctor.html">REGISTER</a></strong></p>
       </blockquote>
  </form></center>
</div>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <h3 class="care">Proud to be part of
                  this new </h3>
                <blockquote>
                  <h3> <span class="care">CARE NETWORK</span></h3>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
</body>
</html>