<?php
require '../class/class_category.php';

if (isset($_POST) && !empty($_POST)) {

	$category = New Category();

	$category->setName($_POST['name']);
	$category->setDescription($_POST["description"]);
	$category->setPicture("");

	$category->create();
	var_dump($category);exit;
}


?>