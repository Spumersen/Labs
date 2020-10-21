<?php

/*setcookie('user', $user['name'], time() - 3600, "/");
*/ 
session_start();
unset($_SESSION['user']);
header ('Location: 2-1.php');

?>