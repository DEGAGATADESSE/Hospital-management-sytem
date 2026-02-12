<?php
include('register_patient.php');
if(isset($_POST['login'])){
	if(!empty($_POST['uname']) && !empty($_POST['pword'])){
		$user=$_POST['uname'];
		$pass=$_POST['pword'];
		$sql="select * from patient";
		$_result=mysqli_query($conn,$sql);
		if($_result){
			while($row=mysqli_fetch_assoc($_result)){
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				if($dbusername==$user && $dbpassword==$pass){
					echo "login succesful";
					session_start();
					$_SESSION['user']=$dbusername;
					header("location:dashboard_patient.php");
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
	height: 367px;
	width: 290px;
	border-radius: 25px;
	align: right;
	left: 373px;
	top: 194px;
	}
	#err{
		color:#F00;
		}
body {
	background-image:url(img/patient1.jfif);
	background-repeat: no-repeat;
	background-size:cover;
}
body,td,th {
	font-size: 18px;
}

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #000;
}
a:active {
	text-decoration: none;
}
</style>


   
</head>

<body>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="HOME.html">BACK</a>
<p>&nbsp;</p>
<div id="div1">
  <form id="form1" name="form1" method="post" action="">
    <blockquote>
      <blockquote>
        <p>&nbsp;</p>
        <p><strong>LOGIN NOW
        </strong> </p>
      </blockquote>
    </blockquote>

   <div id="err">
     <?php  echo $err="";?>
   </div>
   
    <p>
      <label for="uname">&nbsp;&nbsp;&nbsp;<strong>&nbsp;Username</strong></label>
      <strong>
      <input type="text" name="uname" id="un" placeholder="enter username"/>
    </strong></p>
   
  
    <p>
        <strong>
        <label for="pword">&nbsp;&nbsp;&nbsp;&nbsp;Password</label>
        <input type="password" name="pword" id="ps" placeholder="enter passwords"/>
        </strong></p>
     
       <div align="center">
         <p><strong>
         <input type="submit" name="login" id="submit" value="login" />
         </strong></p>
         <p>&nbsp;</p>
       </div>
       <p align="center"><strong>&nbsp;&nbsp;&nbsp;I dont have an account  <a href="register_patient.html">&nbsp;&nbsp;REGISTER</a></strong></p>
  </form>
</div>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <h3> Proud to be part of</h3>
                      <h3>CARE NETWORK</h3>
                    </blockquote>
                  </blockquote>
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
