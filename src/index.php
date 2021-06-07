<?php
require_once(__DIR__ . '/assets/configs/config.php');
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= './assets/css/bootstrap-grid.min.css' ?>">
	<link rel="stylesheet" href="<?= './assets/css/reset.css' ?>">
	<link rel="stylesheet" href="<?= './assets/css/style.css' ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<title>Apple Assist | Ремонт iPhone в СПб</title>
</head>
<body>
<section class="promo">
	<header class="header">
		<div class="container header__wrap">
			<svg class="logo header-logo">
				<use xlink:href="<?= './assets/stack/sprite.svg#logo' ?>"></use>
			</svg>
			<nav class="header__menu">
				<a href="#" class="header__menu-item">О нас</a>
				<a href="#" class="header__menu-item">Услуги</a>
				<a href="#" class="header__menu-item">Контакты</a>
			</nav>
			<div class="header__contacts">
				<button class="callback-button header__contacts-btn">Нужна консультация</button>
				<div class="header__contacts-col">
					<a href="tel: <?= $phone_link ?>" class="header__contacts-phone"><?= $phone_format ?></a>
					<div class="header__contacts-worktime">8:00 — 23:00 Без выходных</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container promo__wrap">
		<div class="promo__collage promo__collage_left">
			<div class="promo__collage_left-circle"></div>
		</div>
		<div class="promo__collage promo__collage_right">
			<div class="promo__collage_right-square"></div>
		</div>
		<div class="promo__col">
			<h1 class="promo__title">
				Ремонт <span class="text_accent">iPhone</span>
				<span class="line-break"></span>
				в Санкт-Петербурге
			</h1>
			<ul class="promo__list">
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Бесплатная доставка
				</li>
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Пожизненная гарантия
				</li>
				<li class="promo__list-item">
					<svg class="promo__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					Оригинальные запчасти
				</li>
			</ul>

			<button class="callback-button promo__button">Вызвать инженера</button>
		</div>


		<picture>
			<source srcset="./assets/images/webp/promo-man.webp" type="image/webp">
			<img src="./assets/images/promo-man.png" alt="Парень с айфоном" class="promo__man">
		</picture>
	</div>
</section>

<section class="features">
	<div class="container features__wrap">
		<div class="features__col">
			<h2 class="section__title section__title_tail features__title">
				Почему нас выбирают?
				<svg class="features__title-icon">
					<use xlink:href="./assets/stack/sprite.svg#cup"></use>
				</svg>
			</h2>

			<ul class="features__list">
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#delivery"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Бесплатный выезд мастера</h3>
						<div class="features__list-item-text">
							Наш сотрудник в течение часа со всеми необходимыми документами выедет на указанный адрес.
						</div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#warehouse"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Оригинальные запчасти</h3>
						<div class="features__list-item-text">
							Мы устанавливаем только оригинальные компоненты, которые поступают с завода-изготовителя напрямую по минимальной
							цене
						</div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#24-hours"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Работаем без выходных</h3>
						<div class="features__list-item-text"></div>
					</div>
				</li>
				<li class="features__list-item">
					<svg class="features__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
					</svg>
					<div class="features__list-item-col">
						<h3 class="features__list-item-title">Пожизненная гарантия</h3>
						<div class="features__list-item-text">
							Мы полностью уверены в качестве своей работы, и поэтому даем пожизненную гарантию на все виды работ.
						</div>
					</div>
				</li>
			</ul>

			<form action="#" method="POST" class="form features__form">
				<div class="form__inputs features__form-inputs">
					<input type="text" class="form__input features__form-input" placeholder="+7 (999) 999-99-99">
					<button class="callback-button form__button features__form-button">Вызвать мастера</button>
				</div>
				<div class="form__footnote features__form-footnote">
					Нажимая на кнопку “Вызвать мастера” я соглашаюсь с <a href="#" class="form__footnote-link">политикой обработки
						персональных данных</a>
				</div>
			</form>
		</div>

		<div class="features__col features__collage-wrap">
			<picture>
				<source srcset="./assets/images/webp/features-iphone.webp" type="image/webp">
				<img src="./assets/images/features-iphone.png" alt="iPhone" class="features__iphone">
			</picture>
			<svg class="features__collage">
				<use xlink:href="./assets/stack/sprite.svg#features-collage"></use>
			</svg>
		</div>
	</div>
</section>
</body>
</html>