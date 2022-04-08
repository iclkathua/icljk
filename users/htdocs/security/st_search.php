<html>
<head>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ALL STUDENT DATA</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>ICL</title>
<script type="text/javascript">
	function refreshPage(){
		if(confirm("Are you sure, want to refresh?")){
			location.reload();
		}				
	}
</script>
<link rel="icon"  type="image/png" sizes="128×128" href="images/JKP.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv = 'cache-control' content = 'no-cache'>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="ICL-CONTAINER.css">
<style>
.hr{
    border:0;
    margin:0;
    width:100%;
    height:3px;
    background:green;
}
* {
  box-sizing: border-box;
}

@media only screen and (max-width: auto) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
<style type="text/css">
.img {
    object-fit:cover;
    object-position:center;
    width:50px;
    height:50px;
}
.bodydiv {
  margin: 0 auto;
  padding: 0px;
}
</style>
</head>
<body class="ICL-CONTAINER ICL-white">
    
<div class="ICL-CONTAINER ICL-white name">
<img src="images/LOGO.png" style="width:20%;"><br>

<h7>
<a href="/index.php"><input type="button" value="Home"></a>
<input type="button" value="Refresh Webpage." onclick='refreshPage()'/>
</h7><br>


<h2>DETAIL LIST</h2>
<table width="99%"  class='table table-bordered table-striped' border="3" align="center">
 <tr >
<td bgcolor='#E6E600'>ROLL_NO</td>
<td bgcolor='#E6E600'>NAME</td>
<td bgcolor='#E6E600'>PARENTAGE</td>
<td bgcolor='#E6E600'>DOB</td>
<td bgcolor='#E6E600'>SEX</td>
<td bgcolor='#E6E600'>MOBILE</td>
<td bgcolor='#E6E600'>COURSE</td>
<td bgcolor='#E6E600'>IMAGE</td></tr>
<?php
      display();
    function display(){
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
 $sql="select * from student where rno=$_POST[roll] and rno=$_POST[psw]";
        $query=mysqli_query($con,$sql);
        $num=mysqli_num_rows($query);
        for ($i=0; $i <$num; $i++){
            $result=mysqli_fetch_array($query);
            $img=$result['image'];
            $i=$result['Id'];
              $r=$result['rno'];
                $n=$result['name'];
                $p=$result['parentage'];
                $d1=$result['day'];
                $d2=$result['month'];
                $d3=$result['year'];
                $s=$result['sex'];
                $m=$result['mobile'];
		        $c=$result['course'];
	        
      $photo='<img class="img" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
            echo "<tr>";
            echo "<td>$r</td>";
            echo "<td>$n</td>";
            echo "<td>$p</td>";
            echo "<td>$d1-$d2-$d3</td>";
            echo "<td>$s</td>";
            echo "<td>$m</td>";
            echo "<td>$c</td>";
            echo "<td>$photo</td>";
           echo "</tr>"."<br>";


          
        }

  echo "</table>"; 
    }
?>
	<button>LETS STUDY </button>
<hr class="hr">
<h6> Design & Programming.. By Jatinder</h6>
    
</body>
</html>