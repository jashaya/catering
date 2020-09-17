<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/codfeedback.php">
  <table width="391" border="0">
    <tr>
      <td colspan="2"><h2>FEEDBACK FORM</h2></td>
    </tr>
    <tr>
      <td width="65"><font color="#996633">Name</font></td>
      <td width="316"><?php echo $_SESSION['uname'];?></td>
    </tr>
  
    <tr>
      <td><font color="#996633">Comments</font></td>
      <td><label for="txtcomment"></label>
      <textarea name="txtcomment" id="txtcomment" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" id="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  
</form>
</body>
</html>