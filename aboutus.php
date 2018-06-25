<!doctype html>
<html lang="ru">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>О нас</title>
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
							<a class="nav-link active" href="aboutus.php">О нас</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts.php">Контакты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Блог</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div id="aboutus">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-10 col-sm-9 mt-xl-4 mt-lg-4 mb-auto mt-sm-0">
					<hr>
					<h1>О нас и лаборатории</h1>
					<h3>Лаборатория была создана на базе ИГХТУ. Преподавателями <br>являются доценты технических наук, но мы не против и молодых специалистов, которые могут заполнить <a href="#">анкету</a> и пройти отбор.<br> Сейчас мы обучаем школьников и студентов, у нас маленькие наборы, поэтому места и внимания хватит всем. Специально для лаборатории закупаются необходимые материалы, например, конструкторы ЛЕГО.</h3>
					<h6 class="text-uppercase">Мы в социальных сетях:</h6>
					<ul class="list-inline list-unstyled">
						<li class="list-inline-item"><a href="http://instagram.com">Instagram</a></li>
						<li class="list-inline-item"><a href="http://twitter.com">YouTube</a></li>
						<li class="list-inline-item"><a href="http://facebook.com">Twitter</a></li>
						<li class="list-inline-item"><a href="http://vk.com">Вконтакте</a></li>
					</ul>
				</div>
				<div class="col-xl-6 col-lg-6 col-sm-12 d-xl-block d-md-none d-lg-block d-sm-none mt-xl-0 mt-lg-5">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
						<image xlink:href="img/isuct.png" x="27" y="10" height="58px" width="58px"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div class="yellow-bg">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-4 text-center mt-5">
					<h1 class="text-white">Команда лаборатории</h1>
				</div>
				<div class="col-xl-4 col-6 col-lg-4" id="command-block">
					<div class="card">
					  	<div class="card-body text-center">
					  		<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" style="height: 140px">
					   		<h4>Евгений Сергеевич Константинов</h4>
							<h3>Преподаватель<br>ИГХТУ, Akvelon</h3>
							<a href="programm.php" data-toggle="tooltip" title="Программирование"><i class="fas fa-code"></i></a>
							<a href="#" data-toggle="tooltip" title="Трехмерная печать"><i class="fas fa-cube"></i></a>
							<a href="#" data-toggle="tooltip" title="Робототехника"><i class="fas fa-robot"></i></a>
					 	 </div>
					</div>
				</div>
				<div class="col-xl-4 col-6 col-lg-4" id="command-block">
					<div class="card">
					  	<div class="card-body text-center">
					  		<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" style="height: 140px">
					   		<h4>Кто-то</h4>
							<h3>---<br>ИГХТУ</h3>
							<a href="#" data-toggle="tooltip" title="Трехмерная печать"><i class="fas fa-cube"></i></a>
					 	 </div>
					</div>
				</div>
				<div class="col-xl-4 col-6 col-lg-4" id="command-block">
					<div class="card">
					  	<div class="card-body text-center">
					  		<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" style="height: 140px">
					   		<h4>Кто-то</h4>
							<h3>---<br>ИГХТУ</h3>
					 	 </div>
					</div>
				</div>
			</div>
		</div>
	<?php include 'projects.html' ?> 
	<div class="container">
		<div class="row mt-5">
			<div class="col-12 mb-4 text-center">
				<h1>Фотографии с занятий</h1>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
			<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
				<div class="card">
					 <img class="card-img" src="img/fon.jpg" alt="Card image cap">
				</div>
			</div>
		</div>
		<div id="hideref" class="col-xl-12 mt-5 mb-5 text-center">
			<a data-toggle="collapse" data-parent="#collapse-group" href="#hide-me" onclick="Hide()"><h6 class="text-uppercase">Больше фотографий<br><i class="fa">&#xf107</i></h6></a>
			<script type="text/javascript">
			function Hide() {
			document.getElementById("hideref").style.display = "none";
			}
			</script>
		</div>

		<div id="hide-me" class="panel-collapse collapse">
			<div class="row">
				<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
					<div class="card">
						<img class="card-img" src="img/fon.jpg" alt="Card image cap">
					</div>
				</div>
				<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
					<div class="card">
						<img class="card-img" src="img/fon.jpg" alt="Card image cap">
					</div>
				</div>
				<div class="col-xl-4 col-6 col-lg-4 col-sm-12" id="photos-cards">
					<div class="card">
						<img class="card-img" src="img/fon.jpg" alt="Card image cap">
					</div>
				</div>
				<div class="col-12 mt-5 mb-5 text-center">
					<a id="showhide" data-toggle="collapse" data-parent="#collapse-group" href="#hide-me" onclick="Show();"><h6 class="text-uppercase">Скрыть</h6></a>
					<script type="text/javascript">
						function Show() {
						document.getElementById("hideref").style.display = "block";
						}
					</script>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.html' ?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>