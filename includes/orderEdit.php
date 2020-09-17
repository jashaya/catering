<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">

function doDel(v1)
{
var	vd=v1;
document.form1.action="includes/codedelOrder.php?vid="+vd;
document.form1.submit();

}
function doEdit()
{
	var n=document.getElementById("tnum").value;
var i;
for(i=1;i<=n;i++)
{
var val=document.getElementById("txt"+i).value;
if(val>24 && val<=2000)
{
document.form1.action="includes/codorderEdit.php";
	document.form1.submit();
}
else
{
	alert("Quantity must be >= 25 and <= 2000");
	return;
}
}
}
</script>
</head>

<body>

<form id="form1" name="form1"action="" method="POST">
<table width="200" border="1" align="right">
  <tr><td><a href="includes/dbill.php">VIEW BILL</a></td>
    </tr>
</table>

<table>
  <tr>
      <td width="47"><font color="#996633">Sl No.</font></td>
      <td width="118"><font color="#996633">Product Name</font></td>
      <td width="162"><font color="#996633">Quantity</font></td>
     
    </tr>
    
    <?php 
	 require("doconnect/code.php");
	 $billno=$_SESSION['orderid'];

	 $sel="SELECT `order`.`order_id`,`product_details`.`product_id`,`quantity`,`Product_name` FROM `order_cart`,`order`,`product_details` where `product_details`.`product_id`=`order_cart`.`product_id` and `order`.`order_id`=$billno group by `product_details`.`product_id`";
	 $re=mysql_query($sel,$con);
$num=mysql_num_rows($re);
$_SESSION['numrowEdit']=$num;

$i=1;
	 while($r=mysql_fetch_array($re))
	 {
	?>
    <tr><input type="hidden" name="tnum" id="tnum" value="<?php echo $num; ?>"/>
     
      <td><font color="#996633"><?php echo $i;?></font></td>
      <td><font color="#996633"><?php echo $r[3];?><input name="prodid<?php echo $i;?>" type="hidden"  value="<?php echo $r[1];?>"/></font></td>
      <td>
      <input name="txt<?php echo $i;?>" type="text" value="<?php echo $r[2];?>" id="txt<?php echo $i;?>"/></td>
    <!--index.php?id=codorderEdit&vid="          includes/codedelOrder.php?vid=<?php echo $r[1];?>"-->   
         <td width="63"><input name="bEdit" type="button" id="bEdit" value="Update" onclick="doEdit();"/></td>
      <td width="76"><input name="bDel" type="button" id="bDel" value="Delete" onclick="doDel(<?php echo $r[1];?>);"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  <?php $i++;}?>

</table>
</form>
</body>
</html>