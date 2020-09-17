<?php 
	{
		session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function edit(v)
{
	var v;
document.form1.action="../index.php?id=orderEdit";
document.form1.submit();	
}
function payBill()
{
alert("Processed With Payment");
document.form1.action="transferdata.php";	
document.form1.submit();

}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<center>
<tr><td colspan="1" height="100"><center><?php echo $_SESSION['uname'];?></center></td></tr>

<table width="497" border="0">
    <tr>
      <td colspan="2"><center><B>HOTEL ZAM ZAM</B></center></td>
      <td>&nbsp;</td>
      
      <td><a href="BillReport.php">Print</a></td>
      </tr>
    <tr>
      <td width="117"><a href="../index.php?id=orderfood">Back..</a></td>
      <td width="270"><center>TRIVANDRUM</center></td>
      <td width="47">&nbsp;</td>
      <td width="45"><a href="../index.php?id=logout">Logout</A></td>
      </tr>
 </table>

 <?php require("../doconnect/code.php");
$billno=$_SESSION['orderid'];
$sel="SELECT `product_details`.`tax`,`product_details`.`price`,`customer`.cust_id,`order`.`order_id`,`product_details`.`product_id`,`quantity`,`cust_name`,`Product_name` FROM `order_cart`,`order`,`customer`,`product_details` where `product_details`.`product_id`=`order_cart`.`product_id` and `order`.`order_id`=$billno group by `product_details`.`product_id`";
if($re=mysql_query($sel,$con))
{
$num=mysql_num_rows($re);
 ?>
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
    <td width="59"><b>BILL NO:</b></td>
    <td width="61"><?php echo $billno;?></td>
    <td width="161"><b>CUSTOMER NAME:</b></td>
    <td width="164"><?php $uname=$_SESSION['uname']; echo "jasna".$uname;?></td>
  </tr>
</table>

<p>&nbsp;</p>
  <table width="497" border="1">
    <tr>
      <td width="51"><b>Sl No.</b></td>
      <td width="163"><b>Product Name</b></td>
      <td width="58"><b>Quantity</b></td>
      <td width="34"><b>Price</b></td>
      <td width="85"><b>Tax</b></td>
      <td width="66"><b>Amt</b></td>
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
	$str=$_SESSION['street'];
	$selSur="select service_charge from location where location_id=$str";
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
      <td><b>Grand Totol</b></td>
      <td><?php echo $tot+$surChrg;?></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">
        <input type="submit" name="btnPay" id="btnPay" value="Pay" onclick="payBill();"/>
        <input type="submit" name="btnEdit" id="btnEdit" value="Edit" onclick="edit(<?php echo $billno;?>);"/>
      </div></td>
      </tr><?php } }?>
  </table>
  </center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>