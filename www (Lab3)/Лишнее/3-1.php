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
  <h1><a style="color: black" href="Main.html">My books</a></h1>
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
        <a class="nav-link" href="4.html#">Заказ книг</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="3.html#">Каталог книг</a>
      </li>    
    </ul>
  </div>  
</nav>
<div class="container" style="margin-top:30px">
 <div class="row">
    <div class="col-sm-4">
      <h2>Метро 2033</h2>
	  <img src="Cokf.jpg" width="250" height="300px" alt="lorem">
      <p>«Метро 2033» — постапокалиптический роман Дмитрия Глуховского, описывающий жизнь людей в московском метро после ядерной войны на Земле. </p>
      <h5> 700р</h5>
	  </div>
	  <div class="col-sm-4">
	  <h2>Метро 2034</h2>
	  <img src="Cokf1.jpg" width="250" height="300px" alt="lorem">
      <p>«Метро 2034» — Сюжет перемещается из центральной части метро, описанной в романе «Метро 2033» за пределы Кольцевой линии (Ганзы). </p>
      <h5> 750р</h5>
      </div>
	  <div class="col-sm-4">
	  <h2>Метро 2035</h2>
	  <img src="Cokf2.jpg" width="250" height="300px" alt="lorem">
      <p>«Метро 2035» — Действие романа происходит после событий двух первых книг «Метро 2033» и «Метро 2034», объединяет героев обоих произведений одной сюжетной линией. </p>
      <h5> 800р</h5>
      </div>
	  <div class="col-sm-4">
	  <h2>КваZи</h2>
	  <img src="Cokf3.jpg" width="250" height="300px" alt="lorem">
      <p>«КваZи» —действие романа происходит в Москве недалёкого будущего, в котором большая часть человечества стала зомби — «восставшими», некоторые из которых сумели вернуться к разумной жизни, став «кваzи». </p>
      <h5>600р</h5>
      </div>
	  <div class="col-sm-4">
	  <h2>КайноZой</h2>
	  <img src="Cokf4.jpg" width="250" height="300px" alt="lorem">
      <p>«КайноZой» — продолжение романа «Кваzи» российского писателя-фантаста Сергея Лукьяненко, который станет вторым и заключительным произведением писателя о зомби. </p>
      <h5>800р</h5>
      </div>
	  <div class="col-sm-4">
	  <h2>Cудьба человека </h2>
	  <img src="Cokf5.jpg" width="250" height="300px" alt="lorem">
      <p>С началом Великой Отечественной войны шофёру Андрею Соколову приходится расстаться с семьёй и уйти на фронт. Уже в первые месяцы войны он получает ранение и попадает в нацистский плен.  </p>
      <h5>500р</h5>
      </div>
	  

	
  </div>	
</div>

	



<div class="jumbotron text-center" style="margin-bottom:0">
<div id="link"></div>
<script type="text/javascript">
var obj = document.getElementById('link');
var timerFIG = 2; // Время в секундах, через которое появляется кнопка
var timer = setInterval("startTimer()",1000);
function startTimer() {
if(timerFIG !== 1) {
timerFIG--;
} else {
clearInterval(timer);
obj.innerHTML = '<button type="button" class="btn btn-outline-primary">Заказать сейчас</button>'; // кнопка
}}
</script>

<p></p>

  <p>My books.ru(2019-20)</p>
</div>

</body>
</html>