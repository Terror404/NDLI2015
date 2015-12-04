<?php
require '../class/class_type_disaster.php';

if (isset($_POST) && !empty($_POST)) {

	$type_disaster = New TypeDisaster();

	$type_disaster->setName($_POST['name']);
	$type_disaster->category($_POST["category"]);
	$type_disaster->setLevel($_POST["level"]);

	$type_disaster->create();
	var_dump($type_disaster);exit;
}


?>