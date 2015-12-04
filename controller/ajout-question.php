<?php
require '../class/class_question.php';

if (isset($_POST) && !empty($_POST)) {

	$question = New Question();

	$question->setContent($_POST['content']);
	$question->setIdCategory($_POST["idCategory"]);

	$question->create();
	var_dump($question);exit;
}


?>