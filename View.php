<?php
class View {
	
	const ERROR_VIEWFILE = "Views/error.phtml";
	
	public function render($view){
		
		$viewfile = __DIR__ ."/Views/".$view.".phtml";
		$this->getView($viewfile);	
	}
	
	public function getHead() {
		$viewfile = __DIR__ ."/Views/Helpers/head.phtml";
		$this->getView($viewfile);
	}
	
	public function getHelper($view) {
		$viewfile = __DIR__ ."/Views/Helpers/".$view.".phtml";
		$this->getView($viewfile);
	}
	
	private function getView($viewfile) {
		if(file_exists($viewfile)){
			include $viewfile;
		} else {
			include self::ERROR_VIEWFILE;
		}
	}
}