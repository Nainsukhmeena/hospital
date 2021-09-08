<?php
include('db.php');
if($_GET['id']){
$id=$_GET['id'];
if($id==0){
 echo "<option>Select City</option>";
}else{
 $sql = mysqli_query($con,"SELECT * FROM state WHERE cntryid='$id'");
 while($row = mysqli_fetch_array($sql)){
 echo '<option value="'.$row['stateid'].'">'.$row['statename'].'</option>';
 }
 }
}
?>