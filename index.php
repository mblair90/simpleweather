<!DOCTYPE html>
<html>
<head>
	<title>Simple Weather</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div id="search-form">
			<input type="text" name="location" id="location" placeholder="Enter location...">
			<input type="image" id="weatherbtn" name="submit" src="includes/img/search.png" alt="Search">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="includes/scripts.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApYWN4wZW9RjPVDMBWNJYpGSMV4t4wAyc&libraries=places&callback=activatePlacesSearch"></script>
</body>
</html>