<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet"> 
	<!--<link rel="stylesheet" href="css/iconmoon.css">-->
	<!-- bxSlider CSS file -->
	<link href="slider/jquery.bxslider.min.css" rel="stylesheet" />
</head>
<body>
	<header>
		<div class="container brownpart">
			<div class="row">
				<div class="col-md-2 col-sm-12"><a href="index.php" class="logo"><img src="img/logo.png" alt=""></a></div>
				<div class="col-md-3 col-md-offset-4 col-sm-4"><a href="tel:+78422656050">+7 8422 65-60-50</a></div>
				<div class="col-md-3 col-md-offset-0 col-sm-offset-4 col-sm-4 "><a href="#callme" class="button" data-toggle="modal">Заказать звонок</a></div>
			</div>			
		</div>
		<div class="blackline">
			<div class="container">
				<div class="row">
					<nav class="col-md-10" id="dropdown">
						<a href="index.php">О компании</a>
						<a href="production.php">производство</a>
						<div class="dropdown">
							<a href="#"  class="dropdown-toggle" data-toggle="dropdown">Каталог продукции</a>
							<div class="dropdown-menu">
								<a href="#">Эконом</a>
								<a href="#">Стандарт</a>
								<a href="#">Комфорт</a>
							</div>
						</div>
						<a href="about.php">партнёрам</a>
						<a href="">Отзывы</a>
						<a href="contacts.php">контакты</a>							     
					</nav>
					<div class="col-md-2 col-sm-3 basket-link col-xs-5">
						<a href="basket.php"><img src="img/basket.svg" alt=""><span>Товаров<br/> в корзине: 0</span></a>
					</div>
					<div class="col-sm-3 col-sm-offset-6 col-xs-4 col-xs-offset-3" id="menu-button">
						<i class="fa-navicon"></i>
					</div>
				</div>
			</div>
		</div>
	</header>