

<?php 

require_once 'connect.php';

?>

<!doctype html>
<html lang="en">
<head>

   <style>
 th,td {
	 padding:10px;
 }
 th {
	 background:#606060;
	 color: #fff;
 }
 
 td {background:#b5b5b5;
 
 }
    </style>

    <meta charset="UTF-8">
	<title>Books</title>
	
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
</head>	
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1><a style="color: black" href="Main1.php">My books</a></h1>
  <p>Онлайн магазин книг</p> 
</div>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Name book</th>
		<th>Author</th>
		<th>Price</th>
	</tr>
	
<?php

		//$products = mysqli_query($connect, query: "SELECT * FROM `books` ");
				$products = mysqli_query($connect, "SELECT * FROM `books`");
				$products = mysqli_fetch_all($products);
		foreach ($products as $product) {
			?>
		<tr>	
			<td><?= $product[0] ?></td>
			<td><?= $product[1] ?></td>
			<td><?= $product[2] ?></td>
			<td><?= $product[3] ?></td>

		</tr>
		<?php
		
		}

?>
</table>

<div class="container">

<h3>Add new books</h3>
    <form name="contact_form"  action="vendor/create.php" method="post">
	<div class="form-group">
       <label>Name book:</label>
        <input type="text" class="form-control" name="title">
		</div>
        <p>Author</p>
        <textarea class="form-control" name="description"></textarea>
        <p>Price</p>
        <input class="form-control" type="number" name="price"> <br> <br>
        <button class="btn btn-primary" type="submit">Add new product</button>
    </form>
	</div>
	<br>
	<br>
	<div class="jumbotron text-center" style="margin-bottom:0">
  <p>My books.ru(2019-20)</p>
</div>


	
	
</body>

</html>