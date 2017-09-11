<?php
	error_reporting(0);
	$username	= "root";
	$password	= "";
	$database	= "manajemendata";
	$hostname	= "localhost";
	mysql_connect($hostname,$username,$password);
	mysql_select_db($database) or die( "Unable to select database");
?>