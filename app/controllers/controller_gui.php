<?php

class Controller_Gui extends Controller
{
	
	function action_index()
	{
		$this->view->generate('gui_view.php', 'template_view.php');
	}

}