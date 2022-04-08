<html>
<head>
  <title>ICL COMPUTERS</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "icljkcom_user";
$password = "jat$$$@123";
$dbname = "icljkcom_db";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $image1 = $_FILES['image1']['tmp_name'];
            $image2 = $_FILES['image2']['tmp_name'];
            $image3 = $_FILES['image3']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image)); 
            $imgContent1 = addslashes(file_get_contents($image1));
            $imgContent2 = addslashes(file_get_contents($image2));
            $imgContent3 = addslashes(file_get_contents($image3));
          // Course Data from Online.php start   
foreach ($_POST['course'] as $select)
{
    

switch ($select) {
  case "1":
     $cname="PGDCA";
    // echo "Course Name :" .$cname;
    break;
  case "2":
    $cname="PGDCS";
   // echo "Course Name :" .$cname;
    break;
  case "3":
    $cname="ADCPS";
   // echo "Course Name :" .$cname;
    break;
    case "4":
    $cname="HDCS";
   // echo "Course Name :" .$cname;
    break;
    case "5":
    $cname="DCOMP";
   // echo "Course Name :" .$cname;
    break;
    case "6":
    $cname="ADCA";
  //  echo "Course Name :" .$cname;
    break;
    case "7":
    $cname="ADCS";
   // echo "Course Name :" .$cname;
    break;
    case "8":
    $cname="ADCFA";
   // echo "Course Name :" .$cname;
    break;
    case "9":
    $cname="DCOSA";
   // echo "Course Name :" .$cname;
    break;
    case "10":
    $cname="ACCSS";
   // echo "Course Name :" .$cname;
    break;
    case "11":
    $cname="MCCS";
    //echo "Course Name :" .$cname;
    break;
    case "12":
    $cname="DCFA";
   // echo "Course Name :" .$cname;
    break;
    case "13":
    $cname="DDTP";
   // echo "Course Name :" .$cname;
    break;
    case "14":
    $cname="DWD";
    //echo "Course Name :" .$cname;
    break;
    case "15":
    $cname="DCA";
   // echo "Course Name :" .$cname;
    break;
    case "16":
    $cname="DCS";
   // echo "Course Name :" .$cname;
    break;
    case "17":
    $cname="CCA";
   // echo "Course Name :" .$cname;
    break;
    case "18":
    $cname="CCS";
   // echo "Course Name :" .$cname;
    break;
    case "19":
    $cname="CBC";
   // echo "Course Name :" .$cname;
    break;
    case "20":
    $cname="CCFA";
   // echo "Course Name :" .$cname;
    break;
    case "21":
    $cname="SHORT TERM";
   // echo "Course Name :" .$cname;
    break;
    case "22":
    $cname="SPECIAL COURSE";
   // echo "Course Name :" .$cname;
    break;
    case "23":
    $cname="?";
   // echo "Course Name :" .$cname;
    break;
    case "24":
    $cname="ADCPS";
   // echo "Course Name :" .$cname;
    break;
    case "25":
    $cname="ADCPS";
   // echo "Course Name :" .$cname;
    break;
    case "26":
    $cname="ADCPS";
   // echo "Course Name :" .$cname;
    break;
    case "27":
    $cname="?";
   // echo "Course Name :" .$cname;
    break;
    case "28":
    $cname="?";
   // echo "Course Name :" .$cname;
    break;
    case "29":
    $cname="?";
   // echo "Course Name :" .$cname;
    break;
    case "30":
    $cname="?";
   // echo "Course Name :" .$cname;
    break;
    
  default:
    $cname="nothig";
}
$coursename=$cname;
}

// Course Data from Online.php END
         
      

            // Insert image content into database 
            $insert = $db->query("INSERT into student (rno,email,name,parentage,day,month,year,sex,mobile,course,image,image1,image2,image3, uploaded) VALUES ('$_POST[rno]','$_POST[email]','$_POST[name]','$_POST[parentage]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[sex]','$_POST[mobile]','$coursename'            ,'$imgContent','$imgContent1','$imgContent2','$imgContent3', NOW())"); 
  
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
               include("/home/icljkcom/users/htdocs/security/regular.php");
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
               include("/home/icljkcom/users/htdocs/security/regular.php");
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to
            upload.'; 
               include("/home/icljkcom/users/htdocs/security/regular.php");
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
           include("/home/icljkcom/users/htdocs/security/regular.php");
    } 

}
// Display status message 
 echo "Course Name :" .$cname;
 echo "<br/>";
echo $statusMsg; 


$db->close();

 
?>

</body>

</html>

