<?php

/* Settings */

$radius = 60;
$maxRows = 10;
$username = "skogmo";

$lat = 58.8524400;
$lng = 5.7352100;

$locations = simplexml_load_file("http://api.geonames.org/findNearbyPlaceName?lat=$lat&lng=$lng&radius=$radius&maxRows=$maxRows&localCountry=NO&username=$username");


foreach ($locations as $location)
{

	$name = $location->name;
	$lat  = $location->lat;
	$lng  = $location->lng;

	$forecast = simplexml_load_file("http://api.yr.no/weatherapi/locationforecast/1.8/?lat=$lat;lon=$lng");

	echo $name," || ",$forecast->product->time->location->temperature["value"];
	echo "<br />";
}



?>