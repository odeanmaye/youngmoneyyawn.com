<?php
include_once dirname(__DIR__)."/Library/Curl.php";

class Image {
	public function instagram(){
		$url = 'http://beta.api.jamedy.com/images/instagram?user={"ig_id":"260512959"}&auth=11111111111111111';
		$response = Curl::execute($url);
		return json_decode($response);
		
	}
}