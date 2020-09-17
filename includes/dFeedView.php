<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<center><H3><font color="#996633">FEEDBACK LIST</font></H3>
<table width="276" border="0">
  
    <TR></TR>
      <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  <TR></TR>  
  <tr>
    <td width="83"><font color="#996633">SENDER</font></td>
    <TD></TD> <TD></TD> <TD></TD>
    <TD></TD> <TD></TD> <TD></TD>
    <td width="74"><font color="#996633">DATE</font></td>
    <TD></TD> <TD></TD> <TD></TD> <TD></TD>
     <TD></TD> <TD></TD> <TD></TD> <TD></TD>
    <td width="105"><font color="#996633">COMMENT</font></td>
  </tr>
<?php require("doconnect/code.php");
$sel="SELECT * FROM `feedback`";
$res=mysql_query($sel,$con);
while($r=mysql_fetch_array($res))
{?>
  <tr>
    <td><?PHP ECHO $r[0];?></td>
    <TD></TD> <TD></TD> <TD></TD>
    <TD></TD> <TD></TD> <TD></TD>
    <td><?PHP ECHO $r[2];?></td>
     <TD></TD> <TD></TD> <TD></TD> <TD></TD>
      <TD></TD> <TD></TD> <TD></TD> <TD></TD>
    <td><?PHP ECHO $r[1];?></td>
  </tr>
  <?PHP }?>
</table>
</center>
</form>
</body>
</html>