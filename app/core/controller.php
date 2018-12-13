<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct() {
		$this->view = new View();
	}
	
	// метод (action) по умолчанию
	function action_index()	{
		// todo
	}
}