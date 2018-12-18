<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>nicewww.ru - Главная</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" />

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
					<div class="hide-nav">
						<div class="hide-nav-button">menu</div>
					</div>


					<ul class="nav nav-top">
						<li class="nav-item">
							<a href="/">Home</a></li>
						<li class="nav-item">
							<a href="javascript:void(0);" class="nav-item-second">GUI и второе меню</a>
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
	<script type="text/javascript" src="/js/main.js"></script>
	<script type="text/javascript" src="/js/particles/particles.js" defer></script>
	<script type="text/javascript" src="/js/particles/parts.js" defer></script>

</body>

</html>