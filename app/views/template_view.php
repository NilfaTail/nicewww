<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>nicewww.ru - Главная</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet" />

</head>

<body>
	<div id="particles-js"></div>
	<header>
		<div class="container">
			<div class="">
				<ul class="nav nav-top">
					<li class="nav-item">
						<a href="/">Home</a></li>
					<li class="nav-item">
						<a href="/examples">Примеры</a>
						<ul class="nav nav-top nav-second">
							<li>
								<a href="fiches/ficha-1-fixed-animated-menu.html">Фиксированное меню</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="/gui">GUI</a>
					</li>
					<li><a href="/services">Услуги</a></li>
					<li><a href="/portfolio">Портфолио</a></li>
					<li><a href="/contacts">Контакты</a></li>
				</ul>
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

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
	<script type="text/javascript" src="/js/particles/particles.js" defer></script>
	<script type="text/javascript" src="/js/particles/parts.js" defer></script>
</body>

</html>