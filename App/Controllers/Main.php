<?php 
namespace App\Controllers;

class Main {
	
	public function defaultAction () 
	{
		$view = new \App\View();
		$view->render('index.php');
	}
}