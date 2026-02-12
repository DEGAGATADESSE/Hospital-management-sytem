<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
<style type="text/css">
body,td,th {
	color: #000;
}
body {
	background-color: #CCC;
}
</style>
</head>

<body> <a href="admin_dashboard.php">Back</a>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <h1 align="left">List of patient registered </h1>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
<table width="71%" border="1">
  <tr>
    <th width="16%" scope="col">First Name</th>
    <th width="17%" scope="col">Last Name</th>
    <th width="15%" scope="col">User Name</th>
    <th width="15%" scope="col">Email</th>
    <th width="7%" scope="col">Gender</th>
    <th width="17%" scope="col">Phone Number</th>
    <th width="13%" scope="col">Password</th>
   
  </tr>
  <?php
  include_once 'register_patient.php';
  $selectq="select * from patient";
  $runq=mysqli_query($conn,$selectq);
  $data=mysqli_num_rows($runq);
  if($data>0)
  {
	  while($x=mysqli_fetch_assoc($runq))
	  {
		  echo"
		  <tr>
		  <td>".$x['firstname']."</td>
		    <td>".$x['lastname']."</td>
			 <td>".$x['username']."</td>
			 <td>".$x['email']."</td>
			 <td>".$x['gender']."</td>
			 <td>".$x['phonenumber']."</td>
			  <td>".$x['password']."</td>
			   
		  </tr>
		  ";
		  }
	  }
	  else
	  {
		  echo"no data";
		  }
  ?>
</table>
</body>
</html>