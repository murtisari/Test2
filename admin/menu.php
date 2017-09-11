<!DOCTYPE html>
<?php include "../config.php";
session_start();
$username=$_SESSION['username'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Login</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">ALL Users<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php">List Users</a>
								</li>
								
								
							</ul>
						</li>
					</ul>
					<form action="" method="post" class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" name="key" type="text">
						</div> 
						<button type="submit" name="search" class="btn btn-default">
							Submit
						</button>
						<?php
						if(isset($_POST['search'])){
						echo "<script> document.location.href='index.php?action=search&key=".$_POST['key']."';</script>";
						//echo "<script>alert('Cari Data.".$_POST['key']."'); document.location.href='index.php?action=search&key=".$_POST['key']."';</script>";
						}
						?>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Selamat Datang <?=$username?></a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logout<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="logout.php">Logout</a>
								</li>
								
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>