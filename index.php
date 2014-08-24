<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/css3-buttons.css">
		<link rel="stylesheet" href="http://ol3js.org/en/master/css/ol.css" type="text/css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="http://ol3js.org/en/master/build/ol.js" type="text/javascript"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class="container">
			<div class="header">
				<span class="map-name" >DeciesGraph</span>
				<div class="menu" >
				<?php if( isset($_SESSION["user"])){ ?>
					<button class="action blue"><span class="label">Save</span></button>
					<div class=" dropdown">
					  <a href="#" class="button"><span class="icon icon191">&nbsp;</span><span class="label">Username</span><span class="toggle">&nbsp;</span></a>
					  <div class="dropdown-slider">
						<a href="#" class="ddm"><span class="icon icon96">&nbsp;</span><span class="label">Settings</span></a>
						<a href="#" class="ddm"><span class="icon icon151">&nbsp;</span><span class="label">Log Out</span></a>
					  </div> <!-- /.dropdown-slider -->
					</div> <!-- /.dropdown -->
				<?php }else{ ?>
					<button class="action blue"><span class="label">Login</span></button>
				<?php } ?>
			</div>
			</div>
			<div class="toolset">
				<div class="buttons">
  <a href="#" class="button layers"><span class="icon icon181">&nbsp;</span><span class="label">Layers</span></a>
</div> <!-- /.buttons -->
			</div>
			<div id="map" class="map"></div>
		</div>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
		
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
        
		<div class="side-panel">
			<span id="title">Layers<b style="float:right">+</b></span>
			<div class="layer">
				<div class="buttons">
  <a href="#" class="button plain"><span class="icon icon84">&nbsp;</span></a>
  </div><span style="
">OpenStreetMap</span>
			</div>
		<div>
    </body>
</html>
