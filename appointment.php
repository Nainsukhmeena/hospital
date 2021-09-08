<?php 
include 'hshome.php';
$q="SELECT * FROM appointment";
$run=mysqli_query($con,$q);
if (mysqli_num_rows($run)) {
	?>
	<div id="appointmentdiv">
 	<table border="1">
 		<tr id="appfirst1"><th>id</th><th>patientid</th><th>doctorid</th><th>appointment_date</th><th>appointment_date</th></tr><?php
	
}
while ($row=mysqli_fetch_assoc($run)) {
	?>
	<tr><td><?php echo $row['id']?></td><td><?php echo $row['paitientid'];?></td><td><?php echo $row['docterid']?></td><td><?php echo $row['appointment_date'];?></td><td><?php echo $row['appointment_time'];?></td></tr>

 	</table><?php
}




 ?>
 <style type="text/css" media="screen">
 	#appointmentdiv{
 		top: 50%;
 		left: 50%;
 		transform: translate(-50%, -50%);
 		position: absolute;
 		width: 600px;
 		height: 300px;
 		background-color: white;
 	}
 	td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;

}
 	#appfirst1{
 		background-color: lightcoral;

 	}
 	table{
 		width: 100%;
 		height: auto;
 	}
 	
 </style>
 

 		
 </div>