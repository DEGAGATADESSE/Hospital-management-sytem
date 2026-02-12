<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
</head>

<body>
<a href="admin_dashboard.php">Back</a><br />
<h3 align="center">List of appointment are</h3>
<table width="98%" border="1">
  <tr>
   <th width="4%" scope="col">ID</th>
    <th width="12%" scope="col">First Name</th>
    <th width="13%" scope="col">Last Name</th>
    <th width="12%" scope="col">Email</th>
    <th width="8%" scope="col">Gender</th>
    <th width="12%" scope="col">Phone Number</th>
    <th width="4%" scope="col">age</th>
     <th width="5%" scope="col">weight</th>
      <th width="21%" scope="col">Symptom</th>
      <th colspan="2" width="9%" scope="col">action</th>
   
  </tr>
  <?php
  include_once 'appointment.php';
  $selectq="select * from appointment";
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
			 <td>".$x['email']."</td>
			 <td>".$x['gender']."</td>
			 <td>".$x['phonenumber']."</td>
			  <td>".$x['age']."</td>
			   <td>".$x['weight']."</td>
			    <td>".$x['symptom']."</td>
				 <td><a href='delete_appointment.php?id=".$x['id']."'>delete</a></td>
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