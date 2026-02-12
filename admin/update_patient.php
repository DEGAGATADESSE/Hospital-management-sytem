<?php
include_once 'register_patient.php';
$pn="";
$f="";
$l="";
$u="";
$e="";
$p="";
$i="";
if(isset($_GET['id']))
{
	$i=$_GET['id'];
	$sqr="select *from patient where id='$i'";
	$runsqr=mysqli_query($conn,$sqr);
	$results=mysqli_fetch_assoc($runsqr);
	#asasigning values
	
	$f=$results['firstname'];
	$l=$results['lastname'];
	$u=$results['username'];
	$e=$results['email'];
	$pn=$results['phonenumber'];
	$p=$results['password'];
	
	echo $i;
	}
	
if(isset($_POST['update']))
{
	$i=$_POST['id'];
	$f=$_POST['fname'];
	$l=$_POST['lname'];
	$u=$_POST['uname'];
	$e=$_POST['email'];
	$pn=$_POST['pnumber'];
	$p=$_POST['pword'];
	$upq="update patient set firstname='$f',lastname='$l',username='$u',email='$e',phonenumber='$pn',password='$p' where id='$i'";
	$upqr=mysqli_query($conn,$upq);
	if($upqr)
	{
		print "updated succesfully";
		}
		else
		{
			print "check out";
			}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Patient</title>
<style type="text/css">
#div1{
	position: absolute;
	border: double;
	height: 492px;
	width: 381px;
	border-radius: 25px;
	align: right;
	left: 187px;
	top: 183px;
	}
body {
    background-image:url(patient1.jfif);
	background-repeat: no-repeat;
	background-size:cover;
}
body,td,th {
	font-size: 18px;
}
a:link {
	text-decoration:purple;
}
a:visited {
	text-decoration:purple;
}
a:hover {
	text-decoration: black;
	color: #000;
}
a:active {
	text-decoration:purple;
}
</style>
<script type="text/javascript">
function formvalidate(){
	var fname=document.getElementById("fn");
	var lname=document.getElementById("ln");
	var uname=document.getElementById("un");
	var email=document.getElementById("em");
	var phonenumber=document.getElementById("pn");
	var password=document.getElementById("ps");
	var male=document.getElementById("checkbox").checked;
    var female=document.getElementById("checkbox1").checked;
	var txt=/^[A-Za-z]+$/;
	var phon=/^\d{10}/;
	if(fname.value=="")
	{
		alert("please write your name");
		return false;
		}
		if(fname.value.length<="2" & !(fname.value.match(txt)))
	   {
		  alert("your first name is short and numeric");
		  return false;
	   }
	if(fname.value.length<="2")
		{
            alert("your firt name is too short");
			return false;
			}
	if(!(fname.value.match(txt)))
		  {
		     alert(" first name cannot accept number");
			 return false;
				}
	
	if(lname.value=="")
	        {
		alert("please write last name");
		return false;
		}
	if(lname.value.length<="2" & !(lname.value.match(txt)))
	     {
		    alert("last name is short and numeric");
		    return false;
	     }
	
	if(lname.value.length<="2")
		{
            alert("your last name is too short");
			return false;
			}
	if(!(lname.value.match(txt)))
		  {
		     alert("last name cannot accept number");
			 return false;
				}
				
	if(uname.value=="")
	  {
		alert("please write username");
		return false;
		   }	
				
	if(email.value.indexOf("@")<0)
				{
            alert("please provide correct e-mail");
			return false;
			}
	if(male==false && female==false){
			alert("choose gender");
			return false;
			}
	if(phonenumber.value=="")
	  {
		alert("please write phone number");
		return false;
		   }	
	if(phonenumber.value.length<"10")
		{
            alert("please enter correct length of phone number");
			return false;
			}
	if(phonenumber.value.length>"10")
		{
            alert("please enter correct length of phone number");
			return false;
			}
	if(!(phonenumber.value.match(phon)))
		  {
		     alert("enter correct phone number");
			 return false;
				}
	if(password.value=="")
	  {
		alert("please write password");
		return false;
		   }	
	if(password.value.length<"8")
		{
            alert("password need 8 character");
			return false;
			}
   }
   </script>
</head>

<body>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="HOME.html">BACK</a>
<div id="div1">
  <form id="form1" name="form1" method="post" action="update_patient.php">
    <blockquote>
      <blockquote>
        <p><strong> REGISTER NOW
        </strong></p>
      </blockquote>
    </blockquote>
	<p>
      <label for="id">&nbsp;&nbsp;&nbsp;&nbsp;ID</label>
      <input type="text" name="id" id="id" value="<?php echo $i; ?>" readonly="readonly"/>
    </p>
    <p>
      <label for="fname">&nbsp;&nbsp;&nbsp;&nbsp;Firstname</label>
      <input type="text" name="fname" id="fn" placeholder="enter firt name" value="<?php echo $f; ?>"/>
    </p>
    <p>
      <label for="lname">&nbsp;&nbsp;&nbsp;&nbsp;Lastname</label>
      <input type="text" name="lname" id="ln" placeholder="enter last name" value="<?php echo $l; ?>"/>
</p>
    <p>
      <label for="uname">&nbsp;&nbsp;&nbsp;&nbsp;Username</label>
      <input type="text" name="uname" id="un" placeholder="enter username" value="<?php echo $u; ?>"/>
</p>
    <p>
      <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;Email</label>
      <input type="text" name="email" id="em" placeholder="enter email" value="<?php echo $e; ?>"/>
</p>
    <p><label for="gender">&nbsp;&nbsp;&nbsp;&nbsp;Gender</label></p>
      <p>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="checkbox" id="checkbox1" value="female" />
        <label for="checkbox">Female</label>
        <BR>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="checkbox" id="checkbox" value="male" />
        <label for="checkbox">Male</label>
      </p>
      <p>
        <label for="pnumber">&nbsp;&nbsp;&nbsp;&nbsp;Phonenumber</label>
        <input type="text" name="pnumber" id="pn" placeholder="enter phone number" value="<?php echo $pn; ?>"/>
      </p>
      
      <p>
        <label for="pword">&nbsp;&nbsp;&nbsp;&nbsp;Password</label>
        <input type="password" name="pword" id="ps" placeholder="enter passwords" value="<?php echo $p; ?>"/>
      </p>
    
       &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" id="update" onclick="return formvalidate();" value="update" />
      
  </form>
</div>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <h3 class="care">&nbsp;</h3>
            <h3 class="care"><strong>Proud to be part of
              this new </strong></h3>
            <blockquote>
              <h3> <strong><span class="care">CARE NETWORK</span></strong></h3>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
</body>
</html>