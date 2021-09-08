<!doctype html>
<html>
<head>
<title>d Ajax</title>
</head>
<body>
<div>
<label>Country :</label><select name="country" class="country">
<option value="0">Select Country</option>
<?php
include('db.php');
$sql = mysqli_query($con,"SELECT * FROM cntry");
while($row=mysqli_fetch_array($sql))
{
echo '<option value="'.$row['cntryid'].'">'.$row['cntryname'].'</option>';
} ?>
</select><br/><br/>
<label>City :</label><select name="city" class="city">
<option>Select City</option>
</select>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;
 
$.ajax
({
type: "GET",
url: "prctic.php",
data: post_id,
cache: false,
success: function(nain)

{
	
$(".city").html(nain);
} 
});
 
});
});
</script>
</body>
</html>











  