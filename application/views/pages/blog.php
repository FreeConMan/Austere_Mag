<?php

	$request_url = "http://austeremag.tumblr.com/api/read?start=0&type=text";
	$xml = simplexml_load_file($request_url);
	$title = $xml->posts->post->{'regular-title'};
	$post = $xml->posts->post->{'regular-body'};
	$link = $xml->posts->post['url'];
	echo '<h1>'.$title.'</h1>';
	echo '<p>'.$post.'</p>';


	// $request_url = "http://austeremag.tumblr.com/api/read?start=0&type=photo"
	// $photo = $xml->posts->post->{'photo-caption'};
	// $photo_url = $xml->posts->post->{'photo-url'};
	// echo '<h1'>.$photo.'</h1>';
?>