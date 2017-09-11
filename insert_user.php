<?php
include "menu.php";
include "function.php";
?>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					 
					<label for="labelup" class="col-sm-2 control-label">
						Upload File JSON
					</label>
					<div class="col-sm-10">
						<input type="file" name="data_file">
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" name="upload" class="btn btn-default">
							upload
						</button>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php
if(isset($_POST['upload'])){
$fileimage1 = $_FILES['data_file']['name'];
$upload_path = "file_json/";
$tmp1 = $_FILES['data_file']['tmp_name'];
$uploadfile1 = (file_exists($upload_path.$fileimage1)) ? $upload_path."copy of".$fileimage1: $upload_path.$fileimage1;
if(move_uploaded_file($tmp1,$uploadfile1)){
$url=$upload_path.$fileimage1;
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>
<?php

foreach ($characters as $item) {
$param1="(`username`, `password`)";
$param2="('".$item['username']."', '".$item['email']."')";
	insertData("`login`", $param1, $param2);
}
}
}
?>

