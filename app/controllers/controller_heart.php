<?php

class Controller_Heart extends Controller {

	// В метод generate экземпляра класса View передаются имена файлов общего шаблона и вида c контентом страницы.
	function action_index()
	{	
		$this->view->generate('heart_view.php', 'template_view.php');
	}

}