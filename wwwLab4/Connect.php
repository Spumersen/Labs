<?php

$connect = mysqli_connect( 'localhost', 'root', '', 'books');

if (!$connect) {
	
die('Error connect to database!');

}
