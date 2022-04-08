<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ICL</title>
<style>
    .outside-while{
        border:1px solid black;font-size:18;font-weight:bold;
        align:center;
    }
   </style>
</head>
<body>
   
  <?php
$servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sno,news FROM NEWS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
     
echo " <table >";
echo "<tr>";
echo "<td class='outside-while'  >";
 
    echo "". $row["sno"]."=" . $row["news"]. "...***...";
   
    echo "</td>";
echo "</tr>";
echo " </table>";

  }
 
  
} else {
  echo "0 results";
}



$conn->close();


include("/home/icljkcom/users/htdocs/security/alldata.html");
?>
</body>
</html>