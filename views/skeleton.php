<!DOCTYPE html>
<html>

<head>

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.js"></script>
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
	<div class="col-xs-12 col-md-12" style="background-color:yellow;">
		<?php include("nav_bar.html"); ?>
	</div>
</nav>

<main>

	<style type="text/css"> 
body {
  font-family:'Helvetica Neue', Arial, sans-serif;
}

.item {
  width: 200px;
  height: 200px;
  margin: 3px;
  float: left;
  
  
}
.item.next {
    width: 60px;
    height: 60px;
    border: 5px solid black;
    border-radius: 35px;
}
.red {
    background: red;
}
.blue {
    background: blue;
}
.green {
    background: green;
}
.yellow {
    background: yellow;
}
/* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/
.isotope-item {
    z-index: 2;
}
.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}
/**** Isotope CSS3 transitions ****/
 .isotope, .isotope .isotope-item {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    transition-duration: 0.8s;
}
.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    transition-property: height, width;
}
.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    transition-property: transform, opacity;
}
/**** disabling Isotope CSS3 transitions ****/
 .isotope.no-transition, .isotope.no-transition .isotope-item, .isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    transition-duration: 0s;
}
/* End: Recommended Isotope styles */

	</style>
<div class="row">
  <div class="col-sm-12 col-md-10 col-md-offset-1">
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
  </div>
</div>

<script type="text/javascript">
	   var $container = $('#container'),
        $checkboxes = $('#filters input');

    $container.isotope({
        itemSelector: '.item'
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

