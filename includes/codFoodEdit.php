<?php 
session_start();
require("../doconnect/code.php");


$name=$_POST['cmbName'];
$pass=$_POST['txtprice'];

/*$tmpname=$_FILES["timage"]["tmp_name"];
$name=$_FILES["timage"]["name"];
$path="../image/".$name;
$pathnw="image/".$name;*/


//$pathset=$_FILES["txtimage"]["name"];//path to enter in the table
$name1=rand(1,9999). $_FILES["txtimage"]["name"];
move_uploaded_file($_FILES["txtimage"]["tmp_name"],
      "../food_photo/" .$name1);

	  
$spec=$_POST['txtspec'];
$tax=$_POST['cmbTax'];

/*$ins="INSERT INTO product_category(`food_category`) VALUES ( '$cat')";

mysql_query($ins,$con);
echo $ins;*/
$insert="update product_details set `price`='$pass', `image`='$name1', `specification`='$spec', `tax`='$tax' where `product_id`=$name";
mysql_query($insert,$con);

?>

<meta http-equiv="refresh" content="0;URL=../index.php?id=foodEdit" />