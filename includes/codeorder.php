<?php 
{
session_start();
$num=$_SESSION['numrow'];
echo $num;
require("../doconnect/code.php");
$sel="select max(order_id) from `order`";
$res=mysql_query($sel,$con);
if($r=mysql_fetch_array($res))
$orderid=$r[0];
$_SESSION['orderid']=$orderid;
for($i=1;$i<=$num;$i++)
{
		if((isset($_POST[txt.$i]))&&($_POST[txt.$i]!=""))
		{
$qty=$_POST[txt.$i];
$prodid=$_POST[prodid.$i];
$ins="INSERT INTO `order_cart`(`order_id`, `product_id`, `quantity`) VALUES ('$orderid', '$prodid', '$qty')";
mysql_query($ins,$con);
		}
	}
}
?><meta http-equiv="refresh" content="0;URL=../index.php?id=orderfood" />