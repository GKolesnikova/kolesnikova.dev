<?php

namespace App;

class View {
	public $templatePath;
	
	public  function __construct() {
		$this->templatePath = __DIR__ . '\templates\\';
	}
	
	public  function render(string $fileName) {
		
		require $this->templatePath . $fileName;
	}
	
}