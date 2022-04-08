<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
	function refreshPage(){
		if(confirm("Are you sure, want to refresh?")){
			location.reload();
		}				
	}
	</script>
  <title>Fetch image from database in PHP</title>
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.img {
    object-fit:cover;
    object-position:center;
    width:30px;
    height:30px;
    
}
</style>
</head>
<body>

<h2 align="left">Detail List </h2>
<a href="/index.php"><input type="button" value="Home"></a>
<input type="button" value="Refresh Webpage." onclick='refreshPage()'/>
<a href="/admin.php"><input type="button" value="Back"></a></h4></h2>
<br/>
<table  id="customers">
  <tr>
    <td bgcolor="#E6E600">Id.</td>
     <td bgcolor="#E6E600">NEWS</td>
     
  </tr>

<?php

include "dbConfig.php"; // Using database connection file here

$records = mysqli_query($db,"select * from NEWS"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
   
?>
   <tr>
      
     
    <td><?php echo $data['sno']; ?></td>
    
      <td><?php echo $data['news']; ?></td>
       
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>