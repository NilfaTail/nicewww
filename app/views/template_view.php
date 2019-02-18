<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="shortcut icon" href="/favicon.ico" type="image/png">

	<title>nicewww.ru - Главная</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/main.js"></script>

</head>

<body>
	<div id="particles-js"></div>
	<header >
		<div class="header-info">
			<div class="container">
				<h1 class="text-align">that's my site!</h1>
				<div class="spec-info"><?php echo( $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ) ; ?></div>
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
							<a href="/" title="">Home</a>
						</li>
						<li class="nav-item">
							<a href="/gui" title="">GUI</a>
						</li>
						<li class="nav-item">
							<a href="/contacts" title="">Контакты</a>							
						</li>
						<li class="nav-item">
							<a href="/issues" title="">Задачи js</a>
						</li>
						<li class="nav-item">
							<a href="/issuesphp" title="">Задачи php</a>
						</li>
						<!--
						<li class="nav-item nav-item-second">
							<a href="javascript:void(0);" class="">Второе меню <i class="fas fa-caret-down"></i></a>
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
						-->
						<li class="nav-item"><a href="/portfolio">Портфолио</a></li>
						<!--<li class="nav-item nav-item-second">
							<a href="javascript:void(0);" class="">Еще второе меню <i class="fas fa-caret-down"></i></a>
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
						-->
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


	<script src="/js/particles/particles.js" defer></script>
	<script src="/js/particles/parts.js" defer></script>

</body>

</html>