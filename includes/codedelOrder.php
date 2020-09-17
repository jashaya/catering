<?php 
 require("../doconnect/code.php");
 session_start();
 $pid=$_GET['vid'];
 if(isset($_SESSION['orderid']))
 $orid=$_SESSION['orderid'];
 $del="delete from order_cart where product_id='$pid' and order_id=$orid";
 mysql_query($del,$con);
 ?>
 DELETED SUCCESSFULLY
 <meta http-equiv="refresh" content="2;URL=../index.php?id=orderEdit" /> 