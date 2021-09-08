<?php
include 'hshome.php';

$q="SELECT * FROM patient";
$run=mysqli_query($con,$q);
$total=mysqli_num_rows($run);
if ($total) {
	?>
	<div id="ourdoc1div">
	
	<table>
		<tr id="trr1"><th>Name</th><th>Email</th><th>age</th><th>address</th><th>phone</th><th>disease</th><th>admit-date</th><th colspan="2">operation</th></tr>
		<?php
	
}
while ($row=mysqli_fetch_array($run)) {
	?>
	<tr><td><?php echo $row['pname']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['age']; ?><td><?php echo $row['Address']; ?></td><td><?php echo $row['Phone']; ?></td><td><?php echo $row['disease']; ?></td><td><?php echo $row['admitdate']; ?></td><td><button type=""><a href="update.php" title="">Edit</a></button></td>

		<td><button type=""><a href="patientdelete.php?name=<?php echo $row['pname'];?>" onclick="return a()">Delete</a></button></td></tr>
	<?php
	
}

?>
<script type="text/javascript">
  	function a() {
  		return confirm("are u sure you want to delete this record")
  	}
  </script>

	<style type="text/css">
		#ourdoc1div{
			width: 900px;
			height: 300px;
			
			top: 55%;
			
			border-radius: 10px;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
		}
		#trr1{
			background-color: lightcoral;
		}
		table{
			width: 100%;
			height: 300px;
			
			border-collapse: collapse;
}
		tr,td{
			 border: 1px solid #ddd;

			  
		}
		th{
			font-size: 20px;
			 border: 1px solid #ddd;
		}
	
			tr:nth-child(even){background-color: #f2f2f2;}
			tr:hover {background-color: #ddd;}
		
		
	</style>

	</table>
</div>
	
