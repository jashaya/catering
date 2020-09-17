<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<center>
<B><font size="+2"><u>ORDER LIST</u></font></B><br /><br /><br /><br />
<table width="577" border="0">
  
    <?php
	require("../doconnect/code.php");
	$sel="SELECT cust_name,order_id,`name`,`location_name`,`order`.`city`,`order`.`pincode`,`order_date`,`delivery_date` FROM `customer`,`order`,location WHERE customer.cust_id=order.cust_id and `order`.`street`=`location_id`";
	$r=mysql_query($sel,$con);
	$order=0;
	while($res=mysql_fetch_array($r))
	{
		$order=$res[1];
		?>
     <tr>
    <td width="93"><B>ORDER NO.</B></td>
    <td width="194"><B>NAME</B></td>
    <td width="131"><B>DELIVERY DATE</B></td>
    <td width="131"><B>ADDRESS</B></td>
  </tr>
  <tr>
    <td><b><?php echo$res['order_id'];?></b></td>
    <td><?php echo$res['cust_name'];?></td>
    <td><?php echo$res['delivery_date'];?></td>
    <td><?php echo$res[2];?> , <?php echo$res[3];?> , <?php echo$res[4];?> , Pin: <?php echo$res[5];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><B>PRODUCT</B></td>
    <td colspan="2"><B>QUANTITY</B></td>
  </tr>
      <?php

	$sel1="SELECT product_name,quantity from product_details,order_details,`order` where product_details.product_id=order_details.product_id and order_details.order_id='$order' group by product_name";
	$r1=mysql_query($sel1,$con);
    while($res1=mysql_fetch_array($r1))
	{
		?>
  <tr>
    <td></td>
    <td><?php echo $res1[0];?></td>
    <td colspan="2"><?php echo $res1[1];?></td>
  </tr>
  <?php }?>
   <tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr><tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr>
  <?php }?>
</table>
</center>
</form>
</body>
</html>