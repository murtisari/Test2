<?php
include "menu.php";
?>
			<form class="form-horizontal" role="form" action="proses_login.php" method="post">
				<div class="form-group">
					 
					<label for="inputEmail3" class="col-sm-2 control-label">
						Username
					</label>
					<div class="col-sm-10">
						<input class="form-control" name="username" id="inputEmail3" type="text">
					</div>
				</div>
				<div class="form-group">
					 
					<label for="inputPassword3" class="col-sm-2 control-label">
						Password
					</label>
					<div class="col-sm-10">
						<input class="form-control" name="password" id="inputPassword3" type="password">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" name="login" class="btn btn-default">
							Login
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