<div class="article">
	<h1>Задачи по php </h1>
</div>

<div class="article">
	
	<h2>Урок 1</h2>
	
	<h4>Пункт 1</h4>
	
	<p>Вывод разных типов данных</p>

	<p>
		<?php 
		$a = 1;
		$b = 1.2;
		$c = true;
		$d = 'string';
		
		define('PI' , '3.14');
		const NEW_PER_PAGE = 10;

		echo 'Целочисленное ' . $a . '<br>';
		echo 'Дробное ' . $b . '<br>';
		echo 'Булево ' . $c . '<br>';
		echo 'Строковое ' . $d . '<br>';
		echo 'Число Пи, константа ' . PI . '<br>';
		echo 'Константа ' . NEW_PER_PAGE;
		?>
	</p>

	<h4>Пункт 2</h4>

	<p>Четверостишие на PHP</p>

	<?php 
		$st1 = '«Славная осень! Здоровый, ядреный';
		$st2 = 'Воздух усталые силы бодрит;';
		$st3 = 'Лед неокрепший на речке студеной';
		$st4 = 'Словно как тающий сахар лежит.»';
		$st5 = '<u>Н. А. Некрасов</u>';

		echo '<p>' . $st1 . '<br>';
		echo $st2 . '<br>';
		echo $st3 . '<br>';
		echo $st4 . '<br>';
		echo $st5 . '</p>';

		echo '<p>' . $st1 . '<br>' . $st2 . '<br>' . $st3 . '<br>'. $st4 . '<br>' . $st5 . '</p>';
	?>

	<h4>Пункт 3</h4>

	<p>Сложение разных типов данных</p>

	<?php 
		$num = 20;
		$string = '20 приветов';
		echo '<p>' . ($num + $string) . '</p>';
	?>

	<h4>Пункт 4</h4>

	<p>Оператор XOR</p>

	<?php 

	$t = true;
	$f = false;
	$result = $t xor $f;
	echo '<p>' . $result . '</p>';

	?>
	
	<h4>Пункт 5</h4>

	<p>x = 10, y = 15. надо поменять местами, не используюя других переменных.</p>

	<?php
	$x = 10;
	$y = 15;

	$y = $y + $x; // 25
	$x = $y - $x; // 15
	$y = $y - $x; // 10
	echo '<p><code>$y = $y + $x; // 25 </code>' . '<br>';
	echo '<code>$x = $y - $x // 15 </code>' . '<br>';
	echo '<code>$y = $y - $x; // 10 </code>' . '</p>';
	?>

</div>

<div class="article">
	<h2>Урок 2</h2>
	
	<h4>Пункт 1</h4>

	<p>
		Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: <br>
		a. Если $a и $b положительные, вывести их разность. <br>
		b. Если $а и $b отрицательные, вывести их произведение. <br>
		c. Если $а и $b разных знаков, вывести их сумму. <br>
		Ноль можно считать положительным числом.
	</p>

	<?php 
		$a = 10;
		$b = 15;

		if ($a > $b) {
			echo '<p> $a > $b </p>';
		} else if ($a < $b) {
			echo '<p> $a < $b </p>';
		} else {
			echo '<p> $a = $b </p>';
		}

	?>

	<h4>Пункт 2</h4>

	<p>
		Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
	</p>

	<p>
		<?php
		$a = 10;

		switch ( $a ) {
			case '15':
				echo $a;
				break;
			case '14':
				echo $a;
				break;
			case '13':
				echo $a;
				break;
			case '12':
				echo $a;
				break;
			case '11':
				echo $a;
				break;
			case '10':
				echo $a;
				break;
			default:
				echo $a;
				break;
		}

		?>
	</p>

	<h4>Пункт 3</h4>

	<p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>

	<?php 
		function sum($x,$y){
			$result = $x + $y;
			return $result;
		}
		function mult($x,$y){
			$result = $x * $y;
			return $result;	
		}
		function sub($x,$y){
			$result = $x - $y;
			return $result;
		}
		function div($x,$y){
			$result = $x / $y;
			return $result;
		}
		$sumNum = sum(10,15);
		$multNum = mult(10,15);
		$subNum = sub(10,15);
		$divNum = div(10,15);
		echo '<p>Сумма: '. $sumNum .'</p>';
		echo '<p>Умножение: '. $multNum .'</p>';
		echo '<p>Вычитание: '. $subNum .'</p>';
		echo '<p>Деление: '. $divNum .'</p>';
	?>

	<h4>Пункт 4 *</h4>
	<p>
		Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
		где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
		зависимости от переданного значения операции выполнить одну из арифметических операций
		(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
	</p>

	<?php
	function mathOperation($arg1, $arg2, $operation){
			return;
	}
	?>

	<h4>Пункт 5</h4>
	<p>Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p>
	<p>
		<?php echo 'Сейчас ' . date('Y') . ' год';?>
	</p>

	<h4>Пункт 6 *</h4>
	<p>*С помощью рекурсии организовать функцию возведения числа в степень. 
	Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>


	<h4>Пункт 7</h4>
	<p>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты</p>
	
	<?php

		function stringCyrData() {
			$hour = date('H');
			$minute = date('i');

			if ( $minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51) {
				$stMinute = $minute . ' минута';
			} else if ( ($minute >= 2 && $minute <= 4) || ($minute >= 22 && $minute <= 24) || ($minute >= 32 && $minute <= 34) || ($minute >= 42 && $minute <= 44) || ($minute >= 52 && $minute <= 54) ) {
				$stMinute = $minute . ' минуты';
			} else {
				$stMinute = $minute . ' минут';
			} 

			if ( $hour == 1 || $hour == 21) {
				$stHour = $hour . ' час';
			} else if ( $hour >= 2 && $hour <= 4 || $hour >= 22 && $hour <= 24 ) {
				$stHour = $hour . ' часа';
			} else {
				$stHour = $hour . ' часов';
			}

			$stData = $stHour . ' ' . $stMinute;

			return $stData;
		}

		echo '<p>' . stringCyrData() . '</p>'; 
	?>

</div>

<div class="article">
	<h2>Урок 3</h2>
</div>