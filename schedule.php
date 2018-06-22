<!doctype html>
<html lang="ru">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Расписание</title>
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
							<a class="nav-link active" href="schedule.php">Расписание</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="aboutus.php">О нас</a>
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
	<div id="schedule-table">
		<div class="container mt-2 mb-5">
			<div class="row mb-5">
				<div class="col-12 mt-4 mb-5">
					<hr>
					<h1>Расписание занятий</h1>
					<table class="table table-bordered table-striped table-inverse mt-4">
					  <thead>
					    <tr>
					      <th class="none text-center"></th>
					      <th class=" text-center">ПН</th>
					      <th class="text-center">ВТ</th>
					      <th class=" text-center">СР</th>
					      <th class="text-center">ЧТ</th>
					      <th class=" text-center">ПТ</th>
					      <th class=" text-center">СБ</th>
					      <th class=" text-center">ВС</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th rowspan="4" scope="row" class="none text-center align-middle">9:00<br>-<br>11:00</th>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <th rowspan="2" scope="row" class="none text-center align-middle">17:00<br>-<br>19:00</th>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.html' ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>