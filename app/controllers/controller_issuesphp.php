<?php

class Controller_Issuesphp extends Controller {

	// В метод generate экземпляра класса View передаются имена файлов общего шаблона и вида c контентом страницы.
	function action_index()
	{	
		$this->view->generate('issuesphp_view.php', 'template_view.php');
	}

}