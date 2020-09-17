<?php
session_start();
if(isset($_GET['id']))
$id=$_GET['id'];
?>
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

   <?php
   if(isset($_SESSION['role']))
   {
	   if($_SESSION['role']=='Admin')
	   include("includes/admin.php");
	   else if($_SESSION['role']=='User')    // specifying the role ie , based on which user role that session has ; redirected to the page
	   include("includes/reguser.php");
   }
	   else
  	 include("includes/user.php");
 ?>

  </div>

  <div id="templatemo_topsection">Online Catering</div>

  <div id="templatemo_headersection"><img src="images/templatemo_header_photo.jpg" class="reflect rheight20 ropacity25" alt="templatemo.com" width="806" height="166"  /></div>

  

  <div id="templatemo_content_section">

   <div>
   <?php
   if(isset($_GET['id']))
   {
   if($id=="login")
   include("includes/dlog.php");
   if($id=="registration")
   include("includes/dcustreg.php");
   else if($id=="orderfood")
   include("includes/dfoodorder.php");
   else if($id=="foodadd")
   include("includes/dfoodadd.php");
   else if($id=="location")
   include("includes/dlocation.php");
   else if($id=="staff")
   include("includes/dstaff.php");
   else if($id=="venue")
   include("includes/dvenue.php");
   else if($id=="productaddd")
   include("includes/codproductaddd.php");
   else if($id=="orderview")
   include("includes/dorderviewc.php");
   else if($id=="vieworderdetails")
   include("includes/view.php");
   else if($id=="Feedback")
   include("includes/dfeedback.php");
   else if($id=="menu")
   include("includes/dListMenu.php");
    else if($id=="codorderEdit")
   include("includes/codorderEdit.php");
   else if($id=="orderEdit")
   include("includes/orderEdit.php");
   else if($id=="usermenu")
   include("includes/dStaticMenu.php");
  else if($id=="dobill")
   include("includes/doBrowse.php");
   else if($id=="bill")
   include("includes/BrowseBill.php");
   else if($id=="category")
   include("includes/dCategory.php");
   else if($id=="EditProfile")
   include("includes/dEditcustreg.php");
   else if($id=="foodEdit")
   include("includes/dFoodEdit.php");
   else if($id=="feedview")
   include("includes/dFeedView.php");
   else if($id=="logout")
   include("includes/logout.php");
   else if($id=="about")
   include("includes/aboutus.php");
   else if($id=="contact")
   include("includes/contact.php");
      else
   include("includes/home.php");
   }
  else
 include("includes/home.php");
   ?>
      </div>

    <p><img src="images/templatemo_special.jpg" alt="templatemo.com" width="206" height="159" /></p>
  </div>
  <div id="templatemo_footer"><span class="templatemo_footer"><u><a href="http://webtemplates.dezinehub.com"></a></u></span></div>
</div>
</body>
</html>