<!DOCTYPE html>
<html>
<head>
	<title>Книга</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/book.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>
	
	<header>
		<div class="header__image-container">
			<img class="book-logo" src="/imgs/logo.png">	
			<div class="image-container image-container_4_5">
				<img class="cover-image" src="/imgs/announcements-example.jpg">
			</div>
		</div>
		<div class="header__info">
			<div class="container__title">
				<h2>Книга официанта</h2>
			</div>
			<div class="book-types-list">
				<ul class="book-types-list__content">
					<li class="book-types-list__item book-types-list__item--active">
						<span>твердая обложка </span>
					</li>
					<li class="book-types-list__item">
						<span>мягкая обложка  </span>
					</li>
					<li class="book-types-list__item">
						<span>цифровая книга  </span>
					</li>
					<li class="book-types-list__item">
						<span>аудиокнига      </span>
					</li>
				</ul>				
			</div>
			<p class="header__paragraph paragraph">
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			</p>
			<div class="header__footer">
				<button class="header__button_buy">
					<span>купить в один клик</span>
					<span>420 ₽</span>
				</button>
				<button class="header__button_read">
					<i class="fal fa-book"></i>
					<span>Читать фрагмент</span>
				</button>
			</div>
		</div>
	</header>

	<script>
		$(".book-types-list__item").click(function() {
			$(".book-types-list__item--active").removeClass("book-types-list__item--active");
			$(this).toggleClass("book-types-list__item--active");
		});
	</script>

	<section class="params">
		<div class="params__content">
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
			<div class="param">
				<span class="param__name">Страниц</span>
				<span class="param__value">300</span>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="about__image-container">
			<div class="image-container image-container_4_5">
				<img class="cover-image" src="/imgs/announcements-example.jpg">
			</div>
		</div>
		<div class="about__info">
			<div class="container__title">
				<h2>
					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”
				</h2>
			</div>
			<span class="about__subtitle">THE NEW YORK TIMES</span>
			<p class="about__paragraph paragraph">
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
			</p>
			<p class="about__paragraph paragraph">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
			</p>
		</div>
	</section>

	<section class="gallery">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide gallery__image">
					<div class="image-container image-container_2_1">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="swiper-slide gallery__image">
					<div class="image-container image-container_2_1">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="swiper-slide gallery__image">
					<div class="image-container image-container_2_1">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="swiper-slide gallery__image">
					<div class="image-container image-container_2_1">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
			</div>
		</div>
		<div class="gallery__pagination-container">
			<div class="pagination">
				<button class="pagination__button pagination__button--prev"></button>
				<div class="pagination__info"></div>
				<button class="pagination__button pagination__button--next"></button>
			</div>
		</div>
	</section>

	<script>
		let gallery = new Swiper(".gallery .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 32,
			autoHeight: true,
			centeredSlides: false,
			navigation: {
				nextEl: '.gallery .pagination__button--next',
				prevEl: '.gallery .pagination__button--prev'
			},
			pagination: {
				el: '.gallery .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			},
			breakpoints: {
				769: {
					spaceBetween: 64,
					centeredSlides: true
				}
			}
		});
	</script>

	<section class="preorder">
		<div class="preorder__left">
			<span class="preorder__subtitle paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
			</span>
			<p class="preorder__paragraph paragraph">
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
			</p>
		</div>
		<div class="preorder__right">
			<span class="preorder__title">Предзаказ книги</span>
			<form class="preorder__form">
				<input placeholder="Имя">
				<input placeholder="Контактный телефон">
				<input placeholder="Почта">
				<textarea placeholder="Комментарий"></textarea>
				<button>отправить</button>
			</form>
		</div>
	</section>

	<section class="books">
		<div class="books__title container__title">
			<h2>Рекомендованные товары</h2>
		</div>
		<div class="books__content">
			<article class="book">
				<div class="books__image-container image-container image-container_4_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
					<a class="book__button" href="">купить</a>
				</div>
				<div class="book__primary-info">
					<span class="book__title">Книга официанта</span>
					<span class="book__price">420 ₽</span>
				</div>
			</article>
			<article class="book">
				<div class="books__image-container image-container image-container_4_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
					<a class="book__button" href="">купить</a>
				</div>
				<div class="book__primary-info">
					<span class="book__title">Книга официанта</span>
					<span class="book__price">420 ₽</span>
				</div>
			</article>
			<article class="book">
				<div class="books__image-container image-container image-container_4_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
					<a class="book__button" href="">купить</a>
				</div>
				<div class="book__primary-info">
					<span class="book__title">Книга официанта</span>
					<span class="book__price">420 ₽</span>
				</div>
			</article>
			<article class="book">
				<div class="books__image-container image-container image-container_4_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
					<a class="book__button" href="">купить</a>
				</div>
				<div class="book__primary-info">
					<span class="book__title">Книга официанта</span>
					<span class="book__price">420 ₽</span>
				</div>
			</article>
		</div>
	</section>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>