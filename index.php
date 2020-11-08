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
		<div class="container container_md"><h2>Анонсы</h2></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="announcements__image-container">
						<img src="/imgs/announcements-example.jpg">
					</div>
					<span class="announcements__category">Онлайн-семинар</span>
					<span class="announcements__title">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</span>
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

	<section class="books">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<h2>Учебник официанта</h2>
							<span class="book__author">Анна Сотникова</span>
							<span class="book__price">420 ₽</span>
							<p>
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu">
							<div class="book__menu-item">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</div>
							<div class="book__menu-item">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</div>
							<div class="book__menu-item">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</div>
						</div>
					</div>
				</article>
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<h2>Учебник официанта</h2>
							<span class="book__author">Анна Сотникова</span>
							<span class="book__price">420 ₽</span>
							<p>
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu">
							<div class="book__menu-item">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</div>
							<div class="book__menu-item">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</div>
							<div class="book__menu-item">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>		
	</section>

	<script>
		let books = new Swiper(".books .swiper-container", {
			slidesPerView: 1,
			centeredSlides: true
		});
	</script>

	<section class="projects">
		<div class="container container_md"><h2>Проекты</h2></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
				<article class="swiper-slide project">
					<img src="/imgs/announcements-example.jpg">
					<div class="project__panel">
						<span class="project__title">Sota school</span>
						<p class="project__desc">
							Ut enim ad minim veniam quis
						</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<script>
		let projects = new Swiper(".projects .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 32,
			initialSlide: 1
		});
	</script>

	<section class="blog container container_md">
		<h2>Блог</h2>
		<div class="blog__content">
			<article class="blog-item">
				<div class="blog-item__image-container">
					<img src="/imgs/announcements-example.jpg">
				</div>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
			</article>
			<article class="blog-item">
				<div class="blog-item__image-container">
					<img src="/imgs/announcements-example.jpg">
				</div>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
			</article>
			<article class="blog-item">
				<div class="blog-item__image-container">
					<img src="/imgs/announcements-example.jpg">
				</div>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
			</article>
			<article class="blog-item">
				<div class="blog-item__image-container">
					<img src="/imgs/announcements-example.jpg">
				</div>
				<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
				<p class="blog-item__info">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
			</article>
		</div>
	</section>

	<section class="products container container_md">
		<h2>Продукты</h2>
		<div class="products__content">
			<div class="products__images swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="/imgs/announcements-example.jpg"></div>
					<div class="swiper-slide"><img src="/imgs/sotnikova/standing.jpg"></div>
					<div class="swiper-slide"><img src="/imgs/announcements-example.jpg"></div>
				</div>
			</div>
			<div class="products__info swiper-container">
				<div class="swiper-wrapper">								
					<article class="product swiper-slide">
						<span class="product__title">SotA School</span>
						<p class="product__info">
							Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
						</p>
					</article>
					<article class="product swiper-slide">
						<span class="product__title">SotA School</span>
						<p class="product__info">
							Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school чдающие первоклассный сервис. Запуск школы в 2021 г.
						</p>
					</article>
					<article class="product swiper-slide">
						<span class="product__title">SotA School</span>
						<p class="product__info">
							Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
						</p>
					</article>
				</div>
			</div>
		</div>
		<div class="pagination">
			<button class="pagination__button pagination__button--prev" 
			onclick="products_images_slide_prev()"></button>
			<div class="pagination__info"></div>
			<button class="pagination__button pagination__button--next"
			onclick="products_images_slide_next()"></button>				
		</div>
	</section>

	<script>
		let products_images = new Swiper(".products__images", {
			slidesPerView: 1,
			autoHeight: true,
			pagination: {
				el: '.products .pagination__info',
				type: 'custom',
				renderCustom: function (swiper, current, total) {
					return '<span>' + 1 + '</span>' 
						+ '<div></div>' 
						+ '<span>' + total + '</span>';
				}
			}
		});

		let products_info = new Swiper(".products__info", {
			slidesPerView: 1,
			effect: 'fade',
			fade: { crossFade: true }
		});

		function products_images_slide_next()
		{
			products_images.slideNext();
			products_info.slideNext();
		}

		function products_images_slide_prev()
		{
			products_images.slidePrev();
			products_info.slidePrev();
		}
	</script>

	<section class="contacts container container_md">
		<div class="contacts__container">
			<div class="contacts__info">
				<h2>индивидуальные <br> и корпоративные консультации</h2>
				<p>
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