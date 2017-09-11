<!DOCTYPE html>
<?php
include "menu.php";
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
	if ($_SESSION['type'] == "admin"){
$action=$_GET['action'];
$key=$_GET['key'];
?>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List Users</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body >

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-stacked nav-pills">
						<li class="active">
							<a href="#">Posts</a>
						</li>
						<li class="disabled">
							<a href="#">Users</a>
						</li>
						<li >
							<a href="#">Settings</a>
						</li>
						
					</ul>
				</div>
				
				<div class="col-md-6">
					ALL USERS
				</div>
				<div class="col-md-3">
					 
					
				</div>
			</div>
			<?php
			$data = file_get_contents("http://jsonplaceholder.typicode.com/users"); // put the contents of the file into a variable
			$characters = json_decode($data); // decode the JSON feed
			foreach ($characters as $item) {
			if($action=='search' && isset($key)){
			if($item->username==$key){
			?>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				<a href='detailuser.php?id=".$item->id."'><img  src="../no-image.png"><br></a>
				</div>
				<div class="col-md-3">
				
					
					<?php
					
					echo $item->name."<br>";
					echo "<font color='blue'><a href='detailuser.php?id=".$item->id."'>".$item->username."</a></font><br>";
					echo "<font color='blue'>".$item->email."</font><br>";
					echo $item->phone."<br>";
				
					?>
				</div>
				<div class="col-md-1">
				<img  src="../peta.png" width="20" height="20"><br>
				</div>
				<div class="col-md-2">
				 	 <?php
					 
					 echo $item->address->street."<br>";
					echo $item->address->suite."<br>";
					echo $item->address->city."<br>";
					echo $item->address->zipcode."<br>";

					?>
					
				</div>
			</div>
			<?php
			}
			}
			else if($action!='search' && empty($key)){
			
			?>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				<a href='detailuser.php?id=1'><img  src="../no-image.png"><br></a>
				</div>
				<div class="col-md-3">
				
					
					<?php
				
					
					echo $item->name."<br>";
					echo "<font color='blue'><a href='detailuser.php?id=".$item->id."'>".$item->username."</a></font><br>";
					echo "<font color='blue'>".$item->email."</font><br>";
					echo $item->phone."<br>";
					
					?>
				</div>
				<div class="col-md-1">
				<img  src="../peta.png" width="20" height="20"><br>
				</div>
				<div class="col-md-2">
				 	 <?php
					
					echo $item->address->street."<br>";
					echo $item->address->suite."<br>";
					echo $item->address->city."<br>";
					echo $item->address->zipcode."<br>";
					
					?>
					
				</div>
			</div>
			<?php
			}
			}
			?>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php
	}else{
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
	}
}
	else{
		echo "<script>alert('Maaf Anda Belum Login.'); document.location.href='../index.php';</script>";
}
?>
