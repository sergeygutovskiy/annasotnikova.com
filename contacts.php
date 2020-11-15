<!DOCTYPE html>
<html>
<head>
	<title>Контакты</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/contacts.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<section class="contacts-container">
		<img class="contacts-logo" src="/imgs/logo.png">
	</section>

	<header class="contacts-container">
		<div class="container__title">
			<h2>Контакты</h2>
		</div>
	</header>

	<section class="contacts__content contacts-container">
		<div class="contacts__links">
			<div class="contacts__link">
				<span>instagram</span>
				<a href="/">@sotnikovaanna</a>
			</div>
			<div class="contacts__link">
				<span>vkontakte</span>
				<a href="/">/sotnikova28</a>
			</div>
			<div class="contacts__link">
				<span>e-mail</span>
				<a href="/">annasotnikova2803@gmail.com</a>
			</div>
		</div>
		<div class="contacts__footer">
			<div class="contacts__footer-mailing">
				<span class="contacts__footer-title">Подписаться на новости:</span>
				<form>
					<input class="contacts__footer-input" placeholder="e-mail">
					<button class="contacts__footer-button"></button>
				</form>
				<p class="contacts__footer-text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				</p>
			</div>
			<div class="contacts__footer-links">
				<div><a href="">Telegram </a></div>
				<div><a href="">whatsapp </a></div>
				<div><a href="">facebook </a></div>
				<div><a href="">youtube  </a></div>
			</div>
		</div>
	</section>

</body>
</html>