<?php

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{

		//В переменную data записывается массив, возвращаемый методом get_data из модели model_portfolio.php.
		$data = $this->model->get_data();

		//Передаем эту переменную в метод generate вместе с шаблонами
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
}