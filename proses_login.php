<?php
session_start();
include("config.php");
error_reporting(0);
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sqll=mysql_query("SELECT * FROM login WHERE username='$username' and password='$password'");
$level=mysql_num_rows($sqll);
$r=mysql_fetch_array($sqll);
if($level > 0){
$_SESSION[username] = $r[username];
$_SESSION[password] = $r[password];
}

if($_POST['username'] != $_SESSION[username] and $_POST['password'] != $_SESSION[password] ){
	echo"<script language='javascript'>alert('Username / password salah, mohon diisi kembali dengan data yang benar')</script>";
	echo"<script language='javascript'>window.location = 'login.php'</script>";	
	}


elseif (empty($_POST[username]) AND empty($_POST[password])){
	
	echo"<script language='javascript'>alert('Mohon isi dulu username dan password !')</script>";
	echo"<script language='javascript'>window.location = 'login.php'</script>";
	}
elseif (empty($_SESSION[username]) and ($_POST[password])==TRUE){
	echo"<script language='javascript'>alert('Mohon isi dulu username anda!')</script>";
	echo"<script language='javascript'>window.location = 'login.php'</script>";		
	}
elseif (($_POST[username])==TRUE AND empty($_SESSION[password])){
	echo"<script language='javascript'>alert('Mohon isi dulu password anda!')</script>";
	echo"<script language='javascript'>window.location = 'login.php'</script>";		
	}
	
else{
				$sql1=mysql_query("SELECT * FROM login WHERE username='$username' and password='$password'");
				$login1=mysql_num_rows($sql1);
				$row=mysql_fetch_array($sql1);
				
				
				if($login1 > 0){
					$_SESSION[username] =$row[username];
					$_SESSION[type] ="admin";
					$user=$row['username'];
					$sebagai="admin";
					 if($sebagai=='admin'){
					 echo"<script language='javascript'>alert('Selamat datang : $user Anda Login sebagai $sebagai')</script>";
					 echo"<script language='javascript'>window.location = 'admin/index.php'</script>";
					}
				}
				
	
		
	else{
		 echo"<script language='javascript'>alert('username dan password tidak sesuai')</script>";
		 echo"<script language='javascript'>window.location = 'login.php'</script>";	
		 }	
		}
}

?>
