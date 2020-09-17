<?php 

require("doconnect/code.php");
$del="delete  from order_cart";
mysql_query($del,$con);
/*$delorder="delete  from order";
mysql_query($delorder,$con);*/
session_start();
session_destroy();

?><meta http-equiv="refresh" content="0;URL=./" >