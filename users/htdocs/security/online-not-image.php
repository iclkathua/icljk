<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
	function refreshPage(){
		if(confirm("Are you sure, want to refresh?")){
			location.reload();
		}				
	}
</script>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Detail List 
<a href="/index.php"><input type="button" value="Home"></a>
<input type="button" value="Refresh Webpage." onclick='refreshPage()'/>
<a href="/admin.php"><input type="button" value="Back"></a></h4></h2>
</div>
<?php
  $servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$result = mysqli_query($con,"SELECT * FROM online_student");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>ID</td>
<td>Email</td>
<td>NAME</td>
<td>PARENTAGE</td>
<td>DAY</td>
<td>MONTH</td>
<td>YEAR</td>
<td>SEX</td>
<td>MOBILE</td>
<td>COURSE</td>
<td>Upload Dt</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["parentage"]; ?></td>
<td><?php echo $row["day"]; ?></td>
<td><?php echo $row["month"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["sex"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["course"]; ?></td>
<td><?php echo $row["uploaded"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>