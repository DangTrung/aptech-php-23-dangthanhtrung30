<?php
$d = date_create();
$t = mktime(3, 30 , 30, 12, 9, 1996);
date_timestamp_set($d, $t);
 
echo date_format($d, "d/m/y h:i:s");
?>