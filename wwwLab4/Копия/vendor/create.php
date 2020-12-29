<?php

require_once '../connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];


mysqli_query($connect,"INSERT INTO `books` (`id`, `Name book`, `Author`, `Price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: ../Table.php');