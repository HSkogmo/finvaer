<?php

/* Loading API classes */
require('api.met.php');
require('api.geonames.php');

/* Loading the user class */
require('user.php');
require('filter.php');
require('view.php');

$user = new User();

$user->set_location($_GET['latitude'], $_GET['longitude']);

$geonames = new Geonames( $_GET['radius'] );

$nearbyPlaces = $geonames->nearby_places( $user->get_location() );

$met = new Met();

$nearbyPlaces = $met->add_forecast( $nearbyPlaces );

$filter = new Filter();

$filtered = $filter->get_top_3_warmest_places( $nearbyPlaces );

$view = new View();

$view->view_top_3_warmest( $filtered );