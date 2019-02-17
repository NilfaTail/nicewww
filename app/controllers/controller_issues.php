<?php

class Controller_Issues extends Controller {

	// В метод generate экземпляра класса View передаются имена файлов общего шаблона и вида c контентом страницы.
	function action_index()
	{	
		$this->view->generate('issues_view.php', 'template_view.php');
	}

}