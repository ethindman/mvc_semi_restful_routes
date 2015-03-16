<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
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
		if($this->session->flashdata('error'))
		{
?>		<div class="alert alert-danger alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>Oops!</strong> <?= $this->session->flashdata('error'); ?>
			</div>
<?php
		 	}
?>
			<h3>Create a New Product</h3>
		</div>
	  <div class="row">
			<div class="box col-lg-6 col-md-12 col-sm-12">
				<form action="create" method="post">
				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" name="name" class="form-control">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <input type="text" name="description" class="form-control">
				  </div>
				  <div class="form-group">
				    <label>Price</label>
				    <input type="text" name="price" class="form-control">
				  </div>
				  <button type="submit" class="btn btn-primary">Create</button>
				</form><br>
				<a href="home">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>