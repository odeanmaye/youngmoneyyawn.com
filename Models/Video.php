<?php
include_once dirname(__DIR__)."/Library/Curl.php";

class Video {
	public function youtube(){
		$url = 'http://api.jamedy.com/videos/youtube?user={"ytb_id":"UC-mvIb_JcMt-JUMCdZuDx4w"}&count=30';
		$response = Curl::execute($url);
		return json_decode($response);
		
	}
}