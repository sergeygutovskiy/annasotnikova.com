<!DOCTYPE html>
<html>

<head>
	<title>Проекты</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/projects.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="projects-container projects-logo-container">
		<img class="projects-logo" src="/imgs/logo.png">	
	</section>

	<header class="projects-container">
		<div class="header__content">
			<div class="container__title">
				<h2>проекты</h2>
			</div>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
		</div>
	</header>

	<section class="projects-container">
		<div class="projects">
			<article class="project">
				<a class="project__image-container">
					<div class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</a>
				<div class="project__info">
					<a href="/article.php" class="project__title">Дети на кухне</a>
					<p class="project__paragraph paragraph">
						Кулинарная школа для детей, где они
						учатся готовить круче, чем взрослые
					</p>
					<div class="project__link container__title">
						<div><a href="/article.php">узнать больше</a></div>
					</div>
				</div>
			</article>
			<article class="project">
				<a class="project__image-container">
					<div class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</a>
				<div class="project__info">
					<a href="/article.php" class="project__title">Дети на кухне</a>
					<p class="project__paragraph paragraph">
						Кулинарная школа для детей, где они
						учатся готовить круче, чем взрослые
					</p>
					<div class="project__link container__title">
						<div><a href="/article.php">узнать больше</a></div>
					</div>
				</div>
			</article>
			<article class="project">
				<a class="project__image-container">
					<div class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
				</a>
				<div class="project__info">
					<a href="/article.php" class="project__title">Дети на кухне</a>
					<p class="project__paragraph paragraph">
						Кулинарная школа для детей, где они
						учатся готовить круче, чем взрослые
					</p>
					<div class="project__link container__title">
						<div><a href="/article.php">узнать больше</a></div>
					</div>
				</div>
			</article>
		</div>
	</section>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>