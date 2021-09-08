<?php
session_start();
include 'db.php';
?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css">
		#hd1{
			width: 100%;
			height: 50px;
			background-color: lightcoral;
			box-shadow: 2px 2px 2px 2px gray;
			
		}
		#dleft{
			width: 70%;
			height: 50px;
			float: left;
		}
		#dright{
			width: 30%;
			height: 50px;
			float: left;
		}
		ul{
			list-style: none;
		}
		li{
			display: inline;
			padding: 10px;
			border: 1px solid;
		}
		li a{
			text-decoration: none;
			color: white;
			font-size: 20px;
		}
		body{
			background-color: #D3D3D3;
		}
		#dleft p{
			font-size: 20px;
		}
		#manudiv{

		}
		

	</style>
</head>
<body>
	<div id="hd1">
		<div id="dleft"><h3>Hospital Management System</h3></div>
		<div id="dright"><p id="sesion1"><?php echo "Welcome  ".strtoupper($_SESSION['uname']);?></p></div>
	</div>

	<div id="manudiv">
		<ul><center>
			<li><a href="profile.php" title="">Profile</a></li>
			<li><a href="dashbord.php" title="">Dashbord</a></li>
			<li><a href="docter.php" title="">Doctor</a></li>
			<li><a href="patient.php" title="">patient</a></li>
			<li><a href="forget.php" title="">Change password</a></li>
			<li><a href="logout.php">Logout</a></li></center>
			
		</ul>
		
	</div>
	<?php
include 'footer.php';
	?>
	
</body>
</html>
