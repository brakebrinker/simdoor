<?php	include "header.php";?>		
	<main>		
		<div class="container">
			<div class="page-head">
				<h2>Корзина</h2>
				<div class="breadcrumbs">
					<a href="index.php">Главная</a>
					/
					<span>Корзина</span>
				</div>
			</div>
			<div class="basket">
				<div class="row basket-good">
					<div class="col-md-1 col-sm-12 pic"><img src="img/good3.jpg" alt=""></div>
					<div class="col-md-3 col-sm-3">
						<h5>Дверь металлическая Триумф 2</h5>
					</div>
					<div class="col-md-2 col-sm-2 amount">количество</div>
					<div class="col-md-2 col-sm-3 number">
						<span class="minus">-</span><input value="2" type="tel" readonly><span class="plus">+</span>
					</div>
					<div class="col-md-4 col-sm-4"><a href="#"><i class="fa-times-circle"></i> <span>Убрать из корзины</span></a></div>
				</div>
				<div class="row basket-good">
					<div class="col-md-1 col-sm-12 pic"><img src="img/good3.jpg" alt=""></div>
					<div class="col-md-3 col-sm-3">
						<h5>Дверь металлическая Триумф 2</h5>
					</div>
					<div class="col-md-2 col-sm-2 amount">количество</div>
					<div class="col-md-2 col-sm-3 number">
						<span class="minus">-</span><input value="2" type="tel" readonly><span class="plus">+</span>
					</div>
					<div class="col-md-4 col-sm-4"><a href="#"><i class="fa-times-circle"></i> <span>Убрать из корзины</span></a></div>
				</div>				
			</div>
			<form action="" class="contact-form">
				<h4>Введите ваши контактные данные</h4>
				<div class="row">
					<div class="col-md-4 col-sm-6"><input type="text" name="name" placeholder="Ваше имя"></div>
					<div class="col-md-4 col-sm-6"><input type="text" name="company" placeholder="Название организации"></div>
					<div class="col-md-4 col-sm-6"><input type="text" name="address" placeholder="Адрес организации"></div>
					<div class="col-md-4 col-sm-6"><input type="text" name="post" placeholder="Должность"></div>
					<div class="col-md-4 col-sm-6"><input type="email" name="email" placeholder="Email"></div>
					<div class="col-md-4 col-sm-6"><input type="tel" name="tel" placeholder="Номер телефона"></div>
				</div>
				<div class="send">
					<a href="#" class="button white">Вернуться к покупкам</a>
					<button type="submit">Оформить заказ</button>
					<div class="notation">Заполняя форму вы соглашаетесь с обработкой персональных данных согласно  <a href="#">пользовательского соглашения</a></div>
				</div>
			</form>
		</div>
		
	</main>
<?php	include "footer.php";?>	