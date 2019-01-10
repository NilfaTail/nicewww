<div class='article'>
	<h1>Задачки</h1>
</div>

<div class='article'>
	<div>
		<h2>Задача 1</h2>
		<h5>Составить алгоритм для вычисления значения площади прямоугольника со сторонами a, b.<br>
		Увеличить полученное значение на 1. Проверить значения при помощи функции console.log(var).</h5>
		
		<div>
			a = 5;<br>
			b = 6;
		</div>

		<script type="text/javascript">
			var a = 5;
			var b = 6;
			var c = a*a + b*b + 1;
			console.log('Задача 1');
			console.log('Площадь прямоугольника равна: ' + c);
		</script>
	</div>
</div>

<div class="article">
	
	<div>
		<h2>Задача 2</h2>
		<h5>
			Вычислить значения логических выражений: <br>
			1) true && false || true; <br>
			2) true || false && true; <br>
			3) false && (!false || true); <br>
			4) (1 > 0) && (1 < 0). <br>
			Результаты записать в отдельные переменные и вывести их значение при помощи функции console.log(var).
		</h5>

		<div>
			a = true;<br>
			b = false;
		</div>

		<script type="text/javascript">
			var a = true;
			var b = false;
			var c, c1, c2, c3;

			console.log('Задача 2');
			console.log('Пункт 1) true && false || true ');
			c = a && b || a; // true
			console.log(c);

			console.log('Пункт 2) true || false && true ');
			c1 = a || b && a; // true
			console.log(c1);

			console.log('Пункт 3) false && (!false || true) ');
			c2 = b && (!b || a); // false
			console.log(c2);

			console.log('Пункт 4) (1 > 0) && (1 < 0) ');
			c3 = (1 > 0) && (1 < 0); // false
			console.log(c3);
		</script>
	</div>
</div>

<div class="article">
	
	<div>
		<h2>Задача 2</h2>
		<h5>
			Объявить переменную a с целым числовым значением. Объявить еще одну переменную b. <br>
			В нее записать булевское выражение, которое будет равно true если значение переменной a делится на 2 и false в противном случае. <br>
			Результат проверить при помощи функции console.log(var).
		</h5>

		<div>
			a = 6;<br>
			b булево;
		</div>

		<script type="text/javascript">
			var a = 6;
			var b;
			if (a % 2 == 0) {
				b = 'true';
			} else {
				b = 'false';
			}
			
			console.log(b + ' - число а делится на 2');
		</script>
	</div>
</div>