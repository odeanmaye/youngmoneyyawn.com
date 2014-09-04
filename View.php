<?php
class View {
	
	const ERROR_VIEWFILE = "Views/error.phtml";
	
	public function render($view){
		
		$viewfile = __DIR__ ."/"."Views/".$view.".phtml";
		
		if(file_exists($viewfile)){
			include $viewfile;
		} else {
			include self::ERROR_VIEWFILE;
		}
		
	}
}