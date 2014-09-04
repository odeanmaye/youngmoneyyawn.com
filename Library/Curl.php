<?php
class Curl {
	public static function execute($url){
		$ch = curl_init();
		
		// Set URL to download
		curl_setopt($ch, CURLOPT_URL, $url);
		
		// Should cURL return or print out the data? (true = return, false = print)
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		// Timeout in seconds
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		
		// Download the given URL, and return output
		$output = curl_exec($ch);
		
		// Close the cURL resource, and free system resources
		curl_close($ch);
		
		return $output;
	}
}