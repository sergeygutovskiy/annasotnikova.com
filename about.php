<!DOCTYPE html>
<html>

<head>
	<title>Об авторе</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/about.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- logo -->
	<section class="about-container about-logo-container">
		<img class="about-logo" src="/imgs/logo.png">	
	</section>

	<header class="about-container">
		<div class="header__content">
			<div>
				<div class="container__title">
					<h2>Об авторе</h2>
				</div>
				<p class="paragraph">
					Бизнес-мама, успешно сочетающая воспитание двоих детей и управление бизнесом.
					Эффективный практик с 20-летним стажем в ресторанной сфере, основатель школы ресторанного
					менеджмента SotA School, создатель и идейный вдохновитель кулинарной онлайн и офлайн
					школы для детей «Дети на кухне». 
				</p>				
			</div>
			<div class="header__image-container">
				<div class="image-container image-container_2_3">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</div>				
			</div>
		</div>
	</header>

	<section class="about-container">
		<div class="about-text-1">
			<div class="about-text-1__image-container">
				<div class="image-container image-container_2_3">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</div>				
				<span class="about-text-1__title">Анна Сотникова</span>
			</div>
			<div class="about-text-1__info">
				<p class="paragraph">
					Прошла путь от официанта до генерального директора восточного направления ресторанов крупнейшей группы компаний Ginza Project. 
				</p>
				<p class="paragraph">
					На протяжении 15 лет являлась младшим партнёром ресторанов под международным знаком качества Ginza Project, 
					где управляла 20 крупными ресторанами в Санкт-Петербурге 
					и занималась обучением персонала. Открыла 28 ресторанов 
					с разной концепцией. Закончила факультет управления персоналом Северо-Западной академии госслужбы. 				
				</p>
			</div>			
		</div>
	</section>

	<section class="about-container">
		<div class="about-text-2">
			<div class="about-text-2__info">
				<p class="paragraph">
					Карьерный коуч с дипломом международного образца. Спикер более 100 крупнейших всероссийских конференций, форумов и круглых столов для владельцев и сотрудников ресторанного бизнеса, организатор двухдневной деловой программы ExpoHoreca 2020. 
				</p>
				<p class="paragraph">
					Неоднократно выступала членом жюри городских конкурсов профессий в ресторанной сфере. Спикер студенческого экономического форума 2019 Санкт-Петербургского Политехнического университета. Автор более 20 публикаций в онлайн и офлайн СМИ, в частности публиковалась в таких издания, как FoodService, Restoclub, «Коммерсантъ», «Деловой Петербург», «Эксперт».
				</p>
			</div>				
			<div class="about-text-2__image-container">
				<div class="about-text-2__image-container-container">
					<img class="cover-image" src="/imgs/announcements-example.jpg">
				</div>				
			</div>		
		</div>
	</section>

	<section class="about-container accordeon">
		<div class="accordeon__container-title container__title">
			<h2>Ключевые компетенции и темы публичных выступлений</h2>
		</div>		
		<section class="accordeon__content">
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(0)">
					<span>Создание эффективной команды</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							Начни с себя: как стать примером для своего персонала
						</li>
						<li class="accordeon__list-item">
							Управляющий рестораном: правая рука или совладелец?
						</li>
						<li class="accordeon__list-item">
							Методика работы с линейным персоналом
						</li>
						<li class="accordeon__list-item">
							Как построить работу с менеджерами
						</li>
						<li class="accordeon__list-item">
							Конфликтология: поиск золотой середины и принятие верного для бизнеса решения
						</li>
					</ul>
				</div>
			</div>
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(1)">
					<span>Как открыть ресторан с нуля</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							От идеи до реализации: с чего начать?
						</li>
						<li class="accordeon__list-item">
							Что нужно для открытия ресторана?
						</li>
						<li class="accordeon__list-item">
							Путь от стройки до первого гостя – к чему нужно быть готовым?
						</li>
						<li class="accordeon__list-item">
							Выбор подрядчиков и построение работы с ними
						</li>
						<li class="accordeon__list-item">
							Детали: как «вкусно» оформить ресторан?
						</li>
						<li class="accordeon__list-item">
							Разработка меню: основные критерии при создании
						</li>
					</ul>
				</div>
			</div>
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(2)">
					<span>Прибыль</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							Что такое прибыль и из чего она состоит?
						</li>
						<li>
							Как грамотно планировать бюджет?
						</li>
						<li class="accordeon__list-item">
							От чего нужно отталкиваться при управлении бюджетом?
						</li>
						<li class="accordeon__list-item">
							Влияние сезонности на планирование бюджета
						</li>
						<li class="accordeon__list-item">
							На чём можно и на чём нельзя экономить?
						</li>
						<li class="accordeon__list-item">
							Как повышать выручку каждый месяц?
						</li>
						<li class="accordeon__list-item">
							Инструменты и способы для повышения выручки
						</li>
						<li class="accordeon__list-item">
							Управленческий отчёт: основные статьи, как с ними работать?
						</li>
						<li class="accordeon__list-item">
							План бюджета и Sale Day: научись работать сам и обучи сотрудников
						</li>
					</ul>
				</div>
			</div>
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(3)">
					<span>Управление сетевыми ресторанами</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							Путь от официанта до младшего партнёра по бизнесу: личный опыт
						</li>
						<li class="accordeon__list-item">
							Как управлять одновременно 17 проектами и все успевать ☺
						</li>
						<li class="accordeon__list-item">
							Сложность в управлении сетевыми объектами
						</li>
						<li class="accordeon__list-item">
							Как создать уникальный продукт, когда ты сетевик?
						</li>
					</ul>
				</div>
			</div>
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(4)">
					<span>Обучение управленческого персонала</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							Как вырастить из официанта менеджера?
						</li>
						<li class="accordeon__list-item">
							Хороший официант – плохой менеджер: почему такое случается?
						</li>
						<li class="accordeon__list-item">
							Постоянное стимулирование менеджера
						</li>
						<li class="accordeon__list-item">
							Что нужно знать менеджеру, чтобы вести команду к успеху?
						</li>
						<li class="accordeon__list-item">
							Кто может стать управляющим ресторана: лайфхаки по выбору 
						</li>
						<li class="accordeon__list-item">
							Как вырастить управляющего, нацеленного на увеличение прибыли?
						</li>
						<li class="accordeon__list-item">
							Мотивация управляющих: что нужно для того, чтобы не происходило профессионального выгорания?
						</li>
						<li class="accordeon__list-item">
							Сложность роста в своём коллективе: как облегчить адаптацию?
						</li>
					</ul>
				</div>
			</div>
			<div class="accordeon__item">
				<div class="accordeon__title" onclick="toggle_accordeon(5)">
					<span>Бизнес и материнство</span>
					<i class="fal fa-long-arrow-down"></i>
				</div>
				<div class="accordeon__list-container">
					<ul class="accordeon__list">
						<li class="accordeon__list-item">
							Как совмещать работу и семью?
						</li>
						<li class="accordeon__list-item">
							Дети-рестораны VS дети-дети: как сделать так, чтобы никого не обделить?
						</li>
						<li class="accordeon__list-item">
							Как меняется взгляд на бизнес после появления детей?
						</li>
					</ul>
				</div>
			</div>
		</section>
	</section>

	<script>
		function toggle_accordeon(index) {
			$(".accordeon__item").eq(index).toggleClass("accordeon__item--active");
		}
	</script>

	<section class="timeline">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2000</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						Начала свою карьеру с должности официант в одном из ресторанов города Кингисепп
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2002</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						Переехала в Санкт-Петербург
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2004 – 2005</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						Работала на кругосветном лайнере, где в течение полугода посетила более 40
						стран (Новая Зеландия, остров Пасхи, ЮАР, Аргентина, Бразилия и т.д.)
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2005</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						Начала сотрудничество с Ginza Project в качестве официанта в первом суши-кафе
						«Япошка»; занималась открытием первого караоке-ресторана «Джельсомино Cafe»
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2006</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						стала менеджером одного из суши-кафе «Япошка»;
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2007</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						возглавила свое первое суши-кафе в качестве управляющей, впоследствии получила в управление второе заведение
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2008</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						стала территориальной управляющей 6 ресторанов
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2008</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						стала управляющей первого ресторана восточного направления Ginza Project «Мамалыга» (ресторан работает до сих пор), который за 2 месяца из убыточного проекта превратила в премиальный – именно с этого ресторана началось активное развитие восточной и кавказской кухни в СПб
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2010</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						родила первого ребёнка – сына Назара – параллельно продолжила управление рестораном
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2012</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						получила в управление второй ресторан «Шурпа»
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2012</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						построила с нуля и организовала работу ресторанов «Бричмула», «Хочу Харчо», «Баклажан» в ТРК Галерея, «Мамалыга» на Казанской улице, «Чурчхела»
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2014 – 2015</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						родила дочь Аделину и в то же время в кризис открыла 6 ресторанов; провела ребрендинг нескольких ресторанов
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2018</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						открыла новые рестораны: «Стейк by Steak» в ТРК «Галерея», две «Пышечки», «Едим руками»
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2019</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						создала школу ресторанного менеджмента Ginza School, где прошло обучение более 2000 сотрудников холдинга Ginza Project и других компаний
					</p>
				</div>
				<div class="swiper-slide timeline-item">
					<div class="timeline-item__year">2020</div>
					<div class="timeline-item__line"></div>
					<p class="timeline-item__paragraph paragraph">
						Открыла в пространстве «Севкабель порт» детскую кулинарную школу «Дети на кухне», где дети учатся готовить под руководством именитых шеф-поваров без помощи родителей». Запустила одноименные программы кулинарного онлайн-образования для детей. Выступила в качестве организатора детских ёлок пространстве «Севкабель Порт» и во дворце Милютина в Петербурге. Основала школу ресторанного менеджмента SotA School
					</p>
				</div>
			</div>
		</div>
	</section>

	<script>
		let timeline = new Swiper(".timeline .swiper-container", {
			slidesPerView: 'auto' 
		});
	</script>

	<div class="about-container">
		<?php require 'templates/_feedback.php'; ?>
	</div>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>
</body>
</html>