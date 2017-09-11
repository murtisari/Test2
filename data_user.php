<?php
include "menu.php";
$data = file_get_contents("http://jsonplaceholder.typicode.com/users"); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$i=1;
echo "<table>";

foreach ($characters as $item) {
echo "<tr>";
echo $i++."<br>";
echo $item->name."<br>";
echo $item->email."<br>";
echo $item->phone."<br>";
echo "<tr>";
}

echo "</table>";

?>