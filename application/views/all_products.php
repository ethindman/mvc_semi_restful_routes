<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
	<!-- Normalize.CSS -->
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<!-- jQuery 1.11.2 -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- Custom Styles -->
	<link rel="stylesheet" href="../../assets/styles.css">
</head>
<body>
	<div class="container">
		<div class="header">
<?php 
		if($this->session->flashdata('success'))
		{
?>		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Congrats!</strong> <?= $this->session->flashdata('success'); ?>
			</div>
<?php
		 	}
?>
<?php 
		if($this->session->flashdata('error'))
		{
?>		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Oops!</strong> <?= $this->session->flashdata('error'); ?>
			</div>
<?php
		 	}
?>
		<h3>Products Page</h3>
		</div>
	  <div class="row">
			<div class="box col-lg-12 col-md-12 col-sm-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>View</th>
							<th>Edit</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
<!-- LOOP BEGINS -->
<?php  		foreach ($products as $product) 
					{
?>					<tr>
							<td><?= $product['name'] ?></td>
							<td><?= $product['description'] ?></td>
							<td>$<?= $product['price'] ?></td>
							<td class="center">
								<form action="show" method="post">
									<input type="hidden" name="id" value="<?= $product['id'] ?>">
									<input class="link" type="submit" value="Show">
								</form>
							</td>
							<td class="center">
								<form action="edit" method="post">
									<input type="hidden" name="id" value="<?= $product['id'] ?>">
									<input class="link" type="submit" value="Edit">
								</form>
							</td>
							<td class="center">
								<form action="destroy" method="post">
									<input type="hidden" name="id" value="<?= $product['id'] ?>">
									<input type="submit" value="Remove">
								</form>
							</td>
						</tr>
<?php
					}  
?>
<!-- LOOP ENDS -->
					</tbody>
				</table><br>
				<a href="new">Add a new product</a>
			</div>
		</div>
	</div>
</body>
</html>