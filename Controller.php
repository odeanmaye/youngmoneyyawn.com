<?php
include_once "View.php";
include_once "Models/Video.php";

class Controller {
	
	private $view;
	
	public function __construct(){
		$this->view = new View();
	}
	
	public function index(){
		$video = new Video();
		$this->view->videos = $video->youtube();
		$this->view->render("index");
	}
	
}