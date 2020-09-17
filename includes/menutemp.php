<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>restaurant company - free website template</title>

<meta name="keywords" content="restaurant company, free website template, CSS, HTML, templatemo.com" />

<meta name="description" content="restaurant company - free website template, HTML CSS layout" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="reflection.js"></script>

</head>

<body>

<div id="templatemo_container">

  <div class="templatemo_topmenu">

  
  </div>

  <div id="templatemo_topsection">Online Catering</div>

  <div id="templatemo_headersection"><img src="../images/templatemo_header_photo.jpg" class="reflect rheight20 ropacity25" alt="templatemo.com" width="806" height="166"  /></div>

  

  <div id="templatemo_content_section">

   <div>
   <?php
   require("../doconnect/code.php");
  $sel="SELECT * FROM `product_details`";
$res=mysql_query($sel,$con);
while($r=mysql_fetch_array($res))
{
?>
<div id="tabl" style="float:left;border:thin;border-color:#FFC;overflow:hidden;">
<table width="280" border="0">

  <tr>
    <td width="94" rowspan="2"><img src="../food_photo/<?php echo $r[4];?>" title="<?php echo $r[0] ?>" alt="<?php echo $r[0] ?>" width="50px" height="50px;"/></td>
    <td width="170">Product Name:<?php echo $r[2];?></td>
    </tr>
  <tr>
    <td>Price:<?php echo $r[3];?></td>
  </tr>
  <tr></tr>
   <tr></tr>
    <tr></tr> <tr></tr>
     <tr></tr> <tr><td></td><td><input name="btnBuy" type="button" value="Buy" /></td></tr> <tr></tr>
   <tr></tr>
    <tr></tr> <tr></tr>
</table>
</div>

<?php }?>
      </div>


   

   
  </div>
  <div id="templatemo_footer">Designed by RTS<span class="templatemo_footer"><u><a href="http://webtemplates.dezinehub.com"></a></u></span></div>
</div>
</body>
</html>