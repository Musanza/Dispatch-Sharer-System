<?php
include 'include/dbconfig.php';
session_start();
if (!isset($_SESSION['name'])) {
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dispatch - Dispatch Sharer System</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">         
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="dispatch.php">Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="dispatch.php">Hi, <?php echo $_SESSION['name']; ?> <span class="borderVertical"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dispatch.php">Dispatch <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add.php">Add Dispatch</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="notification.php">Notifications 
						<sup><span class="badge badge-danger">
							<?php

							$query = "SELECT COUNT(*) AS total FROM `dispatch` WHERE date = CURDATE()";
							$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
							if ( $nt = $select->fetch_assoc()){
								echo $nt["total"];
							}
							?>
						</span></sup> 
					</a>
				</li>
				<?php if ($_SESSION['account'] == 'Admin') {?>
				<li class="nav-item">
					<a class="nav-link" href="users.php">Users</a>
				</li>
			<?php } ?>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Log Out</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>
		<div class="separator"></div>
		<section id="content">
			<div class="container">
				<div class="col-md-4"></div>
				<div class="col-md-3">
					<?php if (isset($message)) { ?>
						<div class="alert alert-success" role="alert">
							<?php echo $message; ?>
						</div>
					<?php } ?>
				</div>
				<?php if ($_SESSION['account'] == 'Admin') { ?>
					<div class="row">
						<div class="col-md-12">
							<h3 class="title">Today's Dispatches</h3>
							<div class="table-responsive">
								<table class="table table-striped table-bordered" id="dispatchTable">
									<thead>
										<tr>
											<th>Date</th>
											<th>State</th>
											<th>District</th>
											<th>Area</th>
											<th>Description</th>
											<th colspan="3">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$query = "SELECT * FROM `dispatch` WHERE date = CURDATE() ORDER BY id DESC";
										$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
										while($row = $select->fetch_assoc()){ ?>
											<tr>
												<td><?php echo $row['date']; ?></td>
												<td><?php echo $row['state']; ?></td>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['area']; ?></td>
												<td><?php echo $row['description']; ?></td>
												<?php if ($row['h_officer'] == 'responded' && $row['p_officer'] == 'responded' && $row['f_fighter'] == 'responded') { ?>
													<td><a href="#" class="btn btn-secondary">Responded</a></td>
												<?php } else { ?>
													<td><a href="#" class="btn btn-warning">Pending</a></td>
												<?php } ?>
												<td><a href="add.php?update_dispatch=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
												<td><a href="include/delete.php?del_dispatch=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php if ($_SESSION['account'] == 'Health Officer') { ?>
					<div class="row">
						<div class="col-md-12">
							<h3 class="title">Today's Dispatches</h3>
							<div class="table-responsive">
								<table class="table table-striped table-bordered" id="dispatchTable">
									<thead>
										<tr>
											<th>Date</th>
											<th>State</th>
											<th>District</th>
											<th>Area</th>
											<th>Description</th>
											<th colspan="3">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$query = "SELECT * FROM `dispatch` WHERE date = CURDATE() ORDER BY id DESC";
										$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
										while($row = $select->fetch_assoc()){ ?>
											<tr>
												<td><?php echo $row['date']; ?></td>
												<td><?php echo $row['state']; ?></td>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['area']; ?></td>
												<td><?php echo $row['description']; ?></td>

												<?php if ($row['h_officer'] == 'responded') { ?>
													<td><a href="#" class="btn btn-secondary">Responded</a></td>
												<?php } else { ?>
													<td><a href="dispatch.php?respond_health=<?php echo $row['id']; ?>" class="btn btn-warning">Respond</a></td>
												<?php } ?>

												<?php if ($_SESSION['email'] == $row['user']) { ?>
													<td><a href="add.php?update_dispatch=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
													<td><a href="include/delete.php?del_dispatch=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
												<?php } ?>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php if ($_SESSION['account'] == 'Police Officer') { ?>
					<div class="row">
						<div class="col-md-12">
							<h3 class="title">Today's Dispatches</h3>
							<div class="table-responsive">
								<table class="table table-striped table-bordered" id="dispatchTable">
									<thead>
										<tr>
											<th>Date</th>
											<th>State</th>
											<th>District</th>
											<th>Area</th>
											<th>Description</th>
											<th colspan="3">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$query = "SELECT * FROM `dispatch` WHERE date = CURDATE() ORDER BY id DESC";
										$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
										while($row = $select->fetch_assoc()){ ?>
											<tr>
												<td><?php echo $row['date']; ?></td>
												<td><?php echo $row['state']; ?></td>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['area']; ?></td>
												<td><?php echo $row['description']; ?></td>

												<?php if ($row['p_officer'] == 'responded') { ?>
													<td><a href="#" class="btn btn-secondary">Responded</a></td>
												<?php } else { ?>
													<td><a href="dispatch.php?respond_police=<?php echo $row['id']; ?>" class="btn btn-warning">Respond</a></td>
												<?php } ?>

												<?php if ($_SESSION['email'] == $row['user']) { ?>
													<td><a href="add.php?update_dispatch=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
													<td><a href="include/delete.php?del_dispatch=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
												<?php } ?>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php if ($_SESSION['account'] == 'Fire Fighter') { ?>
					<div class="row">
						<div class="col-md-12">
							<h3 class="title">Today's Dispatches</h3>
							<div class="table-responsive">
								<table class="table table-striped table-bordered" id="dispatchTable">
									<thead>
										<tr>
											<th>Date</th>
											<th>State</th>
											<th>District</th>
											<th>Area</th>
											<th>Description</th>
											<th colspan="3">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$query = "SELECT * FROM `dispatch` WHERE date = CURDATE() ORDER BY id DESC";
										$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
										while($row = $select->fetch_assoc()){ ?>
											<tr>
												<td><?php echo $row['date']; ?></td>
												<td><?php echo $row['state']; ?></td>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['area']; ?></td>
												<td><?php echo $row['description']; ?></td>

												<?php if ($row['f_fighter'] == 'responded') { ?>
													<td><a href="#" class="btn btn-secondary">Responded</a></td>
												<?php } else { ?>
													<td><a href="dispatch.php?respond_fire=<?php echo $row['id']; ?>" class="btn btn-warning">Respond</a></td>
												<?php } ?>

												<?php if ($_SESSION['email'] == $row['user']) { ?>
													<td><a href="add.php?update_dispatch=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
													<td><a href="include/delete.php?del_dispatch=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
												<?php } ?>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } ?>
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
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready( function () {
		$('#dispatchTable').DataTable();
	} );
</script>
</html>
