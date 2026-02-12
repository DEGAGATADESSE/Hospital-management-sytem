<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
<style type="text/css">
body,td,th {
	font-size: 18px;
}
body {
	background-color: #CCC;
}
</style>
</head>

<body>
<a href="admin_dashboard.php">Back</a>
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
                      <h3 align="left">List of doctors register </h3>
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
<table width="67%" border="1">
  <tr>
  <th width="5%">ID</th>
    <th width="14%">First Name</th>
    <th width="14%">Last Name</th>
    <th width="13%">User Name</th>
    <th width="13%">Email</th>
    <th width="14%">Gender</th>
    <th width="16%">Phone Number</th>
    <th width="16%">Password</th>
   <th colspan="2" width="20%" >action</th>
    
   
  </tr>
  <?php
  include_once 'register_doctor.php';
  $selectq="select * from doctors";
  $runq=mysqli_query($conn,$selectq);
  $data=mysqli_num_rows($runq);
  if($data>0)
  {
	  while($x=mysqli_fetch_assoc($runq))
	  {
		  echo"
		  <tr>
		  <td>".$x['id']."</td>
		  <td>".$x['firstname']."</td>
		    <td>".$x['lastname']."</td>
			 <td>".$x['username']."</td>
			 <td>".$x['email']."</td>
			 <td>".$x['gender']."</td>
			 <td>".$x['phonenumber']."</td>
			  <td>".$x['password']."</td>
			   <td><a href='delete_doctor.php?id=".$x['id']."'>delete</a></td>
			   <td><a href='update_doctor.php?id=".$x['id']."'>Edit</a></td>

		  </tr>
		  ";
		  }
	  }
	  else
	  {
		  echo"no data";
		  }
  ?>
   <tr>  <td><a href='register_doctors.html'>Add user</a></td>
</tr>
</table>
</body>
</html>