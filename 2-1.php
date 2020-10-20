<?php
session_start();
?>


<!DOCTYPE html>


<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1><a style="color: black" href="Main1.php">My books</a></h1>
  <p>Онлайн магазин книг</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="2.html">Регистрация</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="5.html#">Оставить отзыв</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="4.html">Заказ книг</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="3.html">Каталог книг</a>
      </li>    
    </ul>
  </div>  
</nav>




<div class="container">
<h2>Вход в учётную запись</h2>
  <FORM name="contact_form" method="post" action="auth.php" onsubmit="return validate_form ( );">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="login" class="form-control" id="email" placeholder="Enter email" name="login"> 
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
<SCRIPT type="text/javascript">

<!--

function validate_form ( )
{
	valid = true;

        if ( document.contact_form.log.value == "" )
        {
                alert ( "Вы не указали свой E-mail!" );
                valid = false;
        }

        return valid;
}

//-->

</SCRIPT>

    <button onclick="exe()" type="submit" class="btn btn-primary">Submit</button>
	
  </FORM>
  <p> Не зарегистрированы?<a class="navbar-brand" href="#"> Регистрируйстя! </p></a>
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  <p>My books.ru(2019-20)</p>
</div>

</body>
</html>