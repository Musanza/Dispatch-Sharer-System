<?php
include ('include/dbconfig.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Dispatch Sharer System</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Dispatch Sharer System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="register.php">Register</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>
		<div class="separator"></div>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<?php if (isset($message)) {
							echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
						} ?>
						<form method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $u_name; ?>" required="">
							</div>
							<div class="form-group">
								<label>Emaill address</label>
								<input type="text" name="email" class="form-control" value="<?php echo $u_email; ?>" required="">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>State</label>
								<input type="text" name="state" list="state-list" class="form-control" value="<?php echo $u_state; ?>" required="">
								<datalist id="state-list">
									<?php
									$query = "SELECT * FROM `dispatch`";
									$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
									while($row = $select->fetch_assoc()){ ?>
										<option value="<?php echo $row['state']; ?>"></option>
									<?php } ?>
								</datalist>
							</div>
							<div class="form-group">
								<label>District</label>
								<input type="text" name="district" list="district-list" class="form-control" value="<?php echo $u_district; ?>">
								<datalist id="district-list">
									<?php
									$query = "SELECT * FROM `dispatch`";
									$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
									while($row = $select->fetch_assoc()){ ?>
										<option value="<?php echo $row['district']; ?>"></option>
									<?php } ?>
								</datalist>
							</div>
							<div class="form-group">
								<label>Account</label>
								<select name="account" class="form-control" required="">
									<option><?php echo $u_account; ?></option>
									<option>Police Officer</option>
									<option>Health Officer</option>
									<option>Fire Fighter</option>
								</select>
							</div>
							
							<?php if ($edit_state == false) {?>
							<input type="submit" name="add-user" value="Add" class="btn btn-secondary float-right">
						<?php } else {?>
							<input type="submit" name="update-user" value="Update" class="btn btn-success float-right">
						<?php } ?>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div class="footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Designer</h3>
					<ul>
						<li>Student Name: Chibuta William Kayashi</li>
						<li>Student No. 1504240503</li>
						<li>Course: Final Year Project</li>
						<li>Prorgam: BSc of Science in Mobile Communications</li>
					</ul>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<h3>Links</h3>
					<ul>
						<li><a href="http://icuzambia.net/">ICU Zambia</a></li>
						<li><a href="http://zrdc.org/">ZRDC</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
