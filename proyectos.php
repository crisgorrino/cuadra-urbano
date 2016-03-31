<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cuadra Urbanismo - Proyectos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body class="proyectos">
		<!--header include-->
		<?php include('includes/header.php') ?>
		<!--header include-->
		
		<div class="mast proyectos">
			<video autoplay loop poster="" id="bgvid">
				<!--<source src="polina.webm" type="video/webm">-->
				<source src="img/videos/oaxaca.mp4" type="video/mp4">
			</video>
		</div>
		
		<div class="white-bg cf">
		<div class="container bg-gray">
			<div class="inner cf tab-container" id="tab-containerp">
				<h1 class="left">Proyectos</h1>
				
				<ul class='proy-filters etabs'>
					<li class='filter tab'><a href="#us">US</a></li>
					<li class='filter tab'><a href="#iu">IU</a></li>
					<li class='filter tab'><a href="#tic">TIC</a></li>
					<li class='filter tab'><a href="#epm">EPM</a></li>
					<li class='filter tab'><a href="#pp">PP</a></li>
				</ul>
				<div class="clear"></div>
				
					<?php include('proyectos/us.php');?>
					
					<?php include('proyectos/iu.php');?>
					
					<?php include('proyectos/tic.php');?>
					
					<?php include('proyectos/epm.php');?>
					
					<?php include('proyectos/pp.php');?>
											
			</div>
		</div>
		</div>
		<!--JS includes-->
		<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script> 
		<script src="js/jquery.hashchange.min.js" type="text/javascript"></script>
		<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
		
		 <script type="text/javascript">
		    $(document).ready( function() {
		      $('#tab-containerp').easytabs();
		    });
		</script>		
    </body>
</html>