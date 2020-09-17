<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <?php $bill=$_POST['tBillno'];
 ?>
 <center>
   <?php require("doconnect/code.php");

$sel="SELECT `product_details`.`tax`,`product_details`.`price`,`customer`.cust_id,`order`.`order_id`,`product_details`.`product_id`,`quantity`,`cust_name`,`Product_name`,`order`.`street` FROM `order_details`,`order`,`customer`,`product_details` where `product_details`.`product_id`=`order_details`.`product_id` and `order`.`order_id`=$bill  AND `order`.`order_id`=`order_details`.`order_id` group by `product_details`.`product_id`";
$re=mysql_query($sel,$con);
$num=mysql_num_rows($re);
 ?>
 <b><U>BILL INFROMATION</U></b>
<table width="463" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="70"><b>BILL NO:</b></td>
    <td width="85"><?php echo $bill;?></td>
    <td width="161"><b>CUSTOMER NAME:</b></td>
    <td width="129"><?php echo $_SESSION['uname'];?></td>
  </tr>
</table>

<p>&nbsp;</p>
  <table width="497" border="1">
    <tr>
      <td width="42"><b>Sl No.</b></td>
      <td width="179"><b>Product Name</b></td>
      <td width="59"><b>Quantity</b></td>
      <td width="34"><b>Price</b></td>
      <td width="94"><b>Tax</b></td>
      <td width="63"><b>Amt</b></td>
    </tr>
    <?php 
	$i=0;
	$amt=0;
	$tot=0;
	 while($r=mysql_fetch_array($re))
	 {
	?>
    <tr>
     
      <td><?php echo $i=$i+1;?></td>
      <td><?php echo $r[7];?></td>
      <td><?php echo $r[5];?></td>
      <td><?php echo $r[1];?></td>
      <td><?php echo $r[0];?></td>
      <?php 
	  $tax=$r[1]*$r[0]/100;
	  $rate=$r[1]+$tax;
	  $amt=$r[5]*$rate;?>
      <td><?php echo $amt;?></td>
      <?php $tot+=$amt;?> 
    </tr>
  
    <?php }?>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td><b>Total</b></td>
      <td><?php echo $tot;?></td>
    </tr>
    <?php 
	$surChrg=0;
	$selSur="select service_charge from location where `location_name`='$r[7]'";
	$resSur=mysql_query($selSur,$con);
	if($rSur=mysql_fetch_array($resSur))
	{
	$surChrg=$rSur[0];	
	}
	?>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td><b>Ser.Chrg</b></td>
      <td><?php echo $surChrg;?></td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td><b>Grand Total</b></td>
      <td><?php echo $tot+$surChrg;?></td>
    </tr>
  </table>
</center>

</form>
</body>
</html>