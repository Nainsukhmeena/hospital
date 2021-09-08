<?php
include 'db.php';
$id=$_GET['id'];
echo $q="DELETE FROM `doctor` WHERE id='$id'";
$run=mysqli_query($con,$q);
if ($run) {
	?>
	<meta content="0" http-equiv="refresh" URL="http://localhost:8080/hsm/ourdocter.php">
	<?php
}

?>