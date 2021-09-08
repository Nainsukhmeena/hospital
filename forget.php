<?php 
include 'db.php';


if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$phone=$_POST['phone'];

echo $q="SELECT * FROM login WHERE username='$username' AND  phone='$phone'";
	$run=mysqli_query($con,$q);
	$total=mysqli_num_rows($run);
	if ($total==true) {
		header('location:recoverpass.php');
		$_SESSION['user']=$username;
	}
	else{
		?>
		<script type="text/javascript">
			alert("username and phone number does not match! please try again");
		</script>
		<?php
	}
	
}



?>





	<style type="text/css">
		#main{
			width: 300px;
			height: 200px;
			top: 50%;
			left:50%;
			transform: translate(-50%,-50%);
			position: absolute;
			background-color: white;
			


		}
		table{
			width: 100%;
		}
		input{
			margin-top: 10px;
		}

	</style>

	<div id="main">
		
	
<form action="" method="POST" accept-charset="utf-8">
	<table><center>
	<p><b>Recover your password</b></p>
	<input type="taxt" name="username" placeholder="username" required><br>
	<input type="number" name="phone" placeholder="phone number" required><br>
	<input type="submit" name="submit"></center></table>
</form></div>

	
