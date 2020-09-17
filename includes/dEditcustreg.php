<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color:#000
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="form1" name="form1" method="post" action="includes/codEditCustReg.php">

  <table width="457" border="0">
    <tr>
      <td height="42" colspan="2"><h1>CUSTOMER REGISTRATION</h1></td>
    </tr>
    <tr>
      <td width="227" height="42"><font color="#996633">NAME</font></td>
      <td width="220"><span id="sprytextfield1">
        <label for="txtname"></label>
        <input type="text" name="txtname" id="txtname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="49"><font color="#996633">HOUSE NAME</font></td>
      <td><span id="sprytextfield2">
        <label for="text10"></label>
        <input type="text" name="txthname" id="text10" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="39"><font color="#996633">STREET</font></td>
      <td><span id="sprytextfield4">
        <label for="text4"></label>
        <input type="text" name="txtsree" id="text4" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="34"><font color="#996633">CITY</font></td>
      <td><span id="sprytextfield5">
        <label for="text5"></label>
        <input type="text" name="txtcity" id="text5" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="36"><font color="#996633">PINCODE</font></td>
      <td><span id="sprytextfield6">
      <label for="text6"></label>
      <input type="text" name="txtpi" id="text6" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
    </tr>
    <tr>
      <td height="33"><font color="#996633">PHONE_NO</font></td>
      <td><span id="sprytextfield7">
      <label for="text7"></label>
      <input type="text" name="txtphno" id="text7" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
    </tr>
    <tr>
      <td height="38"><font color="#996633">EMAIL</font></td>
      <td><span id="sprytextfield3">
      <label for="text3"></label>
      <input type="text" name="txtem" id="text3" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td height="41" colspan="2"><div align="center">
        <input type="submit" name="Edit" id="Edit" value="Edit Profile" />
      </div></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "integer", {validateOn:["change"], minChars:6, useCharacterMasking:true});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "integer", {minChars:10, useCharacterMasking:true, validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {useCharacterMasking:true, validateOn:["change"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>