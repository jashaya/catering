<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post"><center>
<B><FONT size="+2""><U>FOOD LIST</U></FONT></B><BR></BR><BR></BR>
<table width="314" border="1">
  <tr>
    <td width="92"><b>Pdt Code</b></td>
    <td width="125"><b>Product</b></td>
    <td width="34"><b>Price</b></td>
    <td width="35"><b>Tax</b></td>
    </tr>
    <?php require("../doconnect/code.php");
$sel="SELECT  `product_id`,`Product_name`,`price`,tax FROM `product_details`";
$res=mysql_query($sel,$con);
while($r=mysql_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $r[0];?></td>
    <td><?php echo $r[1];?></td>
    <td><?php echo $r[2];?></td>
    <td><?php echo $r[3];?></td>
    </tr>
    <?php }?>
</table>
</center>
</form>
</body>
</html>