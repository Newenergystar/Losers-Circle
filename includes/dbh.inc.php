<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cdbr-east-03.cleardb.com"];
$cleardb_username = $cleardb_url["befc3846805b02"];
$cleardb_password = $cleardb_url["8c27a32b"];
$cleardb_db = substr($cleardb_url["heroku_fbc7c3b04eb92d5"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>


