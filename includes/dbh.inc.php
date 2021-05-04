<?php

$servername = "localhost";
$dBUsername = "Enoma";
$dBPassword = "test12";
$dBName = "adoption_animals";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
