<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">  
<?php require("doconnect/code.php");
$sel="SELECT  `product_id`,`Product_name`,`price`,`image`,food_category FROM `product_details`,category where category.category_id=product_details.category_id";
$res=mysql_query($sel,$con);
while($r=mysql_fetch_array($res))
{
?>
<div id="tabl" style="float:left;border:thin;border-color:#FFC;overflow:hidden;">
<table width="280" border="0">

  <tr>
    <td width="89" rowspan="2"><img src="food_photo/<?php echo $r[3];?>" title="<?php echo $r[0] ?>" alt="<?php echo $r[0] ?>" width="50px" height="50px;" onclick="gotovenue();"/></td>
    <td width="104"><font color="#996633">Product Name:</font></td>
    <td width="73"><font color="#996633"><?php echo $r[1];?></font></td>
    </tr>
  <tr>
    <td><font color="#996633">Category:</font></td>
    <td><font color="#996633"><?php echo $r[4];?></font></td>
  </tr>
 <tr><td></td><td><font color="#996633">Price:</font></td>
 <td><font color="#996633"><?php echo $r[2];?></font></td></tr> <tr></tr>
   <tr></tr>
    <tr></tr> <tr></tr> <tr></tr>
    <tr></tr> <tr></tr> <tr></tr>
    <tr></tr> <tr></tr> <tr></tr>
    <tr></tr> <tr></tr> <tr></tr>
    <tr></tr> <tr></tr> <tr></tr>
    <tr></tr> <tr></tr>
</table>
</div>

<?php }?>
</form>

</body>
</html>