<?php
error_reporting(0);
session_start();
$_SESSION['username'];
session_destroy();
	echo "<script>alert('Anda Berhasil Logout')</script>";
echo "<meta http-equiv='refresh' content ='0; url=../index.php'>";
?>