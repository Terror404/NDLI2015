<!DOCTYPE html>
<html>

<head>

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://isotope.metafizzy.co/v1/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="../javascript/bootstrap/js/bootstrap.min.js"></script>

	<!--css-->
	<link rel="stylesheet" type="text/css" href="../stylesheets/global.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap/css/bootstrap.min.css">

</head>
<body>
<header>
	<div class="row">
  		<div class="col-xs-12 col-md-12" style="background-color:blue; height:50px;">

  		</div>
	</div>
</header>

<nav class="navbar navbar-default">
	<div class="row">
		<div class="col-xs-12 col-md-12" style="background-color:yellow;">
			<?php include("nav_bar.html"); ?>
		</div>
	</div>
</nav>

<main>

  	<div id="container">
	    <div class="item red"></div>
	    <div class="item blue"></div>
	    <div class="item green"></div>
	    <div class="item yellow"></div>
	    <div class="item red"></div>
	    <div class="item blue"></div>
	    <div class="item green"></div>
	    <div class="item yellow"></div>
	    <div class="item red"></div>
	    <div class="item blue"></div>
	    <div class="item green"></div>
	    <div class="item yellow"></div>
	    <div class="item red"></div>
	    <div class="item blue"></div>
	    <div class="item green"></div>
	    <div class="item yellow"></div>
	    <div class="item red"></div>
	    <div class="item blue"></div>
	    <div class="item green"></div>
	    <div class="item yellow"></div>
	</div>
  

<script type="text/javascript">
	   var $container = $('#container'),
        $checkboxes = $('#filters input');

    $container.isotope({
        itemSelector: '.item',
 

    });


</script>


</main>

<footer>
	<div class="row">
  		<div class="col-xs-12 col-md-12" style="background-color:blue; height:50px;"></div>
	</div>
</footer>
</body>
</html>

