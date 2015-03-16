<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product</title>
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
			<h3>Edit Product <?= $product['id'] ?></h3>
		</div>
	  <div class="row">
			<div class="box col-lg-6 col-md-12 col-sm-12">
				<form action="update" method="post">
				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" name="name" class="form-control" placeholder="<?= $product['name'] ?>">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <input type="text" name="description" class="form-control" placeholder="<?= $product['description'] ?>">
				  </div>
				  <div class="form-group">
				    <label>Price</label>
				    <input type="text" name="price" class="form-control" placeholder="<?= $product['price'] ?>">
				  </div>
				  <button type="submit" class="btn btn-primary">Update</button>
				  <input type="hidden" name="id" value="<?= $product['id'] ?>">
				</form><br>
				<form class="link" action="show" method="post">
					<input type="hidden" name="id" value="<?= $product['id'] ?>">
					<input class="link" type="submit" value="Show">
				</form> |
				<a href="home">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>