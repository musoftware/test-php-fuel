<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Rendering extends Controller
{


	public function render()
	{
		$view = View::forge('layout');
		
		//local view variables, lazy rendering
		$view->head = View::forge('head', array('title' => 'Home'));
		$view->header = View::forge('header', array('site_title' => 'My Website'));
		$view->content = View::forge('content', array('username' => 'Joe14', 'title' => 'Home'));
		$view->footer = View::forge('footer', array('site_title' => 'My Website'));
		
		// return the view object to the Request
		return $view;
	}



}
