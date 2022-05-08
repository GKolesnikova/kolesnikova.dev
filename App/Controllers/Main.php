<?php 
namespace App\Controllers;

class Main {
	
	public function defaultAction () 
	{
		$view = new \App\View();
		echo $view->render('index.php');
	}
	
	public function cityAction () 
	{
		$repo = new \App\Models\SightsRepo(
			new \App\DB()
		);

		$view = new \App\View();
		echo $view->render(
			'about_my_city.php',
			['sightsList' =>  $repo->getAllSights()]
		);   
	}
	
	public function myAction () 
	{
		$view = new \App\View();
		echo $view->render('about_me.php');
	}
	
	public function projekteAction () 
	{
		$view = new \App\View();
		echo $view->render('my_projekte.php');
	}
	
}