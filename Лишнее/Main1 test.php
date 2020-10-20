



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
  <h1>My books</h1>
  <p>Онлайн магазин книг</p>

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="2-1.php">Регистрация</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Фоновая музыка
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" onclick="playAudio(document.getElementById('audio_1'))">Включить</a>
    <a class="dropdown-item" onclick="stopAudio(document.getElementById('audio_1'))">Выключить</a>
   
</div>
      <li class="nav-item">
        <a class="nav-link" href="exit.php">Выйти из своей учетной записи</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="4.html">Заказ книг</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="3-1.php">Каталог книг</a>
      </li> 
	  
	  <audio id="audio_1">
                                            
                                            <source src="frostpunk_theme.mp3" type="audio/mp3" />
                </audio>
	  <li class="nav-item">	  
	  
	  <script>
    var currentAudio = null;
    function playAudio(audio) {
        if(currentAudio) currentAudio.pause();
        currentAudio = audio;
        currentAudio.play(); 
    }
    function stopAudio(audio) {
        currentAudio.pause();
    }
        </script> 
	  </li>
<li class="nav-item">	

</li>	  
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 data-toggle="tooltip" title="Бестселлер!">Самая популярная книга</h2>
	  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	  <img src="Cokf.jpg" width="250" height="300px" alt="lorem">
      <p>«Метро́ 2033» — постапокалиптический роман Дмитрия Глуховского, описывающий жизнь людей в московском метро после ядерной войны на Земле. </p>
      <h3>Ссылки на авторов книг</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">	Дмитрий Глуховский </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Сергей Лукьяненко </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Михаил Шолохов </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Скоро будут другие!</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Распрадажа книг Шолохова</h2>
      <h5>Действует до, Май 10, 2020</h5>
      <div class="fakeimg">Первый рассказ «Звери» (впоследствии «Продкомиссар»), отправленный М. А. Шолоховым в альманах «Молодогвардеец», не был принят редакцией. 14 декабря 1924 года в газете «Молодой ленинец» вышел рассказ «Родинка». В первом номере «Комсомолия» — боевом литературно-художественном журнале советской молодежи (редактором его в то время был Александр Жаров), вышедшем в апреле 1925 года, появился рассказ Шолохова «Бахчевник». Затем в 1926 году Шолохов печатает здесь свои рассказы «Смертный враг», «Лазоревая степь», «Батраки», открывшие цикл донских рассказов: «Пастух», «Илюха», «Жеребёнок», «Семейный человек», «Двумужняя» и др. Шолохов становится активным сотрудником журнала;  </div>
      <p></p>
      <p>В своих интервью и автобиографиях Шолохов сообщал, что начал писать «Тихий Дон» (получивший первоначальное название «Донщина») в октябре 1925 года.</p>
      <br>
      <h2>Доступна биография Глуховского</h2>
      <h5>Информация размещена, Янв 2, 2020</h5>
      <div class="fakeimg">Дми́трий Алексе́евич Глухо́вский — российский писатель, журналист, радиоведущий, военный корреспондент. Автор постапокалиптических романов «Метро 2033» и «Метро 2034», романов-антиутопий «Метро 2035» и «Будущее»</div>
      <p></p>
      <p>Родился и вырос в Москве (отец — журналист и переводчик сербской поэзии на русский язык Алексей Глуховский), где окончил школу 1231 на Арбате, с углублённым изучением французского языка. </p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>My books.ru(2019-20)</p>
</div>
<script language="javascript" type="text/javascript"> 
var d = new Date();
var day=new Array("Воскресенье","Понедельник","Вторник",
"Среда","Четверг","Пятница","Суббота");
var month=new Array("января","февраля","марта","апреля","мая","июня",
"июля","августа","сентября","октября","ноября","декабря");
document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]
+ " " + d.getFullYear() + " г.");
</script>

</body>
</html>

