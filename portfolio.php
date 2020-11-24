<!DOCTYPE html>
<html>

<head>
	<title>Портфель эксперта</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/portfolio.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="portfolio-container portfolio-logo-container">
		<img class="portfolio-logo" src="/imgs/logo.png">	
	</section>

	<header class="portfolio-container">
		<div class="header__content">
			<div class="container__title">
				<h2>Портфель эксперта</h2>
			</div>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
		</div>
	</header>

	<section class="portfolio-container portfolio__tabs-navigation">
		<div class="tabs-navigation">
			<div class="tabs-navigation__content">
				<a class="tabs-navigation__item"
				data-category="all"
				data-count="21">все</a>
				<a class="tabs-navigation__item"
				data-category="lists"
				data-count="5">Чек-листы</a>
				<a class="tabs-navigation__item"
				data-category="documents"
				data-count="15">Документы</a>
				<a class="tabs-navigation__item"
				data-category="cources"
				data-count="6">Курсы</a>
				<a class="tabs-navigation__item"
				data-category="what"
				data-count="10">Консультации</a>
				<a class="tabs-navigation__item"
				data-category="everydays"
				data-count="13">Ежедневники</a>
			</div>
		</div>
	</section>

	<section class="portfolio-container">
		<div class="portfolio">
			<div class="portfolio__content" data-category="all">
				<article class="portfolio-item">
					<div 
					class="portfolio-item__image-container image-container image-container_1_1 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<a class="portfolio-item__button" href="/book.php">купить</a>
					</div>
					<div class="portfolio-item__primary-info">
						<a href="/book.php" class="portfolio-item__title">Книга официанта</a>
						<span class="portfolio-item__price">420 ₽</span>
					</div>
					<p class="portfolio-item__paragraph paragraph">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</p>
				</article>
				<article class="portfolio-item">
					<div 
					class="portfolio-item__image-container image-container image-container_1_1 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<a class="portfolio-item__button" href="/book.php">купить</a>
					</div>
					<div class="portfolio-item__primary-info">
						<a href="/book.php" class="portfolio-item__title">
							Книга официанта
							Книга официанта
						</a>
						<span class="portfolio-item__price">420 ₽</span>
					</div>
					<p class="portfolio-item__paragraph paragraph">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</p>
				</article>
				<article class="portfolio-item">
					<div 
					class="portfolio-item__image-container image-container image-container_1_1 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="portfolio-item__category">скоро в продаже</span>
					<div class="portfolio-item__primary-info">
						<span  class="portfolio-item__title">
							Книга официанта
						</span>
					</div>
					<p class="portfolio-item__paragraph paragraph">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</p>
				</article>
			</div>
			<div class="portfolio__content" data-category="lists">
			</div>
			<div class="portfolio__content" data-category="documents">
			</div>
			<div class="portfolio__content" data-category="cources">
			</div>
			<div class="portfolio__content" data-category="what">
			</div>
			<div class="portfolio__content" data-category="everydays">
			</div>		
		</div>
	</section>

	<script>
		$(".tabs-navigation__item").eq(0).addClass("tabs-navigation__item--active");
		$(".portfolio__content").eq(0).addClass("portfolio__content--active");
		$(".portfolio__content").eq(0).css("display", "flex");

		$(".tabs-navigation__item").click(function() {
			let active = $(".portfolio__content--active");
			let current = $(this);

			active.removeClass("portfolio__content--active")
			$(".tabs-navigation__item--active").removeClass("tabs-navigation__item--active");

			$(".tabs-navigation__item[data-category='" 
				+ current.attr("data-category") + "']")
				.addClass("tabs-navigation__item--active");

			setTimeout(function() {
				active.hide();
				$(".portfolio__content[data-category='" + current.attr("data-category") + "']")
					.css("display", "flex");
			}, 350);

			setTimeout(function() {
				$(".portfolio__content[data-category='" + current.attr("data-category") + "']")
					.addClass("portfolio__content--active");
			}, 380);
		});
	</script>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>