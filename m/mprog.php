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
           font-size:15x;
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
<style>
* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
 top:140px;
  position: fixed;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 30px;
  transition: 0.6s ease;
  border-radius: 0 9px 9px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 9px 0 0 9px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 10px;
  width: 8px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  position: fixed;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size:20px}
}
@media (max-height: 480px) and (min-width: 480px) and (max-width: 600px) { 
    html{
        -webkit-transform: rotate(90deg);
           -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
             -o-transform: rotate(90deg);
                transform: rotate(90deg);
        -webkit-transform-origin: left top;
           -moz-transform-origin: left top;
            -ms-transform-origin: left top;
             -o-transform-origin: left top;
                transform-origin: left top;
        width: 320px; /*this is the iPhone screen width.*/
        position: absolute;
        top: 100%;
            l
</style>
</head>
<body class="ICL-CONTAINER ICL-white">
   <div style="position: fixed;">
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

</div>
</div>



<div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">PGDCAS /18</div>
  <img src="https://icljk.com/images/courses-page-001.jpg" style="width:100%;  height:80%;">
  <div class="text">1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 /18</div>
  <img src="https://icljk.com/images/courses-page-002.jpg"style="width:100%;  height:80%;">
  <div class="text">ADCPS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 18</div>
  <img src="https://icljk.com/images/courses-page-003.jpg" style="width:100%;  height:80%;">
  <div class="text">HDCS , MDCS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 18</div>
  <img src="https://icljk.com/images/courses-page-004.jpg" style="width:100%;  height:80%;">
  <div class="text">DCOMP</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 18</div>
  <img src="https://icljk.com/images/courses-page-005.jpg" style="width:100%;  height:80%;">
  <div class="text">ADCA , ADACS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 18</div>
  <img src="https://icljk.com/images/courses-page-006.jpg" style="width:100%;  height:80%;">
  <div class="text">DCOSA, ADCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 18</div>
  <img src="https://icljk.com/images/courses-page-007.jpg" style="width:100%;  height:80%;">
  <div class="text">ACCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 18</div>
  <img src="https://icljk.com/images/courses-page-008.jpg"style="width:100%;  height:80%;">
  <div class="text">DCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 18</div>
  <img src="https://icljk.com/images/courses-page-009.jpg"style="width:100%;  height:80%;">
  <div class="text">DDTP</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 18</div>
  <img src="https://icljk.com/images/courses-page-010.jpg"style="width:100%;  height:80%;">
  <div class="text">DWD</div>
</div>
<div class="mySlides fade">
  <div class="numbertext"> 11 / 18</div>
  <img src="https://icljk.com/images/courses-page-011.jpg" style="width:100%;  height:80%;">
  <div class="text">DCA , DCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">12 / 18</div>
  <img src="https://icljk.com/images/courses-page-012.jpg"  style="width:100%;  height:80%;">
  <div class="text">CCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">13 / 18</div>
  <img src="https://icljk.com/images/courses-page-013.jpg" style="width:100%;  height:80%;">
  <div class="text">CBC</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">14 / 18</div>
  <img src="https://icljk.com/images/courses-page-014.jpg"  style="width:100%;  height:80%;">
  <div class="text">CCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">15 / 18</div>
  <img src="https://icljk.com/images/courses-page-015.jpg"  style="width:100%;  height:80%;">
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">16 / 18</div>
  <img src="https://icljk.com/images/courses-page-016.jpg" style="width:100%;  height:80%;">
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">17 / 18</div>
  <img src="https://icljk.com/images/courses-page-017.jpg"  style="width:100%;  height:80%;">
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">18 / 18</div>
  <img src="https://icljk.com/images/courses-page-018.jpg" style="width:100%;  height:80%;">
  <div class="text">POST GRADUATE DIPLOMA </div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center;position: fixed;"">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
  <span class="dot" onclick="currentSlide(11)"></span>
  <span class="dot" onclick="currentSlide(12)"></span>
  <span class="dot" onclick="currentSlide(13)"></span>
  <span class="dot" onclick="currentSlide(14"></span>
  <span class="dot" onclick="currentSlide(15)"></span>
  <span class="dot" onclick="currentSlide(16)"></span>
  <span class="dot" onclick="currentSlide(17)"></span>
  <span class="dot" onclick="currentSlide(18)"></span>
</div>
<div align="right"  style="position: fixed;top:370px;left:50px;">

<a href="http://icljk.com/m/monline.php">
<img src="/m/images/HAND.png"  width="20%" height="20%">
 <img src="/m/images/select.png" width="30%" height="40%"></a>
 
 </div>
 
<div align="center" style="position: fixed;top:420px;">


<a href="http://icljk.com/m/monline.php"><img  src="/m/images/online.png" width="50%" height="12%"></a><br>
<a href="https://icljk.com/m/index.php"><button class="button button2">Back To Home</button></a><br>
<button>Only Vertical</button>
</div>
 
 
 
  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

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



</html>