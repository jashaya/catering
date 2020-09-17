<?php 
require("../doconnect/code.php");
session_start();
if(isset($_SESSION['orderid']))
 $orid=$_SESSION['orderid'];
 $sel="SELECT * FROM `order_cart` WHERE `order_id`=$orid";
 $res=mysql_query($sel,$con);
 while($r=mysql_fetch_array($res))
 {
$ins="INSERT INTO `order_details`(`order_id`, `product_id`, `quantity`) VALUES ($r[0], '$r[1]', '$r[2]')"	;
mysql_query($ins,$con); 
 }
 $del="delete from order_cart where `order_id`=$orid";
 mysql_query($del,$con);

?>
THANK YOU.....FOR BEING A MEMBER...
<meta http-equiv="refresh" content="2;URL=../index.php?id=orderfood" />