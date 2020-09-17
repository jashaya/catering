<?php
require("doconnect/code.php");
$name=$_POST["txtnname"];
$hname=$_POST["txthname"];
$sree=$_POST["txtsree"];
$city=$_POST["txtcity"];
$pin=$_POST["txtpi"];
$phno=$_POST["txtphno"];
$user=$_POST["txtuser"];
$password=$_POST["txtpass"];
$role=$_POST["txtrole"];
$ins="INSERT INTO login (`usernname`, `password`, `role`) VALUES ('$user', '$password', '$role')";
mysql_query($ins,$con);
echo $ins;
?>