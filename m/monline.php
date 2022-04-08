<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ICL</title>
	<link rel="icon"  type="image/png" sizes="128Ã—128" href="images/JKP.png">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="mobile.icljk.com/mobile/js/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="icljk.com/mobile/js/jquery.js"></script>
	<script src="icljk.com/mobile/js/index.js"></script>
	<script src="icljk.com/mobile/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://www.icljk.com/ICL-CONTAINER.css">
<style>
 input[type=submit] {
                background-color: #1c87c9;
        border: none;
        color: white;
        padding: 5x 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border: 1px green;
  		border-radius: 50px; 
      
      }
    </style>
    <style>
.hr{
    border:0;
    margin:0;
    width:100%;
    height:3px;
    background:green;
}
.form {
        overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 15px; 
  		border-spacing: 0;
 		background:#FFFFFF;
 		font-size: 12px;
}
</style>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border-radius: 40px; 
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 4px;
  cursor: pointer;
}
.button1 {
  background-color: #f44336; /* Green */
  border-radius: 10px; 
  color: white;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 8px 4px;
  cursor: pointer;
}
.button1 {
  background-color: #008CBA; /* Green */
  border-radius: 10px; 
  color: white;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 8px 4px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>

<!-- Java Script for Marquee -->
<script src="https://icljk.com/jquery.min.js" type="text/javascript"></script>
<script src="//icljk.com/jquery.marquee.min.js?v=4" type="text/javascript"></script>
<!--style for horizontal marquee -->
<style type="text/css">
	.marquee,
    .marquee-with-options,
    .marquee-hor-before,
     .marquee-hor {
     	width: 100%;
        overflow: hidden;
		border: 1px solid White;
  		border-radius: 30px; 
  		border-spacing: 0;
 		background: #000099;
 		color:#FFFFFF;
		font-weight: normal;
            }
</style>

<!-- xml -->
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

 <style>
        #blink {
            font-size: 20px;
            font-weight: bold;
            color: #2d38be;
            transition: 0.5s;
        }
    </style>

 <!-- Style Sheet for clock-->
  <style>
     #clock{
          background-image: linear-gradient(to right, rgb(0,0,0)50%, rgb(204,0,0)51%);
          font-family: Arial;
          Color:white;
          font-size: 20px;
          text-align: center;
          width:100%;
          height:auto;
          border-radius: 10px;
          padding:0px;
          align:center;
      }
      
     
    .date {
         background-image: linear-gradient(to left, rgb(0,0,0)50%, rgb(204,0,0)51%);
           font-family: Arial;
           Color:white;
           font-size:15px;
           text-align: center;
           border: 0px solid Blue;
           border-radius: 10px;
                    }
                    </style>
</head>
<body class="ICL-CONTAINER ICL-white">
<table align="center"><tr>
    <td width="60%" align="left"><img src="/m/images/LOGO.png" style="width:98%"></td>
    <td width="40%" align="right">
        <label class="date" id="datee"></label><br>
          <label  class="clock" id="clock" >8:10:45</label>
            <script>
        setInterval(showTime, 1000);
        const d = new Date();
document.getElementById("datee").innerHTML = d.toDateString();
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
            
           let currentHour = hour + ":" 
                + min + ":" + sec + am_pm;
                
            let currentTime = hour;
            
               document.getElementById("clock")
                .innerHTML = currentTime;
                document.getElementById("clock")
                .innerHTML = currentHour;
         }
 
                showTime();
      
    </script></td>
    <td></td>
</tr></table>




