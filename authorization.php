<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php 

		require_once("fenixedu-sdk/FenixEdu.class.php");
			 
		$fenixEduClient = FenixEdu::getSingleton();
		$authorizationUrl = $fenixEduClient->getAuthUrl();
		header(sprintf("Location: %s", $authorizationUrl));

		 /*if(isset($_GET['error'])) {
		    echo "NÃ£o deu authorizaÃ§Ã£o";
		  } else if(isset($_GET['code'])) {
		    $code = $_GET['code'];
		    $fenixEduClient = FenixEduClient::getSingleton();
		    $fenixEduClient->setCode($code);
		    $accessToken = $fenixEduClient->getAccessToken();
		    $refreshToken = $fenixEduClient->getRefreshToken();
		  }*/

		?>
</body>
</html>