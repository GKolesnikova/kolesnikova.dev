<?php 

namespace App;

 class Loader {
	public static function start(string $ctrlName, string $action) {
		$controller = new $ctrlName();
		if (!method_exists($controller, $action)) {
			echo "Имя не существует ";
			die;
		}	
		$controller->$action();
	}
 }