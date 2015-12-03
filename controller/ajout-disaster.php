<?php


if (isset($_POST) && !empty($_POST)) {
	$disaster = New Disaster();

	$disaster->setVille($_POST['ville']);
	$disaster->setType($_POST["type"]);
	$disaster->setDateEvent(date("Y-m-d H:i:s"));
	$disaster->setMessage($_POST["message"]);

	$disaster->create();
}


?>