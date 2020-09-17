<?php
session_start();
require("../doconnect/code.php");
$name=$_SESSION['uname'];
$comment=$_POST['txtcomment'];
$date=date("y/m/d");
$ins="INSERT INTO `feedback` (`name`, `comments`, `date`) VALUES ('$name','$comment', '$date')";
mysql_query($ins,$con);

?><meta http-equiv="refresh" content="0;URL=../index.php?id=Feedback"/ />