<?php
$servername = "localhost";
$dBUsername = "Test1";
$dBPassword = "test12";
$dBName = "adoption_animals";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
