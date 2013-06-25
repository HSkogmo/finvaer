<?php

class Met {

	function add_forecast($places)
	{
		foreach($places as $key => $place)
		{
			$request = simplexml_load_file('http://api.yr.no/weatherapi/locationforecast/1.8/?lat='.$place['latitude'].';lon='.$place['longitude']);
			$places[$key]['temperature'] = (string) $request->product->time->location->temperature['value'];
		}

		return $places;
	}

}