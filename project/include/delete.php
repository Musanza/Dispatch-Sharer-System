<?php
include 'dbconnect.php';

if (isset($_GET['del_dispatch'])) {
	$delete_id = $_GET['del_dispatch'];
	$query = "DELETE FROM `dispatch` WHERE id = '$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../dispatch.php");
		$message = 'Dispatch deleted successfully';
	}
}

if (isset($_GET['del_user'])) {
	$delete_id = $_GET['del_user'];
	$query = "DELETE FROM `users` WHERE id = '$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../users.php");
		$message = 'User deleted successfully';
	}
}

?>