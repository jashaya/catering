<?php
//session_start();
require("../doconnect/code.php");
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$ins="SELECT * FROM LOGIN WHERE usernname='$user' and password='$pass'";
mysql_query($ins,$con);

?>