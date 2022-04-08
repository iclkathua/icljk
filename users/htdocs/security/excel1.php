
<?php  
//export.php  
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
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM student";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Id</th>
                         <th>Roll_No</th> 
                         <th>Email</th>  
                         <th>Name</th>  
                         <th>Parentage</th>
                         <th>Sex</th>
                         <th>Date Of Birth</th>
                        <th>Mobile</th>
                         <th>Course</th>
                  
                                            </tr>
  ';
  while($row = mysqli_fetch_array($result))
  { 
   $output .= '
    <tr>  
                         <td>'.$row["Id"].'</td>  
                         <td>'.$row["rno"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["name"].'</td>  
       <td>'.$row["parentage"].'</td>
       <td>'.$row["sex"].'</td>
       <td>'.$row["day"].'/ '.$row["month"].'/'.$row["year"].'</td>
       <td>'.$row["mobile"].'</td>
       <td>'.$row["course"].'</td>
      
        
      
      
                         </tr>';
                     
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>