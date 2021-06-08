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

	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
	</script>
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
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
				</tr>
				<tr class="prices__pricelist-row">
					<td class="prices__pricelist-servicename">Замена заднего стекла</td>
					<td class="prices__pricelist-time">от 20 мин.</td>
					<td class="prices__pricelist-price">4 990 руб.</td>
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
				</tr>
				<tr class="prices__pricelist-row">
					<td class="prices__pricelist-servicename">Замена заднего стекла</td>
					<td class="prices__pricelist-time">от 20 мин.</td>
					<td class="prices__pricelist-price">4 990 руб.</td>
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
				</tr>
				<tr class="prices__pricelist-row" data-service="Замена заднего стекла">
					<td class="prices__pricelist-servicename">Замена заднего стекла</td>
					<td class="prices__pricelist-time">от 20 мин.</td>
					<td class="prices__pricelist-price">4 990 руб.</td>
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
				</tr>
				<tr class="prices__pricelist-row">
					<td class="prices__pricelist-servicename">Замена заднего стекла</td>
					<td class="prices__pricelist-time">от 20 мин.</td>
					<td class="prices__pricelist-price">4 990 руб.</td>
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
				</tr>
				<tr class="prices__pricelist-row">
					<td class="prices__pricelist-servicename">Замена заднего стекла</td>
					<td class="prices__pricelist-time">от 20 мин.</td>
					<td class="prices__pricelist-price">4 990 руб.</td>
					<td>
						<button class="callback-button prices__pricelist-button">Вызвать мастера</button>
					</td>
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
				<div class="about-us__blob-subtitle">Основатель <?= $company_name ?></div>
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

<section class="reviews">
	<div class="reviews__bg"></div>

	<div class="container reviews__wrap">
		<div class="reviews__collage reviews__collage_left">
			<svg class="reviews__collage_left-quote">
				<use xlink:href="./assets/stack/sprite.svg#quote"></use>
			</svg>
		</div>

		<div class="reviews__collage reviews__collage_right">
			<svg class="reviews__collage_right-quote">
				<use xlink:href="./assets/stack/sprite.svg#quote"></use>
			</svg>
		</div>
		<div class="reviews__col">
			<h2 class="section__title_alt reviews__title">Клиенты <span class="text_accent text_bold">доверяют</span> нам</h2>

			<div class="reviews__slider">
				<div class="reviews__slide">
					<div class="reviews__slide-row">
						<div class="reviews__slide-col">
							<picture>
								<source srcset="./assets/images/webp/reviewer.webp" type="image/webp">
								<img src="./assets/images/reviewer.jpg" alt="фото клиента" class="reviews__slide-photo">
							</picture>
							<div class="reviews__slide-reviewer">
								Евгения В.
								<span class="reviews__slide-problem">
									Замена стекла iPhone
								</span>
							</div>
						</div>
						<div class="reviews__slide-rating">4.8</div>
					</div>
					<div class="reviews__slide-text">
						После трех неудачных опытов ремонта Айфонов в других сервисах (где чинили одно, случайно ломая другое и так часами
						до
						фин. результата), была приятно удивлена оперативностью и качеством работы - за 15 минут уверенно поменяли экран,
						прямо
						"не отходя от кассы", все перед тобой ) Спасибо!
					</div>
				</div>
			</div>
		</div>

		<div class="reviews__col">
			<picture>
				<source srcset="./assets/images/webp/" type="image/webp">
				<img src="./assets/images/" alt="фото" class="reviews__img">
			</picture>
		</div>
	</div>

	<button class="callback-button reviews__button">Вызвать мастера</button>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<div class="steps__col">
			<h2 class="section__title section__title_tail steps__title">Как происходит ремонт?</h2>

			<ul class="steps__list">
				<li class="steps__list-item">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#call"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Заявка</span>
						Вы оставляете заявку на выезд мастера или выезд курьера для доставки техники к нам в сервис
					</div>
				</li>
				<li class="steps__list-item steps__list-item_active">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#search"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Диагностика</span>
						Мы проводим диагностику, после которой станут известны сроки и стоимость работ
					</div>
				</li>
				<li class="steps__list-item">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#gear"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Ремонт</span>
						Оповещаем Вас и после вашего подтверждения проводим ремонт
					</div>
				</li>
				<li class="steps__list-item">
					<svg class="steps__list-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
					</svg>
					<div class="steps__list-item-text">
						<span class="steps__list-item-title">Гарантия</span>
						Вы забираете свой гаджет и получаете пожизненную гарантию
					</div>
				</li>
			</ul>
		</div>

		<div class="steps__col">
			<picture>
				<source srcset="./assets/images/webp/steps-img.webp" type="image/webp">
				<img src="./assets/images/steps-img.png" alt="фото" class="steps__img">
			</picture>
		</div>
	</div>
</section>

