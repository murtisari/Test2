<!DOCTYPE html>
<?php
include "menu.php";
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
	if ($_SESSION['type'] == "admin"){


			$id=$_GET['id']-1;
			$data = file_get_contents("http://jsonplaceholder.typicode.com/users"); // put the contents of the file into a variable
			$characters = json_decode($data); // decode the JSON feed
			//foreach ($characters as $item) {
			$var1=$characters[$id]->address->geo->lat;
			$var2=$characters[$id]->address->geo->lng;
			$title1=$characters[$id]->address->city;
			?>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
   <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    var myMap;
    var myLatlng = new google.maps.LatLng(<?=$var1?>,<?=$var2?>);
    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP  ,
            scrollwheel: false
        }
        myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: myMap,
            title: 'Name Of Business',
            icon: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

    <title>List Users</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body onload="loadMap()">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-stacked nav-pills">
						<li class="">
							<a href="#">Posts</a>
						</li>
						<li class="active">
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
			
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-2">
				<img  src="../no-image.png"><br>
				</div>
				<div class="col-md-2">
				
					
					<?php
					echo $characters[$id]->name."<br>";
					echo "<font color='blue'>".$characters[$id]->username."</font><br>";
					echo "<font color='blue'>".$characters[$id]->email."</font><br>";
					echo $characters[$id]->phone."<br><br>";;
					echo "<b>Company</b><br>";
					echo $characters[$id]->company->name."<br>";
					echo $characters[$id]->company->catchPhrase."<br>";
					echo $characters[$id]->company->bs."<br>";
					?>
				</div>
				<div class="col-md-1">
				<img  src="../peta.png" width="20" height="20"><br>
				</div>
				<div class="col-md-4">
				 	 <?php
					
					echo $characters[$id]->address->street."<br>";
					echo $characters[$id]->address->suite."<br>";
					echo $characters[$id]->address->city."<br>";
					echo $characters[$id]->address->zipcode."<br>";

				
					?>
					       <div id="map" style="width:300px; height: 300px;">
					
				</div>
			</div>
			<?php
			
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