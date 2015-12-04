<?php
require '../class/class_article.php';

if (isset($_POST) && !empty($_POST)) {

	$article = New Article();

	$article->setTitle($_POST['title']);
	$article->setContent($_POST["content"]);
	$article->setIdAuthor($_POST["idAuthor"]);
	$article->setIdDisaster($_POST["idDisaster"]);
        $disaster->setDateCreation(date("Y-m-d H:i:s"));

	$article->create();
	var_dump($article);exit;
}


?>