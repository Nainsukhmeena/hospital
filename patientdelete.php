<?php
include 'db.php';
$name=$_GET['name'];
echo $q="DELETE FROM `patient` WHERE pname='$name'";
$run=mysqli_query($con,$q);
if ($run) {
	?>
	<meta content="0" http-equiv="refresh" URL="http://localhost:8080/hsm/ourpatient.php">
<?php
}



  ?>
  