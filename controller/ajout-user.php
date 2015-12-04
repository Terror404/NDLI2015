<?php
require '../class/class_user.php';

if (isset($_POST) && !empty($_POST)) {

	$user = New User();

	$user->setName($_POST['name']);
	$user->setMail($_POST["mail"]);
	$user->setPhoto("");
	$user->setRole($_POST["role"]);

	$user->create();
	var_dump($user);exit;
}


?>