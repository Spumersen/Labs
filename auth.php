<?php
 
  session_start();
 
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
 /*
   $login = $_POST['login'];
   $pass = $_POST['pass'];
*/

  if (mb_strlen($login) < 1 || mb_strlen ($login) > 90) 
     {
	  
	  echo " Недопустимая длинна логина" ;
	  exit();
  
     } else if (mb_strlen($pass) < 2 || mb_strlen ($pass) > 10) 
		{
	  
	         echo " Недопустимая длинна пароля" ;
	         exit();
        }	
 		$mysql = new mysqli( 'localhost', 'root', '', 'register-bd') or die("Could not connect to mysql".mysqli_error($connection));
		
				
		$result = $mysql->query ($query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
		
		// die($query.".." .mysqli_error($mysql).$result.".");
		
		$user = $result->fetch_assoc();
		//print_r($user);
		if((!$user)) {
			echo "Такой пользователь не найден";
			exit();
		}
		
		//print_r($user);
		//exit();
		
		$_SESSION['user'] = [ 
		    "id" => $user ['id'],
			"name" => $user ['name']
			];
		
		//setcookie('user', $user['name'], time() + 3600, "/");
		
		
  
        $mysql->close();
  
 header ('Location: Main1.php');
 

?>