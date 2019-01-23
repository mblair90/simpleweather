function currentWeather(location) {
	var url = "includes/darksky.php";
	// Send ajax request to darksky.php which uses a curl request to get data from API
	$.get(url, {location: location}, function(res) {
		// Data returned is text so use JSON.parse to make it JS object
		var data = JSON.parse(res);
		console.log(data);
		// Set various variables
		var temperature = Math.round(data.currently.temperature);
		var wind_speed = Math.round(data.currently.windSpeed);
		var humidity = Math.round(data.currently.humidity * 100);
		var dew_point = Math.round(data.currently.dewPoint);
		var uv_index = Math.round(data.currently.uvIndex);
		var summary = data.currently.summary;
		var hourly_summary = data.hourly.summary;
		// Print to html
		$('#wind-speed').html(wind_speed + "mph");
		$('#humidity').html(humidity + "%");
		$('#dew-point').html(dew_point + "°F");
		$('#uv-index').html(uv_index);
		$('#current').html(temperature + "°F " + summary);
		$('#hourly-summary').html(hourly_summary);
	});
}

// The callback function in the Google API script tag to initiate the autocomplete box
function activatePlacesSearch() {
	var input = document.getElementById('location');
	// Create new autocomplete object with input box
	var autocomplete = new google.maps.places.Autocomplete(input);
}

// What to be done when the page loads
$(document).ready(function() {

	// Event handler for when search form is submitted
	$('#my-form').submit(function(e) {
		// Prevent form from submitting and redirecting page
		e.preventDefault();
		// Set the entered address to a variable
		var location = $('#location').val();
		currentWeather(location);
	})

	// Ajax event shows loading spinner
	$(document).ajaxStart(function() {
		$('#loading').css('display', 'flex');
	});
	$(document).ajaxComplete(function() {
		$('#loading').css('display', 'none');
	});

});