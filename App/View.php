<?php

namespace App;

class View {
	public static $templatePath = __DIR__ . '\templates\\';
	
	public function render(string $fileName, array $data = []) {
		ob_start();
        foreach ($data as $prop => $value) {
            $$prop = $value;
        }
        include View::$templatePath . $fileName;
        $content = ob_get_contents();
        ob_end_clean();
		
        return $content;
	}
}

