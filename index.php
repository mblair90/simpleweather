<?php 
	// config.php stores the API keys, hidden from Github via gitignore
	include 'includes/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Weather</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="container">
		<div id="search-form">
			<form id="my-form">
				<input type="text" id="location" placeholder="Enter location...">
				<input type="image" id="weatherbtn" src="includes/img/search.png" alt="Search">
			</form>
		</div>
	</div>

	<div class="current-details">
		<div class="details">
			<span class="label">Wind: </span><span id="wind-speed"></span>
		</div>
		<div class="details">
			<span class="label">Humidity: </span><span id="humidity"></span>
		</div>
		<div class="details">
			<span class="label">Dew Pt: </span><span id="dew-point"></span>
		</div>
		<div class="details">
			<span class="label">UV: </span><span id="uv-index"></span>
		</div>
	</div>

	<div class="container">
		<div>
			<span id="current"></span>
		</div>
		<div>
			<span id="hourly-summary"></span>
		</div>
	</div>

	<div id="blurb" class="container">
		<p>This is a simple app to retrieve the current weather anywhere on Earth. The form uses the Google Places API to suggest autocompletions as the user types. When the form is submitted, an AJAX request is sent to a php file which retrieves the latitutde and longitude of the user entry via Google's API, then uses that information to make an API call to Darksky. </p>
	</div>


	<div id="loading"><img src="includes/img/eclipse.gif"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="includes/scripts.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_key; ?>&libraries=places&callback=activatePlacesSearch"></script>
</body>
</html>