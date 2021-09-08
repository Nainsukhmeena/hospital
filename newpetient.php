<?php

include 'hshome.php';
if (isset($_GET['submit'])) {
$name=$_GET['name'];
$email=$_GET['email'];
$age=$_GET['age'];
$address=$_GET['Address'];
$phone=$_GET['phone'];
$disease=$_GET['disease'];
$adddate=$_GET['admitdate'];

echo $q="INSERT INTO `patient`(`pname`, `email`, `age`, `Address`, `Phone`, `disease`, `admitdate`) VALUES ('$name','$email','$age','$address','$phone','$disease','$adddate')";
$run=mysqli_query($con,$q);
$total=mysqli_num_rows($run);
if (!$total==1) {
	echo "insert ok";
}
else{
	echo "not insert";
}

}



?>

	<style type="text/css">
		#newdocdiv{
			width: 500px;
			height: 400px;
			background-color: white;
			top: 60%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;		}
	#th1{
		font-size: 30px;
	}
	input{
		text-align: center;
		height: 30px;
		width: 300px;
		margin-top: 10px;
		margin-left: 100px;
	}
	#headnd{
		font-size: 30px;
		border: 1px solid;
		background-color: lightcoral;
	}
	</style>

	<div id="newdocdiv">
		<form mathod="GET">
			<table width="100%">
				<center><header id="headnd">Add New Patient</header></center>
				<tr><input type="taxt" name="name" placeholder="Name"></tr><br>
				<tr><input type="email" name="email" placeholder="email"></tr><br>
				<tr><input type="taxt" name="age" placeholder="age"></tr><br>
				<tr><input type="taxt" name="Address" placeholder="address"></tr><br>
<tr><input type="taxt" name="phone" placeholder="phone no"></tr><br>
				<tr><input type="taxt" name="disease" placeholder="
disease"></tr><br>
<tr><input type="date" name="admitdate" placeholder="
addmit date"></tr><br>
<tr><input type="submit" name="submit" value="submit"></tr>
			</table>

		</form>
		
	</div>
	
	
