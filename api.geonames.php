<?php

class Geonames {

	private $radius;
	private $maxRows = '99999';
	private $username = 'skogmo';

	function __construct($radius)
	{
		$this->radius = $radius;
	}

	function nearby_places($coordinates)
	{

		$result = array();

		$locations = simplexml_load_file('http://api.geonames.org/findNearbyPlaceName?lat='.$coordinates['latitude'].'&lng='.$coordinates['longitude'].'&radius='.$this->radius.'&maxRows='.$this->maxRows.'&localCountry=NO&cities=cities1000&username='.$this->username);

		foreach ($locations as $location)
		{
			$result[] = array(
				'name' 		=> (string) $location->name,
				'latitude' 	=> (string) $location->lat,
				'longitude'	=> (string) $location->lng
				);
		}

		return $result;

	}

}