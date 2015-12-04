<?php
require '../class/class_answer.php';

if (isset($_POST) && !empty($_POST)) {

	$answer = New Answer();
        $answer->setContent($_POST['content']);
	$answer->setIdQuestion($_POST["idQuestion"]);
	$answer->setIdAuthor($_POST["idAuthor"]);

	$answer->create();
	var_dump($answer);exit;
}


?>