<div class='marquee-with-options'>ICL Recognized &amp; Affiliated BY SARVA EDUCATION License by Central Govt.ofIndia , Vide Lic. No.2/114/T-I/08/D
Read with Notification of the Govt. of India No. GSR 288(E) dated 31.5.1991. CRN: U72900HP2008NPL03098 ***.</div>
<div align="center"><a href="https://icljk.com/m/index.php"><button class="button button2">Home</button></a> </div>
    <form method="post"  enctype="multipart/form-data" action="/online1.php">
      
    <table class="form"   align="center">
    <tr> <td colspan=2 width="100%"><center>ONLINE ADMISSION ENROLLMENT FORM</center><hr class="hr"></td></tr>
      <tr>
        <td>email</td>
        <td><input name="email" type="text" 
          placeholder="Enter email" Required></td>
        </tr>
        <tr>
        <td >Name</td>
        <td><input name="name" type="text" id="name"  
            placeholder="Enter Your Name" Required></td>
      </tr>
      <tr>
        <td>Parentage</td>
        <td><input name="parentage" type="text" id="parentage"  
          placeholder="Enter Parentage" Required></td>
      </tr>
      <tr>
        <td >D.O.B :</td>
        <td><input name="day" type="text" id="day" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="2" maxlength="2"
                placeholder="DD" required>
                <input name="month" type="text" id="month" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="2" maxlength="2"
                placeholder="MM" required>
                <input name="year" type="text" id="year" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="4" maxlength="4"
                placeholder="Year" required></td>
      </tr>
       <tr>
        <td>Sex</td>
        <td><select name="sex" required>
        <option value="">Select</option>
          <option name="sex" value="Male">Male</option>
          <option name="sex" value="Female">Female</option> 
        </select></td>
      </tr>
      <tr>
        <td>Mobile No.:</td>
        <td><input name="mobile" type="text" id="mobile" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="10"   maxlength="10"
                placeholder="Mobile No." required>
        </td>
      </tr>
      <tr>
        <td >Course Applied:</td>
        <td> <select name="course[]" onchange="showUser(this.value)" required>
          <option value="" >Select Program</option>
          <option name="course" value="1">PGDCA</option>
          <option name="course" value="2">PGDCS</option> 
          <option name="course" value="3">ADCPS</option>
          <option name="course" value="4">HDCS</option>
          <option name="course" value="5">DCOMP</option>
          <option name="course" value="6">ADCA</option>
          <option name="course" value="7">ADCS</option>
          <option name="course" value="8">ADCFA</option>
          <option name="course" value="9">DCOSA</option>
          <option name="course" value="10">ACCSS</option>
          <option name="course" value="11">MCCS</option>
          <option name="course" value="12">DCFA</option>
          <option name="course" value="13">DDTP</option>
          <option name="course" value="14">DWD</option>
          <option name="course" value="15">DCA</option>
          <option name="course" value="16">DCS</option>
          <option name="course" value="17">CCA</option>
          <option name="course" value="18">CCS</option>
          <option name="course" value="19">CBC</option>
          <option name="course" value="20">CCFA</option>
          <option name="course" value="21">SHORT TERM</option>
          <option name="course" value="22">SPECIAL COURSE</option>
              </select>
            

           </td>
            <tr>
              <td colspan="2" align="center">
               <div id="txtHint">
                    <p id="blink">Select Course & See Detail</p>
        <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
        </script></div>
                </td>
            </tr>
        <tr>
        <td>Passport Size Photograph</td>
        <td><input type="file"  name="image"></td>
      </tr>
       <tr>
        <td colspan=2><b>Qualifications[ Attatch Documents]</b></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>(1) Matric</td>
        <td>
            <input type="file"  name="image1" ></td>
      </tr>
      <tr>
        <td>(2) 10+2</td>
        <td><input type="file"  name="image2" ></td>
              </tr>
              <tr>
        <td>(3) (Graduation)</td>
        <td><input type="file"  name="image3"
       ></td>
      </tr>
     <tr>
        <td>&nbsp;</td>
        <td align="right"><input type="submit" name="submit" value="Upload">
            </td>
      </tr>
     
      <tr>
        <td colspan="2">AFTER CONFIRMATION OF YOUR ADMISSION , YOU WILL RECEIVE ROLL NO FROM OFFICE THROUGH SMS and EMAIL</td>
        </tr>
      <tr>
        <td colspan="2">1-ONLINE &amp; OFFLINE CLASSES</td>
        </tr>
      <tr>
        <td colspan="2">2-SOME PRACTICAL'S ARE COMPULSORY FOR ONLINE STUDENTS</td>
        </tr>
      <tr>
    <td colspan="2">
    3-AFTER AVAILABILITY OF ROLL NO .. ALL INFORMATION  AT STUDENT LOGIN</td>
        </tr>
    </table>
    
    </form>
      


<hr class="hr">
<div class="ICL-CONTAINER ICL-white marquee-with-options" align="center">
<img src="images/digital.png" height="50px" width="200px">
<img src="images/EDUCATION.png" height="50px" width="200px">
<img src="images/PRINTING.png" height="50px" width="200px">
<img src="images/software.png" height="50px" width="200px">
<img src="images/website.png" height="50px" width="200px">
<img src="images/TALLY.png" height="70px" width="200px">
<img src="images/PYTHONE.png" height="70px" width="200px">
<img src="images/VS.png" height="70px" width="200px">
<img src="images/DTP.png" height="70px" width="200px">
</div>
<hr class="hr">

 
 
 <script>
 $(function(){
    var $mwo = $('.marquee-with-options');
    $('.marquee').marquee();
    $('.marquee-with-options').marquee({
        //speed in milliseconds of the marquee
        speed: 100,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "left",
        speed: 1000
    });

    //pause and resume links
    $('.pause').click(function(e){
        e.preventDefault();
        $mwo.trigger('pause');
    });
    $('.resume').click(function(e){
        e.preventDefault();
        $mwo.trigger('resume');
    });
    //toggle
    $('.toggle').hover(function(e){
        $mwo.trigger('pause');
    },function(){
        $mwo.trigger('resume');
    })
    .click(function(e){
        e.preventDefault();
    })
});
</script>
 
  </body>
</html>