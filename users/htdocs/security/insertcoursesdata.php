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

$sql="INSERT INTO courses (Course_Name,Qualification,Duration,Fee)VALUES('$_POST[Course_Name]','$_POST[Qualification]','$_POST[Duration]','$_POST[Fee]')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();

include("/home/icljkcom/users/htdocs/security/alldata.html"); 
?>

</body>

</html>
