<?php
/*
$ch = curl_init();
 
//set the endpoint url
curl_setopt($ch,CURLOPT_URL, 'https://api.twitter.com/oauth2/token');
// has to be a post
curl_setopt($ch,CURLOPT_POST, true);
$data = array();
$data['grant_type'] = "client_credentials";
curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
 
// here's where you supply the Consumer Key / Secret from your app:
$consumerKey = 't0iX3noR4eXUBk5U5hPsHoM3O';
$consumerSecret = 'TPZb2IorgYnYs9foCLVge4fF9K6GyyLlOEMFpyu5RfAycFL5vk';           
curl_setopt($ch,CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
 
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
 
//execute post
$result = curl_exec($ch);
 
//close connection
curl_close($ch);
 
// show the result, including the bearer token (or you could parse it and stick it in a DB)       
print_r($result);
*/

function getTweets($hashtag = "passionhour", $amount = 5) {
	$username = 'grapheme_ru';
	$number_tweets = $amount;
	$feed = "https://api.twitter.com/1.1/search/tweets.json?q=%23".$hashtag."&result_type=recent";

	//$cache_file = '/srv/www/extreme_hour/tmp/twitter-cache';
	$cache_file = getcwd().'/cache/twitter-cache-'.$hashtag;
	$modified = @filemtime( $cache_file );
	$now = time();
	$interval = 600; // ten minutes

	// check the cache file
	if ( !$modified || ( ( $now - $modified ) > $interval ) ) {
	  $bearer = 'AAAAAAAAAAAAAAAAAAAAAHAEYQAAAAAAaPcpRqKG0KqFtpC7980ytxxx6cw%3DIux7SHjxOxcnjJfuXsGkEsPJ8sG8xCHcbDfdWPVorpcQuCEs8r';
	  $context = stream_context_create(array(
	    'http' => array(
	      'method'=>'GET',
	      'header'=>"Authorization: Bearer " . $bearer
	      )
	  ));
	  
	  $json = file_get_contents( $feed, false, $context );
	  
	  if ( $json ) {
	    $cache_static = fopen( $cache_file, 'w' );
	    fwrite( $cache_static, $json );
	    fclose( $cache_static );
	  }
	}

	$json = file_get_contents( $cache_file );

	return json_decode($json);
}