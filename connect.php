<?php

$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b762cd3ceb9691";
$password = "c5959554";
$database_name = "dbien";

$conn = mysql_connect($hostname, $username, $password)
		or die ("Error menghubungkan ke host database")
$db = mysql_select_db($database_name)
	or die ("Error menghubungkan ke database");
?>