<?php
session_start();
require("../doconnect/code.php");
$loc=$_POST['txtlocation'];
echo $_SESSION['uname'];
$ins="INSERT INTO `location`(`location_name`) VALUES ('$loc')";
mysql_query($ins,$con);
//$SEL="SELECT cust_id,cust_name FROM customer WHERE `cust_name`='$cname'"; 
//$res=mysql_query($SEL,$con);
//$r=mysql_fetch_array($res);
//$cust_name=$r[1];
//echo $cust_name;
?>