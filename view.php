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
    <th width="5%" scope="col">ID</th>
    <th width="14%" scope="col">First Name</th>
    <th width="14%" scope="col">Last Name</th>
    <th width="13%" scope="col">User Name</th>
    <th width="13%" scope="col">Email</th>
    <th width="14%" scope="col">Gender</th>
    <th width="16%" scope="col">Phone Number</th>
    <th width="16%" scope="col">Password</th>
    <th colspan="2" width="16%" >action</th>
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
		  <td>".$x['firstname']."</td>
		    <td>".$x['lastname']."</td>
			 <td>".$x['username']."</td>
			 <td>".$x['email']."</td>
			 <td>".$x['gender']."</td>
			 <td>".$x['phonenumber']."</td>
			  <td>".$x['password']."</td>
			   <td><a href='update_doctor.php?username=".$x['username']."'>edit</a></td>
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