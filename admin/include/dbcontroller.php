<?php
$DB_host = "projectdb1.cbqwym87o1nl.ap-south-1.rds.amazonaws.com";
$DB_user = "projectdb1";
$DB_pass = "projectdb1";
$DB_name = "projectdb1";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>