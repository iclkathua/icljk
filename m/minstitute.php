<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	
	<title>ICL</title>
	<link rel="icon"  type="image/png" sizes="128Ã—128" href="images/JKP.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.icljk.com/ICL-CONTAINER.css">
   

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: #555;
  height: 500px;
  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<link rel="stylesheet" href="https://www.icljk.com/ICL-CONTAINER.css">
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

.column {
  float: left;
  padding: 10px;
  height: auto;                                       
}

.left{
  width: 40%;
}

.middle {
  width: 60%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (max-width: 480px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}

<script src="https://icljk.com/mobile/jquery.min.js" type="text/javascript"></script>
<script src="//icljk.com/mobile/jquery.marquee.min.js?v=4" type="text/javascript"></script
</style>

<!-- Java Script for Marquee -->
<script src="https://icljk.com/jquery.min.js" type="text/javascript"></script>
<script src="//icljk.com/jquery.marquee.min.js?v=4" type="text/javascript"></script>

<!-- Java Script for Marquee -->

<!-- Style Sheet for vertical Marquee -->
<style type="text/css">
	.marquee,
    .marquee-with-vertical,
    .marquee-ver-before,
    .marquee-ver {
        width: auto;
       
        overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 30px;  
  		border-spacing: 0;
 		background:#FFFFFF;
 		color:#000099;
		font-weight: normal;
            }
.marquee-with-dr{
     overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 30px; 
  		border-spacing: 0;
 		background: #000099;
 		color:#FFFFFF;
		font-weight: normal;
   }
   .marquee-with-options{
        overflow: hidden;
		border: 1px solid green;
  		border-radius: 30px; 
  		border-spacing: 0;
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
   
    .td {
  background:linear-gradient(to right,  rgb(221,255,204) 50%, rgb(201,255,229) 51%);
  border-radius: 60px;
   
}

.hr{
    border:0;
    margin:0;
    width:100%;
    height:1px;
    background:green;
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

<div>
<hr class="hr">
<img src="/m/images/CENTRE.png" style="width:100%"></div>
<hr class="hr">
<div align="center"><a href="http://icljk.com/m/monline.php"><p class="button1">Go Online</p>
<img src="/images/HAND.png"  width="15%" height="10%"></a>
<a href="http://icljk.com/m/monline.php"><img  src="/m/images/online.png" width="50%" height="12%"></a>
</div>


<div class="marquee-with-dr" align="center">ICL Recognized &amp; Affiliated BY SARVA EDUCATION License by Central Govt.ofIndia , Vide Lic. No.2/114/T-I/08/D
Read with Notification of the Govt. of India No. GSR 288(E) dated 31.5.1991. CRN: U72900HP2008NPL03098 ***.</div>

<div class="row">
  <div class="column left" >
      
         
       
          <a href="https://icljk.com/m/mlab.php"><img src="buttons/lab.png" width="100%" height="100%" alt="Lab"></a> 
          <br/>  
           <br/>
          <a href="https://icljk.com/m/mvision.php"><img src="buttons/vision.png" width="100%" height="45%" alt="Vision"></a>
         <br/>
          <br/>
          <a href="https://icljk.com/m/mabout.php"><img src="buttons/about.png" width="100%" height="45%" alt="About_Us"></a>
          </div>
    
  <div class="column middle" align="center" style="background-color:#bbb;">
       
    <img src="/mobile/images/LAPTOP.jpg" alt="" width="95%">
    </div> </div>
    
    
<div class="button" align="justify" style="left-margin=1% ; right-margin=1%;">
    <p align="center">
          <a href="https://icljk.com/m/index.php"><button class="button button2">Home</button></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  
          <a href="https://icljk.com/m/mcourses.php"><button class="button button2">Courses</button></a></p>
           <p >
               <img  src="/m/images/inst.png" width="100%" height="15%">
            ICL COMPUTER EDU. was established in the 1995 with DIC Cordination, DIC a GOVT. OF INDIA Center. The Institute has taken the responsibility and has made a sole – motto of disseminating knowledge and information , imparting Data Processing, education , bringing about social and cultural awakening , paving the way for scientific and technological advancement ICL COMPUTER Education so established vide Regd. no. 0705033989 Dated 03-02-1996 and is Affiliated BY SARVA EDUCATION License by Central Govt.ofIndia , Vide Lic. No.2/114/T-I/08/D Read with Notification of the Govt. of India No. GSR 288(E) dated 31.5.1991. CRN: U72900HP2008NPL03098 . The Institute is imparting instructions to the students for All Computer Courses.</p>
         
          </div>
  
    <div class="td" align="center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3368.804740208801!2d75.51043231497513!3d32.39759551054183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391c7013c93a85cd%3A0xe7f0646c5989dd0e!2sICL%20Computers!5e0!3m2!1sen!2sin!4v1625658927496!5m2!1sen!2sin" width="80%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
     
  <div  align="center">
        <p> <img src="/mobile/images/ICL2.gif" width="80%"> 
          <br>
          <a href="http://icljk.com/m/mstlog.php"><button class="button button2">Student Login Entry</button></a> 
          <br>
           <div class="marquee-with-vertical">
 <?php include("/home/icljkcom/users/htdocs/security/newsshow.php"); ?>
 </div>
  
          <br>
          
  </div>


<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<div class="marquee-with-vertical" width="50%">
<img src="/m/images/digital.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/EDUCATION.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/PRINTING.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="images/software.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/website.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/TALLY.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="images/PYTHONE.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/VS.png" height="100px" width="100%"><br>
<hr class="hr">
<img src="/m/images/DTP.png" height="100px" width="100%">
</div>


 <script>
 $(function(){
    var $mwo = $('.marquee-with-dr');
    $('.marquee').marquee();
    $('.marquee-with-dr').marquee({
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
        direction: 'right',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "right",
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

<script>
 $(function(){
    var $mwo = $('.marquee-with-vertical');
    $('.marquee').marquee();
    $('.marquee-with-vertical').marquee({
        //speed in milliseconds of the marquee
        speed: 100,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'up',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "up",
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

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active"> <p align="center">Copyright @ ICL
<script language="javascript" type="text/javascript">
	var today = new Date() 
	var year = today.getFullYear()
	document.write(year)
</script></p></a>
   <div id="myLinks">
    <a href="https://icljk.com/m/minstitute.php">The Institute</a>
    <a href="https://icljk.com/m/mlab.php">Computer Lab</a>
     <a href="https://icljk.com/m/mvision.php">Vision & Mission</a>
     <a href="https://icljk.com/m/mcourses.php">Courses</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:12px">
  <h4 align="center">ICL COMPUTER EDUCATION</h4>
  
</div>

</div>
<div>
   </div>


  </body>

</html>