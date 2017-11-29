<?php
		/*debug*/
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	/*get acess coin*/
		require_once("fenixedu-sdk/FenixEdu.class.php");
		$fenixEduClient = FenixEdu::getSingleton();
		$token = $fenixEduClient->getAccessTokenFromCode($_GET['code']);
		//print_r($token);

	/*biblioteca de cliente*/
		require ('client_lib.php');
		require ('api_fenix_client.php');
		require ('php_functions.php');

	/*get data from client and initialization of the object*/
		$client = new client(REST_getClientData($fenixEduClient));
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>LogRooms - Área de Cliente</title>
	<script src="client.js"></script>
</head>
<body>
 <div>
 	<h2> Client Area </h2>
 	<h3>  <?php $client->displayClient();?> </h3>	
 </div>

<div style = "width: 100%">

	 <div style = "float:left; width: 50%"> 
	 	<div>
			 <h3> Sala a ser utilizada</h3> 
			 <p id="usedRoom"></p>
	 	</div>
	 	
	 	<div>
	 		<h3> Pessoas nas sala </h3>
	 	</div>
	 	
	 	<div>
	 		<h3>Mensagem do administrador</h3>
	 	</div>
	 </div>

	 <div style = "float:right; width: 50%"> 
	 		<h3>Search Room</h3>
	 		<! Para imprimir as ipçoes, tem de receber um dicionario com os campos a imprimir. 
	 		Depois de escolher uma opçao tenho de saber o seu ID !>
	 		Campus: 
	 		<select name = "campus">
	 		<?php
	 			//recebe um array de objetos
	 			$campus=REST_getCampus($fenixEduClient);
	 			print_options_obj($campus);
	 		?>		
	 		</select>
	 		<button onclick="myFunction()">Check In</button>
	 		<script>
	 			function myFunction(){
	 				var inpObj=document.select["campus"].value;
	 				document.getElementById("usedRoom").innerHTML="Está na sala";
	 			}
	 		</script>
	 		


	 </div>
</div>		 
</body>
</html>