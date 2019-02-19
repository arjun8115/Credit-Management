<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='1234';
$link=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'employer');
if(!$link)
{
	echo "connection error";
}