<?php
require("doconnect/code.php");
$catsel=$_POST['cmbCat'];
/*if($catsel==0)
{
$cat=$_POST['txtcat'];
}
else
{
$cat=$_POST['cmbCat'];
}*/
$name=$_POST['txtname'];
$pass=$_POST['txtprice'];

/*$tmpname=$_FILES["timage"]["tmp_name"];
$name=$_FILES["timage"]["name"];
$path="../image/".$name;
$pathnw="image/".$name;*/


//$pathset=$_FILES["txtimage"]["name"];//path to enter in the table
$name1=rand(1,9999). $_FILES["txtimage"]["name"];
move_uploaded_file($_FILES["txtimage"]["tmp_name"],"food_photo/" .$name1);

	  
$spec=$_POST['txtspec'];
$tax=$_POST['cmbTax'];

/*$ins="INSERT INTO product_category(`food_category`) VALUES ( '$cat')";

mysql_query($ins,$con);
echo $ins;*/
$insert="INSERT INTO product_details( `Product_name`,category_id, `price`, `image`, `specification`, `tax`) VALUES ('$name','$catsel', '$pass', '$name1', '$spec', '$tax')";
mysql_query($insert,$con);

?>
<meta http-equiv="refresh" content="0;URL=index.php?id=foodadd" />

