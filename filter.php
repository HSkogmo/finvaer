<?php

class Filter {
	

	function get_top_3_warmest_places( $places )
	{
		
		function compare_temp($a,$b)
		{
			if($a['temperature'] == $b['temperature']) return 0;
			return ($a['temperature'] < $b['temperature']) ? 1 : -1;
		}

		usort($places, 'compare_temp');

		$result = array_splice($places, 0, 3);

		return $result;

	}
}