<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color:#000;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/codlog.php">
  <p align="center">&nbsp;</p>
  <table width="439" border="0">
    <tr>
      <td colspan="2"><h1 align="left">LOGIN</h1></td>
    </tr>
    <tr>
     <td width="150" height="32"><font color="#996633"> USERNAME</font></td>
      <td width="196"><span id="sprytextfield1">
        <label for="text1"></label>
        <input type="text" name="txtuser" id="text1" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="32"><font color="#996633">PASSWORD</font></td>
      <td><span id="sprypassword1">
        <label for="password1"></label>
        <input type="password" name="txtpass" id="password1" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="32" colspan="2"><div align="center">
        <input type="submit" name="Login" id="Login" value="Login" />
      </div></td>
    </tr>
  </table>
 
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>