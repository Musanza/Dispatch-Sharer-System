<?php

$db_host = "localhost";
$db_name = "dispatch_db";
$db_user = "root";
$db_pass = "";
$u_state ="";
$u_description ="";
$u_district ="";
$u_area ="";
$u_name ="";
$u_account ="";
$u_email ="";
$edit_state ="";
$mysqli = new mysqli ($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
	printf("Connection failed: %s\n", $mysqli->connect_error);
	exit();
}
?>