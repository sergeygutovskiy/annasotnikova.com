<!DOCTYPE html>
<html>

<head>
	<title>Книги</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/books.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="books-container">
		<img class="books-logo" src="/imgs/logo.png">	
	</section>

	<header class="books-container">
		<div class="header__content">
			<div class="container__title">
				<h2>книги</h2>
			</div>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
		</div>
	</header>

	<section class="books-container">
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
				<p class="book__paragraph paragraph">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				</p>
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
				<p class="book__paragraph paragraph">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				</p>
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
				<p class="book__paragraph paragraph">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				</p>
			</article>
		</div>
	</section>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>