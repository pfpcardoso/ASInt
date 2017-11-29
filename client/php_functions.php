<?php
		/*debug*/
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);



		function print_options_obj($array){
			foreach($array as $campus) {
				//passa cada objeto para um array;
				$campus = (array)$campus;
				echo "<option value=".$campus["name"].">".$campus["name"]."</option>";
			}
		}
?>