<?php
require("../doconnect/code.php");?>
<body>
<form id="form2" name="form2">
<?php
{
$sel="SELECT `product_id`,`Product_name`,`price`,`image`,`specification`,`tax` FROM `product_details`";
$res=mysql_query($sel);
$num=mysql_num_rows($res);
//echo $num."</br>";
$i=1;
while($r= mysql_fetch_array($res))
{
echo "number"." " .$num."</br>";
 $num--;
echo "value of i".$i."</br>";
echo $r[0]."</br>"; //id
echo $r[1]." ";//name
echo $r[2]." ";//image
echo $r[3]." ";//price
echo $r[4]."</br>";//speci
//echo $r[5]."</br> ";//qty
?>
 <input type="hidden" name="tnum" id="tnum" value="<?php echo $num; ?>"/>
<input type="text"  name="txt<?php echo $i;?>" id="txt<?php echo $i;?>" value="txt<?php echo $i;?>"/>

<?php
{  
$i++; 
  }}}?>  
</body>
</form>
