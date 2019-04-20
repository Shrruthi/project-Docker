<?php
$mysql_hostname = "projectdb1.cbqwym87o1nl.ap-south-1.rds.amazonaws.com";
$mysql_user = "projectdb1";
$mysql_password = "projectdb1";
$mysql_database = "projectdb1";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd , $mysql_database) or die("Could not select database");

?>