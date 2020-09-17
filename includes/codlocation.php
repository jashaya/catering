<?php
require("../doconnect/code.php");
$loc=$_POST["txtloc"];
$service=$_POST["txtsers"];
$ins="INSERT INTO location(`location_name`, `service_charge`) VALUES ('$loc','$service')";
mysql_query($ins,$con);

?><meta http-equiv="refresh" content="0;URL=../index.php?id=location" />