<?php
include 'dbconnect.php';

if(isset($_POST['add'])){
	$user = $_POST['user'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$area = $_POST['area'];
	$description = $_POST['description'];
	$date = date("Y-m-d");
	$query = "INSERT INTO `dispatch`(user, state, district, area, description, date) VALUES('$user', '$state', '$district', '$area', '$description', '$date')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$message = 'Dispatch added successfully';
	}
}

if(isset($_POST['add-user'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$state = $_POST['state'];
	$district = $_POST['district'];
	$account = $_POST['account'];
	$query = "INSERT INTO `users`(name, email, password, state, district, account) VALUES('$name', '$email', '$password', '$state', '$district', '$account')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$message = 'Account registered successfully';
	}
}
?>