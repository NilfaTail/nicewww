<div class='article article-70'>
	
	<h1>GUI</h1>

	<a name="headers"></a>
	<h2>Заголовки</h2>

	<h1>Заголовок H1</h1>
	<h2>Заголовок H2</h2>
	<h3>Заголовок H3</h3>
	<h4>Заголовок H4</h4>
	<h5>Заголовок H5</h5>
	<h6>Заголовок H6</h6>

	<a name="text"></a>
	<h2>Текст</h2>
	<p>Образец короткого абзаца.</p>
	<p>Образец длинного абзаца с текстом-рыбой. С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития. Товарищи! консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия. Таким образом реализация намеченных плановых заданий позволяет оценить значение новых предложений.</p>
	<p>Образец длинного абзаца с текстом-рыбой. С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития. Товарищи! консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия. Таким образом реализация намеченных плановых заданий позволяет оценить значение новых предложений.</p>
	<p><span class="bold">Жирный текст использует класс</span> <code>.bold</code>.</p>
	<p><span class="italic">Курсивный текст использует класс</span> <code>.italic</code>.</p>
	<p><span class="underline">Подчеркнутый текст использует класс</span> <code>.underline</code>.</p>
	<p><span class="strike">Подчеркнутый текст использует класс</span> <code>.strike</code>.</p>
	
	<p class=" bg-greygreen white p-10">
		Использованы классы <code>.bg-greygreen .white .p-10</code>. <br> Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития. Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений.
	</p>
	
	<a name="lists"></a>
	<h2>Списки</h2>

	<h4>Ненумерованный список</h4>

	<ul>
		<li>Элемент 1</li>
		<li>Элемент 2</li>
		<li>Элемент 3</li>
	</ul>

	<h4 class="greygreen">Нумерованный список, h4 с использованием класса <code> .greygreen</code></h4>

	<ol>
		<li>Элемент 1</li>
		<li>Элемент 2</li>
		<li>Элемент 3</li>
	</ol>

	<a name="tables"></a>
	<h2>Таблицы</h2>

	<table class="table ">
		<caption>Простая таблица с классом <code>.table</code></caption>
		<thead>
			<tr>
				<th >Столбец 1</th>
				<th>Столбец 2</th>
				<th>Столбец 3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Значение 1</td>
				<td>Значение 1 тест</td>
				<td>Значение 1 тест тест тест</td>
			</tr>
			<tr>
				<td>Значение 2</td>
				<td>Значение 2 тест</td>
				<td>Значение 2 тест тест тест</td>
			</tr>
			<tr>
				<td>Значение 3</td>
				<td>Значение 3 тест</td>
				<td>Значение 3 тест тест тест</td>
			</tr>
		</tbody>
	</table>

	<table class="table table-hovered">
		<caption>Подсветка при наведении - таблица с классами <code>.table .table-hovered</code></caption>
		<thead>
			<tr>
				<th>Столбец 1</th>
				<th>Столбец 2</th>
				<th>Столбец 3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Значение 1</td>
				<td>Значение 1 тест</td>
				<td>Значение 1 тест тест тест</td>
			</tr>
			<tr>
				<td>Значение 2</td>
				<td>Значение 2 тест</td>
				<td>Значение 2 тест тест тест</td>
			</tr>
			<tr>
				<td>Значение 3</td>
				<td>Значение 3 тест</td>
				<td>Значение 3 тест тест тест</td>
			</tr>
		</tbody>
	</table>

	<a name="turns"></a>
	<h2>Переключатели</h2>
	
	<h3>Checkboxes</h3>
	<div class="">
		<div class="check">
		  <input type="checkbox" name="check" id="check-1" />
		  <label for="check-1">Checkbox 1 (UNchecked)</label>
		</div>
		<div class="check">
		  <input type="checkbox" name="check" id="check-2" checked />
		  <label for="check-2">Checkbox 2 (checked)</label>
		</div>
		<div class="check">
		  <input type="checkbox" name="check" id="check-3"  disabled />
		  <label for="check-3">Checkbox 3 (disabled)</label>
		</div>
		<div class="check">
		  <input type="checkbox" name="check" id="check-4"  disabled checked />
		  <label for="check-4">Checkbox 4 (checked disabled)</label>
		</div>
	</div>

	<h3>Radio Buttons</h3>
	<div class="">
		<div class="radio">
		  <input type="radio" id="radio-1" name="radio" checked/>
		  <label for="radio-1">Radio 1 (checked)</label>
		</div>
		<div class="radio">
		  <input type="radio" id="radio-2" name="radio" />
		  <label for="radio-2">Radio 2 (UNchecked)</label>
		</div>
		<div class="radio">
		  <input type="radio" id="radio-3" name="radio1" disabled />
		  <label for="radio-3">Radio 3 (disabled)</label>
		</div>
		<div class="radio">
		  <input type="radio" id="radio-4" name="radio1" disabled checked />
		  <label for="radio-4">Radio 4 (checked disabled)</label>
		</div>
	</div>

	<a name="forms"></a>
	<h3>Компоненты форм</h3>

	<form role="form">
	
		<div class="form-group">
			<label class="col-2" for="username">User</label>
			<input type="text" id="username" placeholder="Username" name="user">
		</div>
		<div class="form-group">
			<label class="col-2" for="password">Password</label>
			<input type="password" id="password" name="pass">
		</div>
		<div class="form-group">
			<label class="col-2" for="selecttype">Select</label>
			<select id="selecttype" name="textselect">
				<option>item 1</option>
				<option>item 2</option>
				<option>item 3</option>
			</select>
		</div>

		<div class="form-group">
			<label class="col-2" for="file">File</label>
			<input type="file" id="file" name="fileform" placeholder="choose file...">
		</div>

		<div>
			<label class="col-2" for="textarea">Comment</label>
			<textarea id="textarea" name="comment"></textarea>	
		</div>
		

		<div>
			<input type="submit" value="OK">
			<input type="reset" value="Reset">
		</div>

	</form>

</div>

<div class='rightNavigation'>
	<ul>
		<li>
			<a href="#headers" title="">Заголовки</a>
		</li>
		<li>
			<a href="#text" title="">Текст</a>
		</li>
		<li>
			<a href="#lists">Списки</a>
		</li>
		<li>
			<a href="#tables">Таблицы</a>
		</li>
		<li>
			<a href="#turns">Переключатели</a>
		</li>
		<li>
			<a href="#forms">Формы</a>
		</li>
	</ul>
</div>