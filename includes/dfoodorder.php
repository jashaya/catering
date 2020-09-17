<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function getProd()
{	
document.form1.action="";
document.form1.submit();
}
function gotobill()
{
	
document.form1.action="includes/dbill.php";
document.form1.submit();
}
function addtocart()
{
var n=document.getElementById("tnum").value;
var i;
for(i=1;i<=n;i++)
{
var val=document.getElementById("txt"+i).value;
if(val>24 && val<=2000)
{
document.form1.action="includes/codeorder.php";
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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require("doconnect/code.php"); ?>
<form id="form1" name="form1" method="post" action="">
    <table width="690" border="0">
    <tr>
      <td height="42" colspan="2"><h2>FOOD ORDER FORM</h2></td>
    </tr>
    <tr>
      <td width="167" height="39">Food category</td>
      <td width="513"><h2><span id="spryselect1">
        <label for="cmbcat"></label>
        <select name="cmbcat" id="cmbcat" onchange="getProd();">
          <option value="-1">-SELECT-</option>
          <?php
$sel="SELECT category_id,food_category FROM category";
$r=mysql_query($sel,$con);     
while($res=mysql_fetch_array($r))
{
	?>
    <option value="<?php echo $res['category_id']?>"><?php echo $res['food_category']?>
    </option>
    <?php
}
?>
        </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></h2></td>
    </tr>
  </table>
  <table width="733" border="1">
    <tr>
      <td width="109" height="27">Food Name</td>
      <td width="65">Price</td>
      <td width="70">Image</td>
      <td width="157">Specification</td>
      <td width="145">Qty</td>
      </tr>
    <?php
	if(isset($_POST['cmbcat']))  //  to check what we select [ in food category in design] is set or not
{
$cat=$_POST['cmbcat'];
$sel="SELECT `product_id`,`Product_name`,`price`,`image`,`specification`,`tax` FROM `product_details` WHERE `category_id`='$cat'";
$res=mysql_query($sel,$con);
$num=mysql_num_rows($res); // getting no of rows in database
$_SESSION['numrow']=$num; 
$i=1;
   while($r=mysql_fetch_array($res))
  {
	?>
    <tr>
    <input type="hidden" name="tnum" id="tnum" value="<?php echo $num; ?>"/>   
    
      <td><font color="#996633"><?php echo $r[1];?></font>
        <label for="textfield"></label>
        <input type="hidden"  name="prodid<?php echo $i;?>" value="<?php echo $r[0];?>"/></td>
        
     <td><font color="#996633"><?php echo $r[2];?></font></td>
      
    <td><img src="food_photo/<?php echo $r[3];?>" title="<?php echo $r[3] ?>" alt="<?php echo $r[3] ?>" width="50px" height="50px"/></td>
    
      <td><font color="#996633"><?php echo $r[4];?></font></td>
      
      <td><label for="txtqty"></label>
      <span id="sprytextfield2">
       <input type="text"  name="txt<?php echo $i;?>" id="txt<?php echo $i;?>"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      
      <?php $i++;?>
      </tr>
    <?php } }?>
    <tr>
      <td colspan="6"><div align="center">
        <input name="add to cart" type="submit" id="add to cart" value="add to cart" onclick="addtocart();"/>
        <input type="submit" name="proceed to payment" id="proceed to payment" value="proceed to payment" onclick="gotobill();"/>
      </div></td>
    </tr>
  </table>

</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {minValue:25, maxValue:100});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>