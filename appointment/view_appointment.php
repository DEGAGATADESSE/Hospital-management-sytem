<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
</head>

<body>
<h3 align="center">List of appointment are</h3>
<table width="98%" border="1">
  <tr>
    <th width="13%" scope="col">First Name</th>
    <th width="13%" scope="col">Last Name</th>
    <th width="18%" scope="col">Email</th>
    <th width="9%" scope="col">Gender</th>
    <th width="13%" scope="col">Phone Number</th>
    <th width="7%" scope="col">age</th>
     <th width="7%" scope="col">weight</th>
      <th width="10%" scope="col">Symptom</th>
   
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
		  <td>".$x['firstname']."</td>
		    <td>".$x['lastname']."</td>
			 <td>".$x['email']."</td>
			 <td>".$x['gender']."</td>
			 <td>".$x['phonenumber']."</td>
			  <td>".$x['age']."</td>
			   <td>".$x['weight']."</td>
			    <td>".$x['symptom']."</td>
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