<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.01 Transitional//EN" "http://www.w3.org/TR/html5/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<style>
#header{
color:rgba(249,249,249,1.00);
padding:6px;
background-color:rgba(91,103,155,1.00);
font-size:18px;
}
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
.new{
	text-align:center;
	text-shadow:rgba(71,102,164,1.00) solid 1px;
     padding:35px;	
	color:rgba(80,114,184,0.99);
	font-size:25px;
}
.newsection{
	padding:70px;
	background-color:rgba(199,199,199,1.00);
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
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
<div class="content"><img src="includes/images/img_mountains_wide.jpg" style="width:100%;height:200px"></div>
<div class="between"><b>TOP DESTINATIONS</b></div>
<div class="rowo">
  <div class="columno">
    <img src="includes/images/Neyyar.jpg" style="width:99%;height:150px"><div class="centered">NEYYAR</div></div>
  <div class="columno">
    <img src="includes/images/Vasco-da-Gama-Square.jpg" style="width:99%;height:150px"><div class="centered">VASCODAGAMA SQUARE</div></div>
  <div class="columno">
    <img src="includes/images/Kuruvadweep.jpg" style="width:99%;height:150px"><div class="centered">KURUWA DWEEP</div></div></div>
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
<div class="footer"></div>
</body>
</html>