<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/codlocation.php">
  <table width="419" height="150" border="0">
    
    <tr>
      <td height="34" colspan="2"><h2>LOCATION DETAILS</h2></td>
    </tr>
    <tr>
      <td width="140" height="34"><font color="#996633">LOCATION NAME</font></td>
      <td width="269"><span id="sprytextfield2">
      <label for="text2"></label>
      <input type="text" name="txtloc" id="text2" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="36"><font color="#996633">SERVICE CHARGE</font></td>
      <td><span id="sprytextfield3">
      <label for="text3"></label>
      <input type="text" name="txtsers" id="text3" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td height="36" colspan="2"><div align="center">
        <input name="Submit" type="submit" id="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  
</form>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {validateOn:["change"], useCharacterMasking:true});
</script>
</body>
</html>