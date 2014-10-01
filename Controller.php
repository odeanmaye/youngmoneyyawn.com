<?php
include_once "View.php";
include_once "Models/Video.php";
include_once "Models/Image.php";

class Controller {
	
	private $view;
	
	public function __construct(){
		$this->view = new View();
	}
	
	public function index(){
		$this->view->render("index");
	}
	
	public function media(){
		//Get videos from youtube
		$video = new Video();
		$this->view->videos = $video->youtube();
		
		//Get videos from instagram
		$image = new Image();
		$this->view->images = $image->instagram();
		
		$this->view->render("media");
	}
	
	public function music()
	{
		$this->view->render("music");
	}
	
	public function bio()
	{
		$this->view->render("bio");
	}
	
}