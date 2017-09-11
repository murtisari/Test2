<?php
include "menu.php";
$data = file_get_contents("http://jsonplaceholder.typicode.com/users"); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$i=1;
?>

			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Username
						</th>
						<th>
							Password
						</th>
						<th>
							Alamat
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($characters as $item) {
				?>
					<tr>
						<td>
							<?=$i++?>
						</td>
						<td>
							<?=$item->username;?>
						</td>
						<td>
							<?=$item->email;?>
						</td>
						<td>
							<?=$item->address->street." - ".$item->address->city;?>
						</td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>