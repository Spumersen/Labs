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
</head>	
<body>

<table>
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
<h3>Add new books</h3>
    <form action="vendor/create.php" method="post">
        <p>Name book</p>
        <input type="text" name="title">
        <p>Author</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br> <br>
        <button type="submit">Add new product
    </form>
</body>

</html>