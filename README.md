# simpleweather

This is a simple app to retrieve the current weather anywhere on Earth. The form uses the Google Places API to suggest autocompletions as the user types. When the form is submitted, an AJAX request is sent to a php file which retrieves the latitude and longitude of the user entry via Google's API, then uses that information to make an API call to Darksky.