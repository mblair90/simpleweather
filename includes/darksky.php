<?php
	// config.php stores the API keys, hidden from Github via gitignore
	include 'config.php';
	// Get the data passed from the ajax call
	$location = $_GET['location'];
	// Remove the spaces in the location so that it can be passed into the API URL
	$location_formatted = str_replace(' ', '%20', $location);

	// Create new curl to the Google geocode API
	$location_curl = curl_init("https://maps.googleapis.com/maps/api/geocode/json?address=" . $location_formatted . "&key=" . $google_key);
	// Set option so that the curl doesn't automatically return data
	curl_setopt($location_curl, CURLOPT_RETURNTRANSFER, 1);
	// Set data to variable
	$location_data = curl_exec($location_curl);
	// Use json_decode to turn the returned JSON data into PHP object
	$json = json_decode($location_data);
	// Set lat and lng variables
	$lat = $json->results[0]->geometry->location->lat;
	$lng = $json->results[0]->geometry->location->lng;
	curl_close($location_curl);
	


	// Create curl to DarkSky
	$weather_curl = curl_init("https://api.darksky.net/forecast/" . $darksky_key . "/" . $lat . "," . $lng);
	// Set option so that the curl doesn't automatically return data
	curl_setopt($weather_curl, CURLOPT_RETURNTRANSFER, 1);
	// Store weather data
	$weather_data = curl_exec($weather_curl);
	// Return weather data
	echo $weather_data;
	curl_close($weather_curl);

?>