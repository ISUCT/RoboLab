<!doctype html>
<html lang="ru">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Контакты</title>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/solid.css" integrity="sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/snap.svg-min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-expand-lg navbar-light">
			<div class="ml-5 text-left">
				<header>
					<a href="index.php"><div class="navbar-brand">RoboLab</div></a>
				</header>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="mr-5 ml-auto">
				<div class="collapse navbar-collapse col-md-offset-4" id="navbarToggler">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="courses.html">Направления</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="schedule.php">Расписание</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="aboutus.php">О нас</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="contacts.php">Контакты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Блог</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div id="map">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex-box">
					<div class="col-xl-4 col-lg-4 col-sm-10 map-card d-inline-block">
						<a data-toggle="collapse" data-parent="#collapse-group" href="#hide-me"><i class="fas fa-envelope">&#xf0e0</i></a>
						<div class="map-card-body">
							<h6 class="text-uppercase">Россия, г.Иваново,<br>
							Шереметьевский проспект,<br>
							Дом 7, Индекс 153000</h6>
							<h6 class="pt-3">Телефон:</h6>
							<h3 class="pt-2">8 (493) 232-92-41<br>
							(Вахта ИГХТУ)</h3>
							<h3 class="pt-2">8 (960) 543-76-67<br>
							(Евгений Сергеевич)</h3>
							<h3 class="pt-2">8 (989) 876-76-87<br>
							(Владимир Николаевич)</h3>
							<ul class="list-unstyled list-inline">
								<li><h6 class="pt-3 d-inline-block">Автобус: </h6>
								<h3 class="d-inline">7, 1, 38, 15, 8</h3></li>
								<li><h6 class="pt-3 d-inline-block">Маршрутка: </h6>
								<h3 class="d-inline">7, 1, 38, 15, 8</h3></li>
								<li><h6 class="pt-3 d-inline-block">Троллейбус: </h6>
								<h3 class="d-inline">1, 7, 14, 6</h3></li>
							</ul>
						</div>
					</div>
					<div class="col-5 message-window panel-collapse collapse" id="hide-me">
						<h6 class="text-white text-uppercase">Есть вопрос?</h6>
						<p class="text-white">Как к вам обращаться?</p>
						<input class="form-control" type="text" placeholder="Ваше имя" id="text-input">
						<input class="form-control mt-4" type="text" id="text-input" aria-describedby="emailHelp" placeholder="Номер телефона или почта">
						<textarea class="form-control mt-4" type="text" rows="5" placeholder="Ваш вопрос или пожелание"></textarea>
						<button type="submit" class="submit-button text-white">Отправить</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.html' ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
