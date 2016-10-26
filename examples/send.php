<?php

print("Hello World");
$url = $_GET['url'];

print($url);

require_once '../src/twitter.class.php';

$consumerKey = '';
$consumerSecret = '';
$accessToken = '';
$accessTokenSecret = '';

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

try {
	$tweet = $twitter->send($url); // you can add $imagePath as second argument

} catch (TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
}
