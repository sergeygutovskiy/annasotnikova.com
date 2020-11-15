<!DOCTYPE html>
<html>

<head>
	<title>Пресс-Кит</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/press.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="press-container">
		<img class="press-logo" src="/imgs/logo.png">	
	</section>

	<header class="press-container">
		<div class="header__content">
			<div class="container__title">
				<h2>Пресс-Кит</h2>
			</div>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
		</div>
	</header>

	<section class="press-container press__tabs-navigation">
		<div class="tabs-navigation">
			<div class="tabs-navigation__content">
				<a class="tabs-navigation__item" href="#" data-count="21">все</a>
				<a class="tabs-navigation__item" href="#" data-count="5">статьи</a>
				<a class="tabs-navigation__item" href="#" data-count="15">рецензии</a>
				<a class="tabs-navigation__item" href="#" data-count="6">Отзывы</a>
				<a class="tabs-navigation__item" href="#" data-count="10">фотографии</a>
			</div>
		</div>
	</section>

	<section class="press-container">
		<div class="press__content press__content--active" data-category="all">
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
		</div>
		<div class="press__content" data-category="articles">
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
			<article class="press-item">
				<div class="press-item__image-container">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</div>
				<div class="press-item__panel">
					<span class="press-item__category">статья</span>
					<a href="/" class="press-item__title">Lorem ipsum dolor</a>
					<span class="press-item__date">24 сентября, 2020</span>
				</div>
			</article>
		</div>
	</section>
</body>
</html>