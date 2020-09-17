<?php
//session_start();
require("../doconnect/code.php");
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$ins="SELECT * FROM LOGIN WHERE usernname='$user' and password='$pass'";
mysql_query($ins,$con);

?>
REGISTRATION CODE

<?php
require("../doconnect/code.php");
$name=$_POST['txtcustomername'];
$user=$_POST['txtuser'];
$ins = "INSERT INTO `CUSTOMER` ('customername','street','city','username', 'password') values ('$name','$street','$city','$user','$pass')" ;
mysql_query($ins,$con);
$insert = "INSERT INTO `LOGIN` ('usernamel','password','role') values ('$user','$pass','User')" ;
mysql_query($ins,$con);
?>
<meta http-eqiv="refresh" content="0;URL=../index.php?id=registration" /> 