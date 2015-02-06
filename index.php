
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cantix - One Page HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/cssloader.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" title="ori"/>
	<link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/dark4.css"/>		
	<!-- Color -->
	<link rel="stylesheet" type="text/css" href="assets/css/demo/color-picker.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/blue.css" title="blue"/>
	<link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/yellow.css" title="yellow"/>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  </head>

  <body data-spy="scroll" data-offset='90'>
	<!-- Color Picker -->
	<div id="color-picker">
	    <h3>CHANGE SKIN <a href="#"><i class="fa fa-cogs"></i></a></h3>
		<div id="options">
			<ul class="colors thumbs">
				<li><a href="#" class="ori" onclick="setActiveStyleSheet('ori'); return false;"></a></li>
				<li><a href="#" class="yellow" onclick="setActiveStyleSheet('yellow'); return false;"></a></li>
				<li><a href="#" class="blue" onclick="setActiveStyleSheet('blue'); return false;"></a></li>
			</ul>
		</div>
	</div>	
  

	<table class="doc-loader">
	  <tr>
		<td>
			<div class="mapPreLoading">
				<span class="l-1"></span>
				<span class="l-2"></span>
				<span class="l-3"></span>
				<span class="l-4"></span>
				<span class="l-5"></span>
				<span class="l-6"></span>
			</div>
		</td>
	  </tr>
	</table>
	
<div class="scroll-contain">
<div class="scroll">

	<?php require_once '_sections/home.php' ?>

    <?php require_once '_includes/header.php'; ?>
		
	<?php require_once '_sections/about.php' ?>
	
	<?php require_once '_sections/services.php' ?>
		
	<?php require_once '_sections/price.php' ?>

	<?php require_once '_includes/parallax.php' ?>
		
	<?php require_once '_sections/team.php' ?>

	<?php require_once '_sections/work.php' ?>

	<?php require_once '_sections/contact.php' ?>

	<?php require_once '_includes/footer.php' ?>
</div>
</div>

    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="assets/js/nav/sscr.js"></script> 
	<script type="text/javascript" src="assets/js/nav/jquery.sticky.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="assets/js/appear.js"></script>
	<script type="text/javascript" src="assets/js/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" src="assets/js/filterable/jquery.quicksand.js"></script>
	<script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="assets/js/gmap/jquery.gmap.min.js"></script>
	<script type="text/javascript" src="assets/js/gmap/map.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="assets/js/demo/styleswitcher.js"></script> 
	<script type="text/javascript" src="assets/js/demo/color-picker.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
