<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
 <?php
require("doconnect/code.php"); 
$sel="SELECT * FROM category";
$r=mysql_query($sel,$con);
?>
<form id="form1" method="post" action="includes/codFoodEdit.php"  enctype="multipart/form-data"> 


 <table width="497" border="0">
 <tr>
      <td height="36" colspan="2"><h2 align="left">FOOD EDIT FORM</h2></td>
   </tr>
      <td width="106" height="36"><font color="#996633">
 Product name</font></td>
      <?PHP 
	  $sell="SELECT`category_id`,`product_id`,`Product_name` FROM `product_details`";
$rl=mysql_query($sell,$con);
	 ?>
      <td width="381">
        <select name="cmbName" id="cmbName">
        <option value="-1" selected="selected">-SELECT-</option>
       <?php       
while($resl=mysql_fetch_array($rl))
{
	?>
    <option value="<?php echo $resl[1];?>"><?php echo $resl[2];?>
    </option>
    <?php
}
?>
      </select></td>
    
    <tr>
 <!-- <td width="163" height="34">Product category</td>
      <td width="324"><span id="spryselect1">
 
        <select name="cmbCat" id="cmbCat">
          <option value="-1" selected="selected">-SELECT-</option>
<?php       
while($res=mysql_fetch_array($r))
{
	?>
    <option value="<?php echo $res['category_id']?>"><?php echo $res['food_category']?>
    </option>
    <?php
}
?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span>
        <label for="newcategory"></label>
      <input type="hidden" name="txtcat" id="newcategory" /></td>-->
    </tr>
    <tr>
      
    </tr>
    <tr>
      <td height="37"><font color="#996633">Price</font></td>
      <td><span id="sprytextfield3">
        <label for="text3"></label>
        <input type="text" name="txtprice" id="text3" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="37"><font color="#996633">Image</font></td>
      <td><span id="sprytextfield1">
        <label for="txtimage"></label>
        <input type="file" name="txtimage" id="txtimage" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="42"><font color="#996633">Specification</font></td>
      <td><span id="sprytextarea1">
        <label for="textarea1"></label>
        <textarea name="txtspec" id="textarea1" cols="45" rows="5"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="37"><font color="#996633">Tax</font></td>
      <td><select name="cmbTax" id="cmbTax">
        <option value="-1">---SELECt--</option>
        <option value="4">4</option>
        <option value="12.5">12.5</option>
      </select></td>
    </tr>
    <tr>
      <td height="39" colspan="2"><div align="center"></div>
        <div align="center">
          <input type="submit" name="Ok" id="Ok" value="EDIT" />
        </div></td>
    </tr>
</table>
</form>
<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>