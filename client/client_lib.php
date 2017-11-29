<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
* 
*/
class client
{
	
	public $name;
	public $ist_id;
	
	function __construct($user)
	{
		$this->name = $user['name'];
		$this->ist_id = $user['username'];
	}

	function displayClient(){
		echo "Utilizador: ". $this->name . " " . $this->ist_id;
	}
	
	//recebe um array de objetos e imprime os elementos 
	// inputs: array, key, atributo do objeto a ser imprimido

}














?>
