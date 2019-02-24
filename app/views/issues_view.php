<div class='article'>
	<h1>Задачки</h1>
</div>

<div>
	<script>
	/*setTimeout(reminder, 5000);
	function reminder() {
			alert("Так и будешь смотреть на эту скучную страницу?");
	}
	window.onload = function() {
		alert('Документ загружен');
	}*/
	</script>
</div>

<div class="article">
	<h2>Валидация телефона и email (js)</h2>
	<div>
		
	<form action="" method="" id="testPhoneEmail">
		<div class="form-group">
			<input type="phone" name="phone" placeholder="79262146670" pattern="[0-9]{2}" title="Формат: 22" required>	
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="test@mail.ru" required>	
		</div>
		<div class="form-group">
			<input type="submit" value="Submit">
		</div>		
	</form>

	</div>
</div>

<div class="article">
	<h2>
		Напишите код, который будет спрашивать логин (prompt).<br>
		Если посетитель вводит «Админ», то спрашивать пароль, если нажал отмена (escape) – выводить «Вход отменён», если вводит что-то другое – «Я вас не знаю».<br>
		Пароль проверять так. Если введён пароль «Чёрный Властелин», то выводить «Добро пожаловать!», иначе – «Пароль неверен», при отмене – «Вход отменён».
	</h2>

	<script>
		/*var userName = prompt('Введите имя пользователя: ', 'username');
		var userPass;
		if (userName == 'admin') {
			alert('Привет, ' + userName);
			userPass = prompt('Какой пароль?', '***');
			if (userPass == 'Черный Властелин') {
				alert('Добро Пожаловать!');
			} else {
				alert('Пошел вон!');
			}
		} else if (userName == null || userName == '') {
			alert('Попробуйте еще раз');
		} else {
			alert('Обнаружен посторонний!');
		}
		*/
		var result = ( (5 + 1 < 4) ? 'Мало' : 'Много' );
		console.log(result);


		var sec, minute, hour, day, mounth;
		sec = 1;
		minute = sec*60;
		hour = minute*60;
		console.log(hour);
		console.log(day = hour*24);
		console.log(mounth = day*30);



	</script>
</div>

<div class="article">

	<h2>Задача 5 (geekbrains.ru)</h2>
	<p>
		1. Задать температуру в градусах по Цельсию. Вывести в alert соответствующую температуру в градусах по Фаренгейту. Подсказка: расчет идет по формуле Tf = (9 / 5) * Tc + 32, где Tf — температура по Фаренгейту, Tc — по Цельсию.
	</p>
	<script>

		/*console.log('------------------');
		console.log('Задача 4');
		console.log('Пункт 1');



		var Tc = prompt('Введите температуру по Цельсию', 0); // 25 градусов по Цельсию
		var Tf = (9 / 5) * Tc + 32;

		alert('Температура по Фаренгейту: ' + Tf);*/

	</script>

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
			console.log('------------------');
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
			console.log('------------------');
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
		<h2>Задача 3</h2>
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
			console.log('------------------');
			console.log('Задача 3');

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

<div class="article">
	<h2>Задача 4</h2>
	<h5>
		Создать массив из трех любых числовых значений. В отдельные переменные записать: <br>1) сумму всех значений элементов массива; <br>
		2) логическое выражение, которое дает true, лишь если каждое следующее значение массива больше предыдущего.
	</h5>
	<p>	см.консоль </p>

	<script >
		console.log('------------------');
		console.log('Задача 4');
		console.log('Пункт 1');
		var numberArray = [1,6,2];

		console.log(numberArray.length);
		var sumArray = 0;

		for ( var i = 0; i < numberArray.length; i++) {
			sumArray = sumArray + numberArray[i];
			console.log('numberArray[' + i + '] = ' + sumArray);
		}
		console.log('Итого: ' + sumArray);
		console.log('------------------');
		console.log('Пункт 2');
		var testArray = false;

		var curElem = numberArray[0];
		var prevElem = 0;

		for ( var i = 0; i < numberArray.length; i++) {

			curElem = numberArray[i]; // 1
			prevElem = numberArray[i-1]; // undefined

			if ( curElem > prevElem)	{
				testArray = true;
				console.log( testArray + ': ' + curElem + ' > ' + prevElem);
			} else {
				testArray = false;
				console.log( testArray + ': ' + curElem + ' < ' + prevElem);
			}

		}
	</script>
</div>