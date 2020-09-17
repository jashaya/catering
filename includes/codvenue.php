<?php
session_start();
require("../doconnect/code.php");
$delivery=$_POST['txtddelivery'];
$venue=$_POST['txtvenue'];
$street=$_POST['cmbstreet'];
$city=$_POST['txtcity'];
$pin=$_POST['txtpin'];
$phone=$_POST['txtphone'];
$date=date("y/m/d");
$_SESSION['street']=$street;
$_SESSION['uname']=$una;
$SEL="SELECT cust_name,cust_id FROM customer WHERE username='$una'"; 
$res=mysql_query($SEL,$con);
$r=mysql_fetch_array($res);
$cust_id=$r[1];
$maxor=0;
$selmax="select max(order_id)+1 from `order`";
$resmax=mysql_query($selmax,$con);
if($max_order=mysql_fetch_array($resmax))
{
	$maxor=$max_order[0];
}
if($maxor=="")
{
$maxor=1;	
}

$ins="INSERT INTO `order`(`order_id`,`cust_id`,`order_date`,`delivery_date`,`order_status`,`name`,`street`,`city`,`pincode`,`phone_no`) values('$maxor','$cust_id','$date','$delivery','active', '$venue','$street','$city','$pin','$phone')";
mysql_query($ins,$con);
?>
<meta http-equiv="refresh" content="0;URL=../index.php?id=orderfood" />

