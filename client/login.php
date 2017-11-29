<?php

	require_once("fenixedu-sdk/FenixEdu.class.php");
	$fenixEduClient = FenixEdu::getSingleton();
	$authorizationUrl = $fenixEduClient->getAuthUrl();
	header(sprintf("Location: %s", $authorizationUrl));

?>