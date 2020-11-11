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
	<!-- cormorant -->
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/pages/index.css">
</head>
<body>
	<!-- <div class="body-blur"></div> -->

	<script>
		function custom_pagination_render (swiper, current, total) {
			return '<span>' + current + '</span>' 
				+ '<div></div>' 
				+ '<span>' + total + '</span>';
		}
	</script>

	<!-- navigation menu -->
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

	<!-- navigation -->
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
					<a href="#"><img src="/imgs/pupa.png"></a>
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

	<script>
		$(".nav__search a").click(function () {
			$(".nav__search-input").toggleClass("nav__search-input--active");
		});

		$(".nav__menu-button").click(function () {
			$(".nav-menu").toggleClass("nav-menu--active");
			$(".nav__menu-button").toggleClass("nav__menu-button--active");

			// if (window.innerWidth <= 768)
			// {
				$("nav").toggleClass("nav_mobile--active");

				if ($("nav").hasClass("nav_mobile--active"))
					$('html, body').css({ "overflow-y": 'hidden', height: '100%' });
				else
					$('html, body').css({ "overflow-y": 'auto', height: 'auto' });
			// }
		});
	</script>

	<!-- header banner -->
	<header class="container">
		<div class="header__content">
			<div class="header__background-gradient"></div>
			<img class="header__logo" src="/imgs/logo.png">
			<div class="header__text">
				<span>Я ЗНАЮ</span>
				<span>как зарабатывать <br> на ресторанах</span>
				<div></div><a class="link header__link" href="/">Узнать больше</a>
			</div>
		</div>
	</header>

	<!-- about -->
	<section class="about">
		<div class="about__container container">
			<div class="about__image-container">
				<img src="/imgs/sotnikova/standing.jpg">
			</div>
			<div class="about__content">
				<div class="container__title">
					<h2>обо мне</h2>
				</div>
				<span class="about__name">Сотникова Анна</span>
				<p>
					Бизнес-мама, успешно сочетающая воспитание двоих детей и управление бизнесом. 
				</p>
				<p class="paragraph">
					Эффективный практик с 20-летним стажем в ресторанной сфере, основатель школы ресторанного менеджмента SotA School, создатель и идейный вдохновитель кулинарной онлайн и офлайн школы для детей «Дети на кухне». Прошла путь от официанта до генерального директора восточного направления ресторанов крупнейшей группы компаний Ginza Project. На протяжении 15 лет являлась младшим партнёром ресторанов под международным знаком качества Ginza Project, где управляла 20 крупными ресторанами в Санкт-Петербурге и занималась обучением персонала. Открыла 28 ресторанов с разной концепцией. 
				</p>
				<a class="link" href="/">Узнать больше</a>
			</div>
		</div>
	</section>

	<!-- announcements -->
	<section class="announcements">
		<div class="container container_md">
			<div class="container__title">
				<h2>Анонсы</h2>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<div class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
			</div>
		</div>
		<div class="announcements__buttons container container_md">
			<div class="announcements__button announcements__button--prev"></div>
			<div class="announcements__button announcements__button--next"></div>
		</div>
	</section>

	<script>
		let announcements = new Swiper(".announcements .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 16,
			navigation: {
				nextEl: '.announcements__button--next',
				prevEl: '.announcements__button--prev'
			},
			breakpoints: {
				769: {
					spaceBetween: 32,
				}
			}
		});
	</script>

	<!-- books -->
	<section class="books">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<div class="container__title swiper-no-swiping">
								<h2>Учебник официанта</h2>
							</div>
							<span class="book__author swiper-no-swiping">Анна Сотникова</span>
							<span class="book__price swiper-no-swiping">420 ₽</span>
							<p class="paragraph swiper-no-swiping">
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu swiper-no-swiping">
							<a class="book__menu-item" href="">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</a>
						</div>
					</div>
				</article>
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<div class="container__title swiper-no-swiping">
								<h2>Учебник официанта</h2>
							</div>
							<span class="book__author swiper-no-swiping">Анна Сотникова</span>
							<span class="book__price swiper-no-swiping">420 ₽</span>
							<p class="paragraph swiper-no-swiping">
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu swiper-no-swiping">
							<a class="book__menu-item" href="">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</a>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="pagination pagination_center">
			<button class="pagination__button pagination__button--prev"></button>
			<div class="pagination__info"></div>
			<button class="pagination__button pagination__button--next"></button>
		</div>
	</section>

	<script>
		let books = new Swiper(".books .swiper-container", {
			slidesPerView: 1,
			centeredSlides: true,
			navigation: {
				nextEl: '.books .pagination__button--next',
				prevEl: '.books .pagination__button--prev'
			},
			pagination: {
				el: '.books .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			}
		});
	</script>

	<!-- projects -->
	<section class="projects">
		<div class="container container_md">
			<div class="container__title">
				<h2>Проекты</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<div class="project__background"></div>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="projects__buttons container container_md">
			<div class="projects__button projects__button--prev"></div>
			<div class="projects__button projects__button--next"></div>
		</div>
	</section>

	<script>
		let projects = new Swiper(".projects .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 32,
			initialSlide: 1,
			navigation: {
				nextEl: '.projects__button--next',
				prevEl: '.projects__button--prev'
			},
		});
	</script>

	<!-- blog -->
	<section class="blog">
		<div class="container container_md">
			<div class="container__title">
				<h2>Блог</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
			<div class="blog__content">
				<article class="blog-item">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/">подробнее</a>
				</article>
				<article class="blog-item">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/">подробнее</a>
				</article>
				<article class="blog-item">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/">подробнее</a>
				</article>
				<article class="blog-item">
					<div class="image-container image-container_8_5">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</div>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/">подробнее</a>
				</article>
			</div>
		</div>
	</section>

	<!-- products -->
	<section class="products">
		<div class="container container_md">
			<div class="container__title">
				<h2>Продукты</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
		</div>
		<div class="products__content">
			<div class="swiper-container">
				<div class="swiper-wrapper">								
					<article class="swiper-slide">
						<div class="product">
							<div class="product__image-container">
								<div 
									class="image-container image-container_8_5 zoomable-image-container">
									<img class="cover-image" src="/imgs/announcements-example.jpg">
								</div>
							</div>
							<div class="product__info">
								<span class="product__title swiper-no-swiping">SotA School</span>
								<p class="product__text paragraph swiper-no-swiping">
									Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
								</p>							
							</div>							
						</div>
					</article>
					<article class="swiper-slide">
						<div class="product">
							<div class="product__image-container">
								<div class="image-container image-container_8_5 zoomable-image-container">
									<img class="cover-image" src="/imgs/announcements-example.jpg">
								</div>
							</div>
							<div class="product__info">
								<span class="product__title swiper-no-swiping">SotA School</span>
								<p class="product__text paragraph swiper-no-swiping">
									Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
								</p>							
							</div>							
						</div>
					</article>
				</div>				
			</div>
		</div>
		<div class="products__pagination-container">
			<div class="pagination">
				<button class="pagination__button pagination__button--prev"></button>
				<div class="pagination__info"></div>
				<button class="pagination__button pagination__button--next"></button>
			</div>
		</div>
	</section>

	<script>
		let products = new Swiper(".products .swiper-container", {
			slidesPerView: 1,
			// simulateTouch: false,
			// centeredSlides: true,
			autoHeight: true,
			navigation: {
				nextEl: '.products .pagination__button--next',
				prevEl: '.products .pagination__button--prev'
			},
			pagination: {
				el: '.products .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			}
		});
	</script>

	<!-- reviews -->
	<section class="reviews">
		<div class="container container_md">
			<div class="container__title">
				<h2>Отзывы</h2>
			</div>
		</div>	
		<div class="reviews__content">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
				</div>
			</div>
		</div>	
		<div class="pagination pagination_center">
			<button class="pagination__button pagination__button--prev"
			onclick="move_reviews_prev()"></button>
			<div class="pagination__info"></div>
			<button class="pagination__button pagination__button--next"
			onclick="move_reviews_next()"></button>
		</div>
	</section>

	<script>
		let reviews = new Swiper(".reviews .swiper-container", {
			slidesPerView: 1,
			autoHeight: true,
			pagination: {
				el: '.reviews .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			},
			breakpoints: {
				1025: {
					slidesPerView: 2,
					pagination: {
						el: '.reviews .pagination__info',
						type: 'custom',
						renderCustom: function custom_pagination_render (swiper, current, total) {
							return '<span>' + (Math.floor(current / 2) + 1) + '</span>' 
								+ '<div></div>' 
								+ '<span>' + (Math.floor(total / 2) + 1) + '</span>';
						} 
					}
				}
			}
		});

		function move_reviews_next()
		{
			if (window.innerWidth > 1024)
				reviews.slideTo(reviews.activeIndex + 2);
			else
				reviews.slideTo(reviews.activeIndex + 1);
		}

		function move_reviews_prev()
		{
			if (window.innerWidth > 1024)
				reviews.slideTo(reviews.activeIndex - 2);
			else
				reviews.slideTo(reviews.activeIndex - 1);
		}
	</script>

	<!-- contacts -->
	<section class="contacts container container_md">
		<div class="contacts__container">
			<div class="contacts__info">
				<div class="container__title">
					<h2>индивидуальные <br> и корпоративные консультации</h2>
				</div>
				<p class="paragraph">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
			<form class="contacts__form">
				<input placeholder="Имя">
				<input placeholder="Фамилия">
				<input placeholder="Контактный телефон">
				<input placeholder="Почта">
				<button>Отправить</button>
			</form>			
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">			
			<div class="footer__content">
				<div class="footer__left">
					<ul>
						<li><a href="">Главная</a></li>
						<li><a href="">Об авторе</a></li>
						<li><a href="">Книги</a></li>
						<li><a href="">Проекты</a></li>
					</ul>
					<ul>
						<li><a href="">Блог</a></li>
						<li><a href="">Пресса</a></li>
						<li><a href="">Контакты</a></li>
					</ul>
				</div>
				<div class="footer__center">
					<a class="footer__number" href="">+7 (900) 000-00-00</a>
					<a class="footer__email" href="">annasotnikova2803@gmail.com</a>
					<span class="footer__social-label">Социальные сети:</span>
					<div class="footer__social-links">
						<a href=""><img src="/imgs/social/inst.png"></a>
						<a href=""><img src="/imgs/social/inst.png"></a>
						<a href=""><img src="/imgs/social/inst.png"></a>
						<a href=""><img src="/imgs/social/inst.png"></a>
						<a href=""><img src="/imgs/social/inst.png"></a>
						<a href=""><img src="/imgs/social/inst.png"></a>
					</div>
				</div>
				<div class="footer-mailing">
					<span class="footer-mailing__title">Подписаться на новости:</span>
					<form>
						<input class="footer-mailing__input" placeholder="e-mail">
						<button class="footer-mailing__button"></button>
					</form>
					<p class="footer-mailing__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					</p>
				</div>
			</div>
		</div>
	</footer>

</body>