
	<style type="text/css">
		#ourdoc1div{
			width: 900px;
			height: 300px;
			background-color: white;
			top: 55%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
		}
		table{
			width: 100%;
			border-collapse: collapse;
		}
		td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;

}
#trr1{
	background-color: lightcoral;
}
th{
	font-size: 20px;
	border: 2px solid;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
tr:hover {background-color: #ddd;
}
a {
	text-decoration: none;

	}

	

	</style>

<?php
include 'hshome.php';
$q="SELECT * FROM doctor";
$run=mysqli_query($con,$q);
$total=mysqli_num_rows($run);
if ($total!==0) {
	?>
	<div id="ourdoc1div">
<table>
		<tr id="trr1"><th>Name</th><th>Email</th><th>address</th><th>phone</th><th>Specialization</th><th colspan="2" rowspan="" headers="" scope="">operation</th></tr>
<?php
}

while ($row=mysqli_fetch_array($run)) {
	?>
<tr><td><?php echo $row['name']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['Address']; ?></td><td><?php echo $row['Phone']; ?></td><td><?php echo $row['Specialization']; ?></td>


	<td><button type=""><a href="update.php?id=<?php echo $row['docterid'];?> && name=<?php echo $row['name'];?>&& email=<?php echo $row['email'];?> &&address=<?php echo $row['Address'];?>&&phone=<?php echo $row['Phone'];?>&& specialization=<?php echo $row['Specialization'];?>" title="">Edit</a></button></td>



	<td><button type="" onclick=" return a();"><a href="delete.php?id=<?php echo $row['docterid'];?>" title="" >delete</a></button></td></tr>
	
	<?php



	
}





?>
<script type="text/javascript">
	function a() {
		return confirm("are you sure u want to delete this record!");
	}
</script>

	</table>
</div>

	


	