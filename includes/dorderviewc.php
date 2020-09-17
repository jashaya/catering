<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action=""><center><table border="1" align="right"><tr><td> <a href="includes/OrderReport.php" style="text-align:right;"><B>ORDER REPORT</B></a></td></tr></table>
  <table width="494" border="0">
    <tr>
      <td colspan="3"><center><b>ORDER VIEW FORM</b></center></td>
      <td>&nbsp;</td>
    </tr>
    <TR></TR> <TR></TR> <TR></TR> <TR></TR> <TR></TR> <TR></TR> <TR></TR> <TR></TR>
    <tr>
      <td width="139"><b><u>Name</u></b></td>
      <td width="123"><b><u>Order date</u></b></td>
      <td width="147"><b><u>Delivery date</u></b></td>
      <td width="67">&nbsp;</td>
    </tr>
    <?php
	require("doconnect/code.php");
	$sel="SELECT cust_name,order_id,`order_date`,`delivery_date` FROM `customer`,`order` WHERE customer.cust_id=order.cust_id";
	$r=mysql_query($sel,$con);
	while($res=mysql_fetch_array($r))
	{
		?>
     
		
    <tr>
    
      <td height="27"><?php echo $res['cust_name'];?></td>
      <td><?php echo $res['order_date'];?></td>
      <td><?php echo $res['delivery_date'];?></td>
      <td><a href="index.php?id=vieworderdetails&vid=<?php echo $res['order_id'];?>">view more</a></td>   </tr>
      <?php
	}
	?>
  </table>
  </center>
 
</form>
</body>
</html>