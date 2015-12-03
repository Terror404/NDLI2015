<?php
echo 'Bienvenue sur NDLI2015';

$page = $_GET['page'];




if ($page == 'article') {

	echo "article";

} elseif ($page == 'home') {

	echo "home";

} elseif ($page == 'faq') {

	

} elseif ($page == 'ajout-disaster') {

	include "/views/disaster/add_disaster_form.php";

}









?>
