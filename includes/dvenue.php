<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/codvenue.php">
  <table width="488" height="238" border="0">
    <tr>
      <td colspan="2"><h2>VENUE FORM</h2></td>
    </tr>
    <tr>
      <td width="94"><font color="#996633">Delivery date</font></td>
      <td width="384"><span id="sprytextfield1">
      <label for="txtddelivery"></label>
      <input type="text" name="txtddelivery" id="txtddelivery" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">Venue name</font></td>
      <td><span id="sprytextfield2">
      <label for="txtvenue"></label>
      <input type="text" name="txtvenue" id="txtvenue" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">Street</font></td>
      <td><span id="spryselect1">
        <select name="cmbstreet" size="1" id="cmbstreet">
          <option selected="selected" value="-1">-SELECT-</option>
          <?php
		 
		 require("doconnect/code.php");
		 $sel="SELECT location_id,location_name from location";
		 $r=mysql_query($sel,$con);
		 while($res=mysql_fetch_array($r))
		 {
			 ?>
          <option value="<?php echo $res[0];?>" ><?php echo $res[1];?></option>
          <?php
		 }
		 ?>
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">City</font></td>
      <td><span id="sprytextfield5">
      <label for="txtcity"></label>
      <input type="text" name="txtcity" id="txtcity" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">Pincode</font></td>
      <td><span id="sprytextfield6">
      <label for="txtpin"></label>
      <input type="text" name="txtpin" id="txtpin" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">Phone no</font></td>
      <td><span id="sprytextfield4">
      <input type="text" name="txtphone" id="txtphone" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <span id="txtpin">
        <label for="txtphone"></label>
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        <input type="submit" name="Submit" id="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {useCharacterMasking:true, validateOn:["change"], minChars:10, maxChars:15});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "date", {format:"yyyy-mm-dd", useCharacterMasking:true});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {minChars:3, maxChars:15});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "integer", {minChars:6, validateOn:["change"], useCharacterMasking:true});
var sprytextfield7 = new Spry.Widget.ValidationTextField("txtpin", "integer", {maxChars:6, minChars:6});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
</script>
</body>
</html>