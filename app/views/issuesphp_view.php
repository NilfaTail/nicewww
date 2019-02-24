<div class="article">
	<h1>Задачи по php </h1>
</div>

<div class="article">

	<h2>Урок 1</h2>

	<div class="div__border-bottom">
		<h4>Пункт 1</h4>
		<p>Вывод разных типов данных</p>
		<p class="monospace">
			<?php
$a = 1;
$b = 1.2;
$c = true;
$d = 'string';

define('PI', '3.14');
const NEW_PER_PAGE = 10;

echo 'Целочисленное ' . $a . '<br>';
echo 'Дробное ' . $b . '<br>';
echo 'Булево true ' . $c . '<br>';
echo 'Строковое ' . $d . '<br>';
echo 'Число Пи, константа ' . PI . '<br>';
echo 'Константа ' . NEW_PER_PAGE;
?>
		</p>
	</div>

	<div class="div__border-bottom">
		<h4>Пункт 2</h4>
		<p>Четверостишие на PHP</p>

	<?php
$st1 = '«Славная осень! Здоровый, ядреный';
$st2 = 'Воздух усталые силы бодрит;';
$st3 = 'Лед неокрепший на речке студеной';
$st4 = 'Словно как тающий сахар лежит.»';
$st5 = '<u>Н. А. Некрасов</u>';

echo '<p class="monospace">' . $st1 . '<br>';
echo $st2 . '<br>';
echo $st3 . '<br>';
echo $st4 . '<br>';
echo $st5 . '</p>';

echo '<p class="monospace">' . $st1 . '<br>' . $st2 . '<br>' . $st3 . '<br>' . $st4 . '<br>' . $st5 . '</p>';
?>
	</div>

	<div class="div__border-bottom">
		<h4>Пункт 3</h4>
		<p>Сложение разных типов данных</p>

	<?php
$num    = 20;
$string = '20 приветов';
echo '<p class="monospace"> 20 + 20 приветов = ' . ($num + $string) . '</p>';
?>
	</div>

	<div class="div__border-bottom">
		<h4>Пункт 4</h4>
		<p>Оператор XOR</p>

		<?php
$t      = true;
$f      = false;
$result = $t xor $f;
echo '<p class="monospace"> $t xor $f = ' . $result . '</p>';
?>
	</div>

	<div class="div__border-bottom">
		<h4>Пункт 5</h4>

		<p>x = 10, y = 15. надо поменять местами, не используюя других переменных.</p>
		<?php
$x = 10;
$y = 15;
$y = $y + $x; // 25
$x = $y - $x; // 15
$y = $y - $x; // 10
echo '<p class="monospace">$y = $y + $x; // 25' . '<br>';
echo '$x = $y - $x // 15' . '<br>';
echo '$y = $y - $x; // 10' . '</p>';
?>
	</div>

</div>

<div class="article">
	<h2>Урок 2</h2>

	<div class="div__border-bottom">
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
    echo '<p class="monospace"> $a > $b </p>';
} else if ($a < $b) {
    echo '<p class="monospace"> $a < $b </p>';
} else {
    echo '<p class="monospace"> $a = $b </p>';
}

?>
	</div>

	<div class="div__border-bottom">
	<h4>Пункт 2</h4>

	<p>
		Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
	</p>

	<p class="monospace">
		<?php
$a = 10;

