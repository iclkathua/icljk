<html>
<head>
  <title></title>
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

$sql = "truncate table online_student";

if ($conn->query($sql) === TRUE) {
  echo "Table deleted successfully";
} else {
  echo "Error deleting Table: " . $conn->error;
}

$conn->close();
include("/home/icljkcom/users/htdocs/security/alldata.html"); 
?>


</body>
</html>

