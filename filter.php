<?php

class Filter {
	
	function get_top_3_warmest_places( $places )
	{

		$result = array();

		foreach($places as $key => $place)
		{
			if(count($result) == 3)
			{
				usort($result, function($a, $b) {
   					return $a['temperature'] - $b['temperature'];
   				});

   				for($i = 2; $i != 0; $i--) {
   					if($result[$i]['temperature'] < $place['temperature'])
   					{
   						$result[$i] = $places[$key];
   					}
   				}
			}
			else
			{
				$result[] = $place;
			}
		}

		return $result;
	}
}