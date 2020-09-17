<?php
require("../doconnect/code.php");
$name=$_POST['txtname'];
$hname=$_POST['txthname'];
$sree=$_POST['txtsree'];
$city=$_POST['txtcity'];
$pin=$_POST['txtpi'];
$phno=$_POST['txtphno'];
$em=$_POST['txtem'];
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$ins="INSERT INTO `customer` (`cust_name`, `house_name`, `street`, `city`, `pincode`, `phone_no`, `email`, `username`) VALUES ( '$name', '$hname', '$sree', '$city', '$pin', '$phno', '$em', '$user')";
mysql_query($ins,$con);
$insert="INSERT INTO `login` (`usernname`, `password`,`role`) VALUES ('$user', '$pass','User')";
mysql_query($insert,$con);
?>
<meta http-equiv="refresh" content="0;URL=../index.php?id=registration" /> 