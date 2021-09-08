<?php
include 'hshome.php';
if(isset($_GET['submit']))
 {
 	
$name=$_GET['name'];
$email=$_GET['email'];
$address=$_GET['Address'];
$phone=$_GET['phoneno'];
$specializ=$_GET['Specialization'];

$q="INSERT INTO `doctor`(`name`, `email`, `Address`, `Phone`, `Specialization`) VALUES ('$name','$email','$address','$phone','$specializ')";
$run=mysqli_query($con,$q);
$total=mysqli_num_rows($run);
if ($total==1 ) {
	?>
	<script type="text/javascript">
		alert("record saved sucessfully!");
	</script>
	<?php
}


 else{
 echo "not press";
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
				<center><header id="headnd">Add New Docter</header></center>
				<tr><input type="taxt" name="name" placeholder="Name"></tr><br>
				<tr><input type="email" name="email" placeholder="email"></tr><br>
				<tr><input type="taxt" name="Address" placeholder="address"></tr><br>
<tr><input type="taxt" name="phoneno" placeholder="phoneno"></tr><br>
				<tr><input type="taxt" name="Specialization" placeholder="Specialization"></tr><br>
				<input type="submit" name="submit" value="submit">
				<br>
			</table>

		</form>
		
	</div>
