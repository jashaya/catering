<?php
require("../doconnect/code.php");
$catid=$_POST["txtCatId"];
$sta=$_POST["txtCat"];
$ins="INSERT INTO `category` VALUES ('$catid','$sta')";
mysql_query($ins,$con);
?>
<meta http-equiv="refresh" content="0;URL=../index.php?id=foodadd" />