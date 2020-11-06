<!DOCTYPE html>
<html>

<head>
	<title>Главная</title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<!-- swiper -->
	<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- font-awesome -->
	<link rel="stylesheet" href="fonts/font-awesome/css/all.css">
	<!-- montserrat -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/pages/index.css">
</head>
<body>
	<!-- <div class="body-blur"></div> -->

	<nav>
		<section class="container nav__container">
			<div class="nav__language">
				<a href="/" class="active">RU</a>
				<a href="/">EN</a>
			</div>
			<div class="nav__location">
				<i class="fal fa-map-marker-alt"></i>
				Санкт-Петербург
			</div>
			<div class="nav__right">
				<div class="nav__search">
					<input type="text" class="nav__search-input" placeholder="Поиск">
					<a href="#"><i class="fal fa-search"></i></a>
				</div>
				<div class="nav__account">
					<a href="#"><img src="/imgs/account.jpg"></a>
				</div>
				<button class="nav__menu-button">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</section>
	</nav>

	<section class="nav-menu">
		<ul class="nav-menu__list">
			<li class="nav-menu__list-item nav-menu__list-item--active"><a href="">Главная</a></li>
			<li class="nav-menu__list-item"><a href="">Об авторе</a></li>
			<li class="nav-menu__list-item"><a href="">Книги</a></li>
			<li class="nav-menu__list-item"><a href="">Проекты</a></li>
			<li class="nav-menu__list-item"><a href="">блог</a></li>
			<li class="nav-menu__list-item"><a href="">пресс-Кит</a></li>
			<li class="nav-menu__list-item"><a href="">пресс-Кит</a></li>
		</ul>
		<ul class="nav-menu__social">
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
		</ul>
	</section>

	<script>
		$(".nav__search a").click(function () {
			$(".nav__search-input").toggleClass("nav__search-input--active");
		});

		$(".nav__menu-button").click(function () {
			$(".nav-menu").toggleClass("nav-menu--active");

			if (window.innerWidth <= 768)
			{
				$("nav").toggleClass("nav_mobile--active");

				if ($("nav").hasClass("nav_mobile--active"))
					$('html, body').css({ overflow: 'hidden', height: '100%' });
				else
					$('html, body').css({ overflow: 'auto', height: 'auto' });
			}
		});
	</script>

	<section class="about container">
		<div class="about__image-container">
			<img src="/imgs/sotnikova/standing.jpg">
		</div>
		<div class="about__content">
			<h2>обо мне</h2>
			<span class="about__name">Сотникова Анна</span>
			<p>
				Бизнес-мама, успешно сочетающая воспитание двоих детей и управление бизнесом. 
			</p>
			<p>
				Эффективный практик с 20-летним стажем в ресторанной сфере, основатель школы ресторанного менеджмента SotA School, создатель и идейный вдохновитель кулинарной онлайн и офлайн школы для детей «Дети на кухне». Прошла путь от официанта до генерального директора восточного направления ресторанов крупнейшей группы компаний Ginza Project. На протяжении 15 лет являлась младшим партнёром ресторанов под международным знаком качества Ginza Project, где управляла 20 крупными ресторанами в Санкт-Петербурге и занималась обучением персонала. Открыла 28 ресторанов с разной концепцией. 
			</p>
			<a class="link" href="/">Узнать больше</a>
		</div>
	</section>

	<section class="announcements">
		<div class="container"><h2>Анонсы</h2></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">Ресторанный бизнес 2020: новая реальность</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">Ресторанный бизнес 2020: новая реальность</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">Ресторанный бизнес 2020: новая реальность</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">Ресторанный бизнес 2020: новая реальность</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">Ресторанный бизнес 2020: новая реальность</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
			</div>
		</div>
	</section>

	<script>
		let announcements = new Swiper(".swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 32,
		});
	</script>

</body>