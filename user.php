<?php

class User {
	
	private $latitude;
	private $longitude;

	private $coordinates;

	function __construct()
	{
		$this->coordinates = array(
			'latitude' 	=> NULL,
			'longitude'	=> NULL
		);
	}

	function set_location($latitude, $longitude)
	{
		$this->coordinates['latitude'] = $latitude;
		$this->coordinates['longitude'] = $longitude;
	}

	function get_location()
	{
		return $this->coordinates;
	}
}