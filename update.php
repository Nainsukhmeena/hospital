<?php
include 'hshome.php';
$_GET['id'];
$_GET['name'];
$_GET['email'];
$_GET['address'];
$_GET['phone'];
$_GET['specialization'];


?>

	<style type="text/css">
		#newdocdiv{
			width: 500px;
			height: 400px;
			background-color: white;
			box-shadow: 2px 2px 2px 2px gray;
			
			top: 55%;
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
				<center><header id="headnd">EDIT RECORD</header></center>
	<tr><input type="taxt" name="id" placeholder="id" value="<?php echo $_GET['id'];?>"></tr><br>

<tr><input type="taxt" name="name" placeholder="Name" value="<?php echo $_GET['name'];?>"></tr><br>

<tr><input type="taxt" name="email" placeholder="email" value="<?php echo $_GET['email'];?>"></tr><br>

<tr><input type="taxt" name="Address" placeholder="address" value="<?php echo $_GET['address'];?>"></tr><br>

               <tr><input type="taxt" name="phoneno" placeholder="phoneno" value="<?php echo $_GET['phone'];?>"></tr><br>

				<tr><input type="taxt" name="Specialization" placeholder="Specialization" value="<?php echo $_GET['specialization'];?>"></tr><br>

				<input type="submit" name="submit" value="Update">
			</table>

		</form>
		
	</div>
	<?php
if (isset($_GET['submit'])) {
	$id=$_GET['id'];
	$name=$_GET['name'];
	$email=$_GET['email'];
	$Address=$_GET['address'];
	$phone=$_GET['phone'];
	$speci=$_GET['specialization'];
	
	echo $q="UPDATE doctor SET id='$id',name='$name',email='$email',Address='$Address',Phone='$phone',Specialization='$speci' WHERE id='$id'";
	$run=mysqli_query($con,$q);
	if ($run) {
		?>
		<script type="text/javascript">
			alert("Record update sucessfully!");
		</script>
		<?php

	}
	else{
		echo "not updateded";
	}
}


	?>