<section class="common">
	<div class="container common__wrap">
		<div class="common__col common__filter">
			<h2 class="section__title section__title_tail common__title">Типовые неисправности iPhone</h2>
			<div class="common__blocks">
				<div class="common__block">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block common__block_active">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
				<div class="common__block">
					<svg class="common__block-icon">
						<use xlink:href="./assets/stack/sprite.svg#battery"></use>
					</svg>
					<div class="common__block-text">
						<h4 class="common__block-title">Аккумулятор</h4>
						Замена аккумулятора
					</div>
				</div>
			</div>
		</div>
		<div class="common__col common__info">
			<p class="common__info-text">
				Из-за быстро разряжающегося аккумулятора приходится постоянно носись с собой PowerBank или бегать от розетки к розетке?
				Вероятно, ресурс вашей аккумуляторной батареи подошел к концу. Имейте в виду, что аккумуляторы современных телефонов
				рассчитаны на максимальный срок службы 2 года. По истечении этого срока, а в случае активной эксплуатации и раньше, должна
				быть произведена ее замена.
			</p>
			<div class="common__info-row">
				<div class="common__info-price">
					от <span class="text_accent text_bold">1 470 руб.</span>
				</div>
				<button class="callback-button common__info-button">Вызвать мастера</button>
			</div>
		</div>
	</div>
</section>

<section class="contacts">
	<div class="container contacts__wrap">
		<div class="contacts__block">
			<div class="section__title_alt contacts__block-title">
				Ремонт <span class="text_accent text_bold">iPhone</span> в
				<span class="line-break"></span>
                <?= $company_name ?>
			</div>
			<p class="contacts__block-text">
				Команда Apple Assist работает с 2009 года. Мы всегда делаем все возможносе, чтобы в случае неудачи вы могли недорого
				починить своё устройство. Мы любим технику Apple, но еще больше любим свою работу, поэтому всё делаем на совесть.
				<span class="line-break"></span>
				80% наших клиентов приходят по рекомендации от друзей.
			</p>

			<div class="contacts__block-worktime">
				12 сервисных центров в СПБ
				<span class="line-break"></span>
				Работаем с 8:00 до 23:00 <span class="text_accent text_bold">Без выходных</span>
			</div>

			<a href="tel: <?= $phone_link?>" class="contacts__block-phone"><?= $phone_format?></a>
			<button class="callback-button contacts__block-button">Вызвать мастера</button>
			<!--<ul class="contacts__block-list">
				<li class="contacts__block-list-item">
					<span class="text_bold">Адрес:</span> 190005, Санкт - Петербург, Московский проспект д.7 (ст. м. Садовая)
				</li>
				<li class="contacts__block-list-item">
					<span class="text_bold">Телефон:</span>
					<a href="tel: <? /*= $phone_link */ ?>" class="contacts__block-phone"><? /*= $phone_format */ ?></a>
				</li>
				<li class="contacts__block-list-item">
					<span class="text_bold">Время работы:</span>
					с 8:00 до 23:00 без выходных
				</li>
			</ul>-->
		</div>
	</div>

	<div id="map" class="contacts__map"></div>
</section>

<section class="faq">
	<div class="faq__bg"></div>
	<div class="container faq__wrap">
		<div class="faq__collage faq__collage_left">
			<svg class="faq__collage_left-question">
				<use xlink:href="./assets/stack/sprite.svg#question"></use>
			</svg>
		</div>
		<div class="faq__collage faq__collage_right">
			<svg class="faq__collage_right-message">
				<use xlink:href="./assets/stack/sprite.svg#chat"></use>
			</svg>
		</div>

		<h2 class="faq__title">Остались вопросы?</h2>
		<div class="faq__subtitle">
			Оставьте свой номер телефона.
			<span class="line-break"></span>
			Наш менеджер свяжется с вами через 2 минуты
		</div>
		<form action="#" method="POST" class="faq__form">
			<div class="form__inputs">
				<input type="text" class="form__input faq__form-input" placeholder="+7 (999) 999-99-99">
				<button class="callback-button form__button faq__form-button">Перезвоните мне</button>
			</div>
		</form>
	</div>
</section>

<footer class="footer">
	<div class="container footer__wrap">
		<div class="footer__col">
			<img src="./assets/svg/logo.svg" alt="logo" class="footer__logo">
			<div class="footer__billings">
				<img src="./assets/svg/visa.svg" alt="visa" class="footer__billing">
				<img src="./assets/svg/mastercard.svg" alt="mastercard" class="footer__billing">
				<img src="./assets/images/sber.png" alt="sberbank" class="footer__billing">
				<img src="./assets/images/rub.png" alt="cash" class="footer__billing">
			</div>
		</div>
		<nav class="footer__col footer__nav">
			<a href="#about" class="footer__nav-link">О нас</a>
			<a href="#prices" class="footer__nav-link">Цены</a>
			<a href="#faq" class="footer__nav-link">FAQ</a>
			<a href="#contacts" class="footer__nav-link">Контакты</a>
		</nav>
		<div class="footer__col footer__contacts">
			<a href="tel:<?= $phone_link ?>" class="footer__phone"><?= $phone_format ?></a>
			<div class="footer__worktime">C 8:00 до 23:00 без выходных</div>
		</div>
	</div>
	<div class="container footer__footnote">
		Компания <?= $company_name ?>. Все права защищены. Apple, Mac, Mac OS, MacBook, MacBook Pro, iPhone, iPad, iPad Air и их логотипы
		являются зарегистрированными товарными знаками Apple Inc. в США и других странах. Информация опубликованная на сайте не является
		публичной офертой, определяемой положениями Статьи 437 ГК РФ. Цены указаны за услугу, запчасти в эту стоимость не входят.
	</div>
</footer>

<script>
    ymaps.ready(init);

    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.76, 37.64],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 7
        });
    }
</script>
</body>
</html>