<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
* 
*/

// REST Request API to get a user and is data
function REST_getClientData($fenixClient){
	$user = (array)$fenixClient->getPerson();
	return $user; 
}

function REST_getCampus($fenixClient){
	 $campus = $fenixClient->getSpaces();

	 return $campus;
}



?>