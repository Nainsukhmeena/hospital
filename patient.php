<?php
include 'hshome.php';
?>


	<style type="text/css" media="screen">
	#patientdiv{
		width: 300px;
		height: 200px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
		background-color: white;
	}	
	button{
		padding: 10px;
		margin-top: 30px;
		background-color: lightcoral;
	}
	button a{
		text-decoration: none;
		font-weight: bold;
	}
	</style>
<div id="patientdiv">
	<center>
	<button type="submit"><a href="newpatient.php" title="">New patient</a></button><br>
	<button type="submit"><a href="ourpatient.php" title="">our patient</a></button>
</center>

</div>	
