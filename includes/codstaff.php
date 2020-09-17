<?php
require("doconnect/code.php");
$sta=$_POST["txtstaff"];
$ins="INSERT INTO staff (`staff_name`) VALUES ('$sta')";
mysql_query($ins,$con);
echo $ins;
?>