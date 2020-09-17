<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.01 Transitional//EN" "http://www.w3.org/TR/html5/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<style>
/*2.SLIDE SHOW OF IMAGE IN div slideshow container*/
* {box-sizing: border-box;}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
 padding:50px;
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
  font-size: 18px;
  transition: 0.6s ease;
  border-radius:0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.imslide{
	height:400px;}
	
/* Caption text */
.texto {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position:top;
  bottom: 20px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;

}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
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
@media only screen and (max-width: 00px) {
  .prev, .next,.text {font-size: 11px}
}
/*1.header div*/
#header{
color:rgba(249,249,249,1.00);
padding:20px;
background-color:rgba(91,103,155,1.00);
font-size:18px;
}
/*inside header link div*/
#links
a{
	/*margin-left:150px;
	margin-right:10px;*/
}
a:link,a:visited {
 color:rgba(251,242,242,1.00);
 text-decoration: none; 
 font-size:15px;
 } 
a:active,a:hover{ 
color:rgba(216,115,117,1.00);
text-decoration: none 
 }
h4{
	margin-left:auto;
}
/*3.div between of 3 images-top destinations*/
* {
  box-sizing: border-box;
}

.columno{
  float: left;
  width: 33.33%;
  padding: 5px;
  position: relative;
  text-align: center;
  color: white;
}

/* Clearfix (clear floats) */
.rowo::after {
  content: "";
  clear: both;
  display: table;
}
.between{
	text-align:center;
	text-shadow:rgba(71,102,164,1.00) solid 1px;
	padding:35px;
	color:rgba(80,114,184,0.99);
	font-size:25px;
}
/*text (neyyar) div class in div between*/
.centered {
	font-family:Cambria;
	font-stretch:expanded;
	font-size:20px;
  position: absolute;
  top:350px;
  left:190px;
  transform: translate(-50%, -50%);
}

/*4.div of experience kerala heading*/
.new{
	text-align:center;
	text-shadow:rgba(71,102,164,1.00) solid 1px;
     padding:35px;	
	color:rgba(80,114,184,0.99);
	font-size:25px;
}
/* 5.begining ofdiv-newsection of last 3 images section*/
.newsection{
	padding:70px;
	background-color:rgba(199,199,199,1.00);
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
 /* box-shadow:0 2px 4px 0 rgba(77,62,155,1.00),0 2px 10px 0 rgba(77,62,155,1.00);  */
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
/*last section images*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
/* overlying text stylefor div between*/
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:rgba(255,255,255,.5);
   rgba(259, 67, 95, 0.7);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}
.text {
	font-family:Cambria;
  color: black;
  font-size:17px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.columno {
  position: relative;
}
.columno:hover .overlay {
  height: 100%;
}
.footerstyle{
    font-family:Cambria;
  color: black;
  font-size:17px;
  text-align: center;  }
</style>
</head>
<body>
<div id="header"><img src="includes/images/kerala-tourism-title.png">
 <div id="links">
 <a href="" style="margin-left:625px">HOME</a>
 <a href="" style="margin-left:20px">EXPERIENCE KERALA</a>
 <a href="" style="margin-left:20px">DESTINATIONS</a>
 <a href="" style="margin-left:20px">TOUR PACKAGES</a>
 <a href="" style="margin-left:20px">CONTACT NUMBER</a></div>
</div>
<div class=""slideshow-container"">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="includes/images/ilavizhapoochira.jpg" class="imslide" style="width:100%">
  <div class="texto">Ilavizhapoochira</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="includes/images/kodikuthimala_walk_on_the_wild_side20190104104046_873_1.jpg" class="imslide" style="width:100%">
  <div class="texto">Kodikuthimala</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="includes/images/Jew-Town.jpg" class="imslide" style="width:100%">
  <div class="texto">Jew Town</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
<div class="between"><b>TOP DESTINATIONS</b></div>
<div class="rowo">
  <div class="columno">
    <img src="includes/images/Neyyar.jpg" class="image" style="width:99%;height:400px">
    <div class="overlay">
    <div class="text">The Neyyar Dam nearby is also famous due to its many features, chief amongst them being a picturesque picnic spot for families, friends and solo-travellers alike.</div></div>
    <div class="centered">NEYYAR DAM</div></div>
  <div class="columno">
    <img src="includes/images/Vasco-da-Gama-Square.jpg" class="image" style="width:99%;height:400px">
    <div class="overlay">
    <div class="text">Kochi, the commercial capital of Kerala, the last port of Vasco Da Gama, where you will find synagogues, mosques, churches and temples side by side, is a place with a fascinating history. </div></div>
    <div class="centered">VASCODAGAMA SQUARE</div></div>
  <div class="columno">
    <img src="includes/images/Kuruvadweep.jpg" class="image" style="width:99%;height:400px">
    <div class="overlay">
    <div class="text">Kuruvadweep or Kuruva Island comprises of a cluster of islets over the middle of Kabini River in Wayanad that is popular for the boat rides it offers on specially crafted bamboo rafts.</div></div>
    <div class="centered">KURUWA DWEEP</div></div></div>

<div class="new"><B>EXPERIENCE KERALA</B></div>

<div class="newsection">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="includes/images/athirappilly.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Athirapally Waterfalls</h2>
        <p>As you walk down the stone slabs that lead to the base of the Athirappalli waterfalls, a mysterious serenity overcomes you. It is Kerala's most famous and largest waterfall at over 80 ft high. The sight of the water crashing onto the ground leaves you with a sense of wonder at the sheer power and magnificence of nature. Located around 63 km from Thrissur district, it is a perennial picnic spot for people in the area and  beyond. Its surrounding greenery is perfect for walks and picnics with loved ones. Lying at the entrance to the Sholayar forest ranges, it is a part of the Chalakudy River which calls the Western Ghats its home.</p>
        <p><button class="button">Find More Activities</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="includes/images/ilavizhapoochira.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Ilavizhapoochira Highrange</h2>
        <p>Known as the land of letters, latex and lakes, Kottayam is among the most prominent districts in Kerala. Here lies the beautiful valley of Ilaveezhapoonchira, one amongst the many prime picnicking spots in the area. The beautiful hillocks near Kanjar are known to have great trails for trekking. The view in itself is breath-taking. During the Monsoons, the entire place transforms into a surreal spectacle. The terrain changes and one observes Nature at her best. It is highly recommended to view both sunrise and sunset from the valley as the picturesque landscape opens up in a unique and exhilarating way at those specific times. </p>
        <p><button class="button">Find More Activities</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="includes/images/Vazhvanthol.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Vazhavanthol Waterfalls</h2>
        <p>Starting from Kaanithara, the initial trek, through eucalyptus plantations could be easy at the beginning, but soon the mood changes, the gear shifts, and you would be panting like hell hauling yourself up the incline. Tall trees with their large canopies come as a welcome relief.This 5 km not so hard trekking to Vazhvanthol is an amazing experience. At top, you can see two waterfalls. Trekking through the forest area about 2 km you will reach the first falls. Can take rest here and enjoy the place. Restart your trek to half a kilometer to see the real beauty – the Vazhvanthol Falls. A guide will accompany you for this one-day trekking programme. </p>
        <p><button class="button">Find More Activities</button></p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
<p class="footerstyle">Department of Tourism, Government of Kerala, Park View, Thiruvananthapuram, Kerala, India - 695 033
            E-mail: info@keralatourism.org.</p>

</div>
</body>
</html>