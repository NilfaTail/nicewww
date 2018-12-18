<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>nicewww.ru - Главная</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<!--
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet" />
	-->

</head>

<body>
	<div id="particles-js"></div>
	<header >
		<div class="header-info">
			<div class="container">
				<h1 class="text-align">that's my site!</h1>
			</div>
		</div>
		<div id="navigationTop">
			<div class="container">
				<div class="">
					<ul class="nav nav-top">
						<li class="nav-item">
							<a href="/">Home</a></li>
						<li class="nav-item">
							<a href="/gui">GUI и второе меню</a>
							<ul class="nav nav-top nav-second">
								<li>
									<a href="">Ссылка 1</a>
								</li>
								<li>
									<a href="">Ссылка 2</a>
								</li>
								<li>
									<a href="">Ссылка 3</a>
								</li>
							</ul>
						</li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	
	<div class="main">
		<div class="container">

			<div class="page">
				<?php include 'app/views/'.$content_view; ?>
			</div>

		</div>	
	</div>

	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/js/particles/particles.js" defer></script>
	<script type="text/javascript" src="/js/particles/parts.js" defer></script>

	<script>
		// скрипт прокрутки меню и фиксации его в верху экрана
		var h_hght = 0;   // высота 
		var h_mrg = -100; // высота отступа дива с потенциальным логотипом

		$(function(){
			$(window).scroll(function(){       // скролим
				var top = $(this).scrollTop(); // расстояние до верха
				var navTop = $('#navigationTop');
				if (top+h_mrg < h_hght) {
					navTop.css('top',(h_hght - top))
				} else {
					navTop.css('top', h_mrg)  // устанавливаем значение отступа
				}
			});
		});
	</script>

</body>

</html>