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
			<li class="nav-menu__list-item nav-menu__list-item--active">
				<a href="/">Главная</a>
			</li>
			<li class="nav-menu__list-item"><a href="/about.php">Об авторе</a></li>
			<li class="nav-menu__list-item"><a href="/books.php">Книги</a></li>
			<li class="nav-menu__list-item"><a href="/projects.php">Проекты</a></li>
			<li class="nav-menu__list-item"><a href="/blog.php">блог</a></li>
			<li class="nav-menu__list-item"><a href="/press.php">пресс-Кит</a></li>
			<li class="nav-menu__list-item"><a href="/contacts.php">контакты</a></li>
		</ul>
		<ul class="nav-menu__social">
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/inst.png"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/facebook.svg"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/vk.svg"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/wa.svg"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/youtube.svg"></a>
			</li>
			<li class="nav-menu__social-item">
				<a href=""><img src="/imgs/social/telegram.svg"></a>
			</li>
		</ul>
	</section>

	<!-- blur -->
	<div class="nav-blur"></div>
</nav>

<script>
	$(".nav__search a").click(function () {
		$(".nav__search-input").toggleClass("nav__search-input--active");
	});

	$(".nav__menu-button").click(function () {
		$(".nav-menu").toggleClass("nav-menu--active");
		$(".nav__menu-button").toggleClass("nav__menu-button--active");

		$("nav").toggleClass("nav_mobile--active");

		if ($(".nav-blur").hasClass("nav-blur--active"))
		{
			$(".nav-blur").removeClass("nav-blur--active");
			setTimeout(
				function() { $(".nav-blur").hide() }, 250
			);
		}
		else
		{
			$(".nav-blur").show();
			setTimeout(
				function() { $(".nav-blur").addClass("nav-blur--active") }, 5
			);
		}
	});

	/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
	var prevScrollpos = window.pageYOffset;
	
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;

		if (!$(".nav-blur").hasClass("nav-blur--active"))
		{
			if (prevScrollpos > currentScrollPos) 
			{
				$("nav").removeClass("nav--hidden");
			} 
			else 
			{
				$("nav").addClass("nav--hidden");
			}
		}

		prevScrollpos = currentScrollPos;
	}
</script>