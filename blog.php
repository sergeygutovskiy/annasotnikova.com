<!DOCTYPE html>
<html>

<head>
	<title>Блог</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/blog.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="blog-container blog-logo-container">
		<img class="blog-logo" src="/imgs/logo.png">	
	</section>

	<header class="blog-container">
		<div class="header__content">
			<div class="container__title">
				<h2>Блог</h2>
			</div>
			<p class="paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
		</div>
	</header>

	<section class="blog-container">
		<div class="blog__content">
			<article class="blog-item">
				<a href="/article.php" 
				class="image-container image-container_8_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</a>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info paragraph">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<a class="blog-item__link" href="/article.php">подробнее</a>
			</article>
			<article class="blog-item">
				<a href="/article.php" 
				class="image-container image-container_8_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</a>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info paragraph">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<a class="blog-item__link" href="/article.php">подробнее</a>
			</article>
			<article class="blog-item">
				<a href="/article.php" 
				class="image-container image-container_8_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</a>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info paragraph">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<a class="blog-item__link" href="/article.php">подробнее</a>
			</article>
			<article class="blog-item">
				<a href="/article.php" 
				class="image-container image-container_8_5">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</a>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info paragraph">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<a class="blog-item__link" href="/article.php">подробнее</a>
			</article>
		</div>
	</section>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>