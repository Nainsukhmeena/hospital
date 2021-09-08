<?php
include 'hshome.php';

?>

	<style type="text/css" media="screen">
		.div1{
			width: 650px;
			height: 300px;
			top: 55%;
			left: 50%;
			transform: translate(-50%,-50%);
			position: absolute;
			background-color: white;
			opacity: 0.8;
			float: left;
		
		}
		#secl{
			float:left;
			width: 200px;
			height: 150px;
			background-color: white;
			

		}
		#secl a{
			text-decoration: none;
		}
		#secr{
			float:left;
			width: 200px;
			height: 150px;
			background-color: white;
			margin-left:10px;

		}
		#secr a{
			text-decoration: none;

		}
		#secl1{
			float:left;
			width: 200px;
			height: 150px;
			background-color: white;
		}
		#secl1 a{
			text-decoration: none;
		}
		#secr1{
			float:left;
			width: 200px;
			height: 150px;
			background-color: white;
			margin-left:10px;

		}
		#secr1 a{
			text-decoration: none;
		}
		header{
			border-bottom: 2px solid;
		}
		#log2{
			float: left;
			width: 200px;

		}#log2 a{
			text-decoration: none;
		}
		#log1{
			width: 200px;
			float: left;
		}
		#log1 a{
			text-decoration: none;
		}
		img{
			box-shadow: 3px 3px 3px 3px gray;
			border-radius: 50%;
		}
	</style>

	<div class="div1">
		
			<section id="secl"><center><a href="docter.php" title=""><img src="doimg.png" alt="" width="100px" height="100px"><header>Doctor</header></a></section>
			<section id="secr"><center><a href="patient.php" title=""><img src="ptimg1.png" alt="" width="100px" height="100px"><header>Patient</header></a>
			</center></section>
	
		<section id="secl1"><center><a href="" title=""><img src="apmnt.png" alt="" width="100px" height="100px"><header>Appointment</header></a></section>
			<section id="secr1"> <center><a href="profile.php" title=""> <img src="pro.png" alt="" width="100px" height="100px"><header>Profile</header></a></center></section>
			<section id="log1"> <center><a href="forget.php" title=""> <img src="cgpswd.jpg" alt="" width="100px" height="100px"><header>Change password</header></a></center></section>
			<section id="log2"> <center><a href="logout.php" title=""> <img src="lout.jpg" alt="" width="100px" height="100px"><header>Logout</header></a></center></section>
		
	</div>
	
