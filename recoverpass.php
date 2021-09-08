<?php
session_start();
include 'db.php';
$user=$_SESSION['user'];
if(isset($_POST['submit'])) 
{
	$pass=$_POST['pass'];
	
 $q="UPDATE login SET password='$pass' WHERE username='$user'";
 $run=mysqli_query($con,$q);
 if ($run==true) {
 	?>
 	<script type="text/javascript">
 		alert("password recover sucessfully!");
 	</script>
 	<?php
 }
 else{
 	echo "password recover ";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css">
		main{
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			position:

		}
	</style>
	
</head>
<body>
	<div id="main">
		<form method="POST">
		<input type="password" name="pass" placeholder="New pass">
		<input type="submit" name="submit">
	</form>
	</div>
</body>
</html>