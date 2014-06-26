<?php

function getInstaFeed($hashtag = "passionhour", $amount = 5) {

	//Query need client_id or access_token
	$query = array(
		'client_id' => '86bf1e5c98f64d4cafb5dbcaafb3820c',
		'count'		=> 10
	);

	$url = 'https://api.instagram.com/v1/tags/'.$hashtag.'/media/recent?'.http_build_query($query);

	//$cache_file = '/srv/www/extreme_hour/tmp/insta-cache';
	$cache_file = getcwd().'/cache/insta-cache-'.$hashtag;
	$modified = @filemtime( $cache_file );
	$now = time();
	$interval = 600; // ten minutes

	// check the cache file
	if ( !$modified || ( ( $now - $modified ) > $interval ) ) {
	  	try {
			$curl_connection = curl_init($url);
			curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
			curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
			
			//Data are stored in $json
			$json = curl_exec($curl_connection);
			
			curl_close($curl_connection);
		 
		} catch(Exception $e) {
			return $e->getMessage();
		}
	  
	  	if ( $json ) {
	    	$cache_static = fopen( $cache_file, 'w' );
	    	fwrite( $cache_static, $json );
	    	fclose( $cache_static );
	  	}
	}

	$json = file_get_contents( $cache_file );

	return json_decode($json, true);
}
/*
$data = getInstaFeed('часстрасти', 10);
foreach ($data['data'] as $img) {
	echo $img['images']['standard_resolution']['url']."\n";
	echo $img['user']['full_name']."\n";
	echo $img['link']."\n";
}
*/
?>