switch ($a) {
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
	</div>

	<div class="div__border-bottom">
	<h4>Пункт 3</h4>

	<p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>

	<?php
function sum($x, $y)
{
    $result = $x + $y;
    return $result;
}
function mult($x, $y)
{
    $result = $x * $y;
    return $result;
}
function sub($x, $y)
{
    $result = $x - $y;
    return $result;
}
function div($x, $y)
{
    $result = $x / $y;
    return $result;
}
$sumNum  = sum(10, 15);
$multNum = mult(10, 15);
$subNum  = sub(10, 15);
$divNum  = div(10, 15);
echo '<p class="monospace">Сумма: ' . $sumNum . '</p>';
echo '<p class="monospace">Умножение: ' . $multNum . '</p>';
echo '<p class="monospace">Вычитание: ' . $subNum . '</p>';
echo '<p class="monospace">Деление: ' . $divNum . '</p>';
?>

	</div>

	<div class="div__border-bottom">
	<h4>Пункт 4 *</h4>
	<p>
		Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
		где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
		зависимости от переданного значения операции выполнить одну из арифметических операций
		(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
	</p>

	<?php
function mathOperation($arg1, $arg2, $operation)
{

    switch ($operation) {
        case 'addition':
            $resultOperation = sum($arg1, $arg2);
            break;
        case 'subtraction':
            $resultOperation = sub($arg1, $arg2);
            break;
        case 'multiplication':
            $resultOperation = mult($arg1, $arg2);
            break;
        case 'division':
            $resultOperation = div($arg1, $arg2);
            break;
    }

    return $resultOperation;
}

echo '<p class="monospace"> Сложение 10 + 20 = ' . mathOperation(10, 20, 'addition') . '</p>';
echo '<p class="monospace"> Вычитание 10 - 20 = ' . mathOperation(10, 20, 'subtraction') . '</p>';
echo '<p class="monospace"> Умножение 10 * 20 = ' . mathOperation(10, 20, 'multiplication') . '</p>';
echo '<p class="monospace"> Деление 10 / 20 = ' . mathOperation(10, 20, 'division') . '</p>';
?>
	</div>

	<div class="div__border-bottom">
	<h4>Пункт 5</h4>
	<p>Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p>
	<p class="monospace">
		<?php echo 'Сейчас ' . date('Y') . ' год'; ?>
	</p>
</div>

<div class="div__border-bottom">

	<h4>Пункт 6 *</h4>
	<p>*С помощью рекурсии организовать функцию возведения числа в степень. <br>
	Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>

	<?php
// возведение в степень
function power($val, $pow)
{

    if ($pow == 0) {
        $resultPower = 1; // ну тут понятно
    } else if ($pow > 0) {
        $resultPower = $val * power($val, $pow - 1);
    } else {
        if ($val == 0) {
            $resultPower = "Нельзя делить на ноль!";
        } else {
            $resultPower = power(1 / $val, -$pow); //
        }

    }
    return $resultPower;
}

echo '<p class="monospace"> Возведем 3 в степень 5, будет ' . power(3, 5) . '</p>';
echo '<p class="monospace"> Возведем 3 в степень -5, будет ' . power(3, -5) . '</p>';
?>
</div>

	<div class="div__border-bottom">
	<h4>Пункт 7</h4>
	<p>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты</p>

	<?php

function stringCyrData()
{
    $hour   = date('H');
    $minute = date('i');

    if ($minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51) {
        $stMinute = $minute . ' минута';
    } else if (($minute >= 2 && $minute <= 4) || ($minute >= 22 && $minute <= 24) || ($minute >= 32 && $minute <= 34) || ($minute >= 42 && $minute <= 44) || ($minute >= 52 && $minute <= 54)) {
        $stMinute = $minute . ' минуты';
    } else {
        $stMinute = $minute . ' минут';
    }

    switch ($hour) {
        case ('1' || '21'):
            $stHour = "$hour час";
            break;
        case ('2' || '3' || '4' || '22' || '23' || '24'):
            $stHour = "$hour часа";
            break;
        default:
            $stHour = "$hour часов";
            break;
    }

    $stData = $stHour . ' ' . $stMinute; // ..часов ..минут в кириллице

    return $stData;
}

echo '<p class="monospace">' . stringCyrData() . '</p>';
?>
	</div>
</div>

<div class="article">
	<h2>Проблемы с тестирования</h2>
	<p>Чему равно выражение?</p>
	<p>
		<code>
			$a = 1;<br>
			$b = 1;<br>
			$c = $a + $b++;<br>
			echo $c;
		</code>
	</p>
	<div>
		<p>	А равно оно нифига не 3, а <strong>	2</strong></p>
		<p>
			<?php

$a = 1;
echo '$a = ' . $a . '<br>';
$b = 1;
echo '$b = ' . $b . '<br>';
$c = $a + $b++;
echo '$c = $a + $b++ = ' . $c;

?>
		</p>

	</div>

</div>