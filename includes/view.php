<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <?php $vid=$_GET['vid'];?>
  <table width="442" border="0">
    <tr>
      <td><b>DETAILS OF ORDER:</b></td>
      <td><?php echo $vid;?></td>
      <td>&nbsp;</td>
    </tr>
    <?php
	require("doconnect/code.php");
	$sel="SELECT name,`street`,`city`,`pincode` from `order` where order_id=".$vid;
	$r=mysql_query($sel,$con);
    if($res=mysql_fetch_array($r))
	{
	?>
    <tr>
      <td><b>Address:</b></td>
      <td><?php echo $res[0];?> , <?php echo $res[1];?> , <?php echo $res[2];?> , Pin:<?php echo $res[3];?></td>
      <td>&nbsp;</td>
    </tr>
    <?php }?>
    <tr>
      <td>&nbsp;</td>
      <td width="2">&nbsp;</td>
     
    </tr>
    <tr>
      <td width="161"><b>Product name</b></td>
      <td width="265"><b>Quantity</b></td>
    </tr>
    <?php
	$sel1="SELECT product_name,quantity,product_details.product_id,`order`.`name`,`street`,`city`,`pincode` from product_details,order_details,`order` where product_details.product_id=order_details.product_id and order_details.order_id='$vid' group by product_name";
	$r1=mysql_query($sel1,$con);
    while($res1=mysql_fetch_array($r1))
	{
		?>
    <tr>
      <td height="27"><?php echo $res1['product_name'];?></td>
      <td><?php echo $res1['quantity'];?></td>
        </tr>
      <?php
	}
	?>
  </table>
  
 
</form>
</body>
</html>