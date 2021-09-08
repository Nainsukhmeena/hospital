	<style type="text/css" media="screen">
	footer{
		width: 100%;
		height: 30px;
		padding-top: 8px;
		background-color: lightcoral;
		margin-top: 450px;
		position: fixed;
	}	
	#footerdiv1{
		float: left;
		width: 80%;
		font-weight: bold;
	}
	#footerdiv2{
		float: left;
		width: 20%;

	}
	
	</style>

<footer>
<div id="footerdiv1">
	

	<center>Copyright &copy; 2021 || Designed By Nainsukh Ghunawat ||</center><p></div>
<div id="footerdiv2">
		<?php
include 'db.php';
$q1="SELECT * FROM visitor";
 $rst=mysqli_query($con,$q1);

	 $q="UPDATE visitor SET usercout = usercout+1";
	 mysqli_query($con,$q);
	 
	$row=mysqli_fetch_assoc($rst);
	echo "<b>Visited By</b>:-".$row['usercout'];






?></p></div></footer>	
