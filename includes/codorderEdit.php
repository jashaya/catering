<?php 
 require("../doconnect/code.php");
 session_start();
  if(isset($_SESSION['orderid']))
  $bill=$_SESSION['orderid'];
for($i=1;$i<=$_SESSION['numrowEdit'];$i++)
{
	$qty=$_POST[txt.$i];
$prodid=$_POST[prodid.$i];
$upd="update order_cart set quantity=$qty where order_id=$bill and product_id='$prodid'";
mysql_query($upd,$con);
}
	

?> <meta http-equiv="refresh" content="0;URL=../index.php?id=orderEdit" /> 