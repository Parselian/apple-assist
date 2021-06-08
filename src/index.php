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

<section class="prices">
	<div class="prices__collage prices__collage_left">
		<div class="prices__collage_left-rect"></div>
	</div>
	<div class="prices__collage prices__collage_right">
		<div class="prices__collage_right-circle"></div>
	</div>
	<div class="container prices__wrap">
		<div class="prices__collage prices__collage_right"></div>
		<h2 class="section__title prices__title">Выберите ваше устройство</h2>

		<div class="prices__devices">
			<div class="prices__device" data-device="iphone">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#iphone-icon"></use>
				</svg>
				<div class="prices__device-name">iPhone</div>
			</div>

			<div class="prices__device prices__device_active" data-device="ipad">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#ipad-icon"></use>
				</svg>
				<div class="prices__device-name">iPad</div>
			</div>

			<div class="prices__device" data-device="macbook">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#macbook-icon"></use>
				</svg>
				<div class="prices__device-name">MacBook</div>
			</div>

			<div class="prices__device" data-device="imac">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#imac-icon"></use>
				</svg>
				<div class="prices__device-name">iMac</div>
			</div>

			<div class="prices__device" data-device="watch">
				<svg class="prices__device-icon">
					<use xlink:href="./assets/stack/sprite.svg#apple-watch-icon"></use>
				</svg>
				<div class="prices__device-name">Watch</div>
			</div>
		</div>

		<div class="prices__models">
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
			<div class="prices__model">
				<picture>
					<source srcset="./assets/images/webp/iphone-11-pro-max.webp" type="image/webp">
					<img src="./assets/images/iphone-11-pro-max.png" alt="iPhone 11 Pro Max" class="prices__model-img">
				</picture>
				<div class="prices__model-name">iPhone 11 Pro Max</div>
				<button class="prices__model-button">Выбрать</button>
			</div>
		</div>

		<table class="prices__pricelist" cellpadding="15">
			<thead class="prices__pricelist-headings">
				<th>Услуга</th>
				<th>Сроки</th>
				<th>Цена</th>
				<th></th>
			</thead>
		</table>
		<div class="prices__pricelist-scroll">
			<table class="prices__pricelist" cellpadding="10">
			<tr class="prices__pricelist-row" data-service="Замена заднего стекла">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			<tr class="prices__pricelist-row">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			<tr class="prices__pricelist-row">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			<tr class="prices__pricelist-row" data-service="Замена заднего стекла">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			<tr class="prices__pricelist-row">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			<tr class="prices__pricelist-row">
				<td class="prices__pricelist-servicename">Замена заднего стекла</td>
				<td class="prices__pricelist-time">от 20 мин.</td>
				<td class="prices__pricelist-price">4 990 руб.</td>
				<td> <button class="callback-button prices__pricelist-button">Вызвать мастера</button> </td>
			</tr>
			</table>
		</div>
		<span class="prices__pricelist-unroll">
			<div class="prices__pricelist-unroll-text">Развернуть прайс-лист</div>
			<svg class="prices__pricelist-unroll-icon">
				<use xlink:href="./assets/stack/sprite.svg#pricelist-arrow"></use>
			</svg>
		</span>
	</div>
</section>

<section class="gift">
	<div class="container gift__wrap">
		<div class="gift__border gift__border_top"></div>
		<div class="gift__border gift__border_top-right"></div>
		<div class="gift__border gift__border_bottom"></div>
		<div class="gift__border gift__border_bottom-left"></div>

		<h2 class="section__title_alt gift__title">
			Дарим <span class="text_accent">скидку</span>
			<span class="line-break"></span>
			на <span class="text_underline">первый</span> ремонт
		</h2>
		<div class="gift__subtitle">
			Оставьте свой номер телефона
			<span class="line-break"></span>
			и наш менеджер свяжется с вами через 2 минуты
		</div>

		<form action="#" method="POST" class="form gift__form">
			<div class="form__inputs">
				<input type="text" class="form__input gift__form-input" placeholder="+7 (999) 999-99-99">
				<button class="callback-button form__button gift__form-button">Вызвать мастера</button>
			</div>
		</form>

		<div class="gift__img-wrap">
			<picture>
				<source srcset="./assets/images/webp/gift.webp" type="image/webp">
				<img src="./assets/images/gift.png" alt="подарок" class="gift__img">
			</picture>
		</div>
	</div>
</section>

<section class="about-us">
	<div class="container about-us__wrap">
		<div class="about-us__col">
			<picture>
				<source srcset="./assets/images/webp/about-us-man.webp" type="image/webp">
				<img class="about-us__img" src="./assets/images/about-us-man.png" alt="Руководитель сервисного центра">
			</picture>
			<div class="about-us__blob">
				<h4 class="about-us__blob-title">Евгений Пригожин</h4>
				<div class="about-us__blob-subtitle">Основатель <?= $company_name;?></div>
				<div class="about-us__blob-text">
					“кратко расписать самое главное преимущество”
				</div>
			</div>
		</div>
		<div class="about-us__col about-us__info">
			<h2 class="section__title_alt about-us__title">
				Знаем <span class="text_accent text_bold">всё</span>
				<span class="line-break"></span>
				о ремонте <span class="text_accent text_bold">Apple</span>
			</h2>
			<p class="about-us__text">
				Принимаем Macbook в любом виде: залитые, с трещинами на корпусе или разбитым экраном.
				<br>
				<br>
				Устраняем любые механические поломки: от залипшей кнопки до разбитой матрицы.
				<br>
				<br>
				Удаляем вирусы, ликвидируем программные неполадки.
				<br>
				<br>
				Устанавливаем все версии macOS и лицензионное ПО
				Бесплатно проконсультируем, если Macbook у вас недавно.
				<br>
				<br>
				Работаем 7 дней в неделю, без праздников и выходных.
			</p>
		</div>
	</div>
</section>
</body>
</html>