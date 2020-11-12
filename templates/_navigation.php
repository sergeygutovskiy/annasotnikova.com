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
				$('html, body').css({ "overflow-y": 'hidden', height: 'auto' });
			else
				$('html, body').css({ "overflow-y": 'auto', height: 'auto' });
		// }
	});
</script>