<?php
$pass = $_POST["pass"];
switch ($pass)
{
case "1947":
include ("index.php");
//<?php include("/home/icljkcom/users/htdocs/security/newsinsert.html"); ?>
break;
default:
include "index.php";
} 
?>
