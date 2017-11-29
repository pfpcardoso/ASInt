<?php
class person{

	public $name; // string 
	public $age; //string
	public $num;
	
	function create_person($name, $age){
		$new_person = new person();
		$new_person->name = $name;
		$new_person->age = $age;
		return $new_person;
	}

	function displayPerson() {
		echo "<p>Hello, my name is " . $this->name . " and I am " . $this->age. "<p>";
 	}



}


?>
