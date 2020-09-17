<?php
session_start();
require("../doconnect/code.php");
if(isset($_SESSION['uname']))
$uname=$_SESSION['uname'];
$name=$_POST['txtname'];
$hname=$_POST['txthname'];
$sree=$_POST['txtsree'];
$city=$_POST['txtcity'];
$pin=$_POST['txtpi'];
$phno=$_POST['txtphno'];
$em=$_POST['txtem'];

$ins="update `customer` set `cust_name`='$name', `house_name`='$hname', `street`='$sree', `city`='$city', `pincode`='$pin', `phone_no`='$phno', `email`='$em' where`username`='$uname'";
mysql_query($ins,$con);
?>PROFILE EDITTED SUCCESSFULLY
<meta http-equiv="refresh" content="2;URL=../index.php?id=EditProfile"/>