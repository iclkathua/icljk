<?php
$servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>