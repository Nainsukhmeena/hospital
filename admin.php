
<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

$qry="SELECT * FROM login WHERE username='$username'AND password='$password'";

	$result=mysqli_query($con,$qry);
$total=mysqli_num_rows($result);
		if($total>0){
		$_SESSION['uname']=$username;
		header('location:hshome.php');
	}
	else{
		
	?>
	<script type="text/javascript">
		confirm("username and password does not match try agein!")
	</script>
	<?php
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
	#main{
		width: 400px;
		height: 300px;
		background-color: white;
		opacity: 0.9;
		top: 60%;
		left: 70%;
		transform: translate(-50%, -50%);
		position: absolute;
		border-radius: 20px;
		box-shadow: 3px 3px 3px 3px gray;
	}
	
	input{
		width: 100%;
		height: 40px;
		margin-top: 10px;
		font-size: 30px;
		background-color: lightblue;
		opacity: 0.7;
		text-align: center;
		cursor: pointer;
	}
	
	
	#head{
		width: 100%;
		height: 100px;
		
		color: white;
		opacity: 0.7;
	}
	h1{
		text-align: center;
		font-size: 40px;border-bottom: 1px;
		text-align: center;
		float: left;
	}
	body{
		background-image: url('a.jpg');
		background-size: cover;
		
	}
	#forget{

		text-decoration: none;
		font-size: 20px;
		float: right;

	}
	
	#hedlogo{
		float: left;
		width: 30%;
	}
	#hedlogo img{
		border-radius: 50%;
		float: right;
	}
	#hding1{
		float: left;
		width:70%;

	}


</style>
</head>
<body>
	<div id="head">
		<div id="hedlogo">
			<img src="heartbeet.jpg" alt="" width="100px" height="100px">
			
		</div>
<div id="hding1">
		<h1>Aacharya Shree Nanesh Hospital</h1></div>
	</div>
	<div id="main">
		
		<form action="" method="POST">
			<table border="1">
				<tr><center><img src="log.png" alt="" width="80" height="80"></center></tr>
<tr><input type="taxt" name="user" placeholder="username"></tr><br>
<tr><input type="password" name="pass" placeholder="password"></tr><br>
				<tr><input type="submit" name="submit" value="Login"></tr>
				<a href="forget.php" title="" id="forget">Forget password?</a>
			</table>
		</form>
	</div>
	
</body>
</html>