<?php

class Controller_Contacts extends Controller {

	// В метод generate экземпляра класса View передаются имена файлов общего шаблона и вида c контентом страницы.
	function action_index()
	{	
		$this->view->generate('contacts_view.php', 'template_view.php');
	}

}