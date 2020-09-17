<?php
session_start();
require("../doconnect/code.php");
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];

$ins="SELECT * FROM LOGIN WHERE usernname='$user' and password='$pass'"; 
//SELECT cust_name,cust_id,usernname,password,role FROM LOGIN,customer WHERE LOGIN.usernname='$user' and password='$pass' and LOGIN.usernname=customer.username
$res=mysql_query($ins,$con);
$r=mysql_fetch_array($res);
$num=mysql_num_rows($res);
//array indexes are (0,1,2)  
// array('uname','pw','role')
// if number of rows > 0 then go to the specified role in session variable.
if($num>0)
{
	
	$_SESSION['role']=$r[2];
	$_SESSION['uname']=$r[0];
}//whatever the role specified in session redirected to there.
?>
<meta http-equiv="refresh" content="0;URL=../" /> 

