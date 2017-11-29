<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


class turma{

 	public $ano;
 	public $letra;
 	public $num_students;
 	public $students = array();
	
	/*funcao que cria uma turma*/
	function createTurma($ano, $letra){
		$new_turma = new turma();
		$new_turma->ano = $ano;
		$new_turma->letra = $letra;
		$new_turma->num_students = 0; /* numero de estudantes*/
		return $new_turma;
	}
	
	/*funcao que imprime a turma*/
	function displayTurma(){
		echo "<p>Esta e a turma " . $this->ano . $this->letra . "<p>"; 
	}
	
	/*funcao que insere um aluno no array $students que esta no objeto turma*/
	function insertStudent($student){
		$num=$this->num_students + 1;
		$this->num_students=$num;
		$this->students[$num] = $student; /* inserer no array um $student na posição $num*/
	}

	function displayAllStudents(){
		foreach ($this->students as $key => $value) { /* percorre todos os elementos do array */
			$this->students[$key]->displayPerson();
		}
	}

	function deleteStudent($student){
		echo array_search($student, $this->students->name);
		/*unset($this->students[array_search($student, $this->students)]);*/

	}


}

ini_set('display_errors', 1);
error_reporting(E_ALL);


include 'person.php';


$turma = new turma();
$turma1 = $turma->createTurma("11", "A");

$student = new person();

$turma1->insertStudent($student->create_person("Rodrigo", 19));
$turma1->insertStudent($student->create_person("Pedro", 22));
$turma1->insertStudent($student->create_person("Coelho", 22));

$turma1->displayAllStudents();

$turma1->deleteStudent("Coelho");

$turma1->displayAllStudents();

?>

</body>
</html>

