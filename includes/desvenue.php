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
<form id="form1" name="form1" method="post" action="">
  <table width="192" border="0">
    <tr>
      <td width="95"><font color="#996633">Delivery date</font></td>
      <td width="87"><span id="sprytextfield1">
        <label for="text1"></label>
        <input type="text" name="text1" id="text1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><font color="#996633">Venue name</font></td>
      <td><span id="sprytextfield2">
        <label for="txtvenue"></label>
        <input type="text" name="txtvenue" id="txtvenue" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span id="spryselect1">
        <select name="cmbstreet" id="cmbstreet">
          <option value="-1">-SELECT-</option>
          <?php
		 require("doconnect/code.php");
		 $sel="SELECT location_id,location_name from location";
		 $r=mysql_query($sel,$con);
		 while($res=mysql_fetch_array($r))
		 {
			 ?>
          <option value="<?php echo $res[0]?>"><?php echo $res[1]?></option>
          <?php
		 }
		 ?>
        </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span id="sprytextfield3">
        <label for="txtcity"></label>
        <input type="text" name="txtcity" id="txtcity" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span id="sprytextfield4">
        <label for="txtpin"></label>
        <input type="text" name="txtpin" id="txtpin" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span id="sprytextfield5">
        <label for="txtphone"></label>
        <input type="text" name="txtphone" id="txtphone" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
</body>
</html>