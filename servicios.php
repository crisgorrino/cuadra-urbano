<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cuadra Urbano - Servicios</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body>
		<!--header include-->
		<?php include('includes/header.php') ?>
		<!--header include-->
		
		<div class="mast">
			<img src="img/gifs/servicios.gif" alt="cuadra urbano">
		</div>
		
		<div class="servicios">
			<div  class="container">
				<div class="tab-container inner cf" id="tab-container">
					<h1 class="left">Proyectos</h1>
					  <ul class='etabs right'>
					    <li class='tab'><a href="#us">US</a></li>
					    <li class='tab'><a href="#ui">UI</a></li>
					    <li class='tab'><a href="#tic">TIC</a></li>
					    <li class='tab'><a href="#epm">EPM</a></li>
					    <li class='tab'><a href="#pp">PP</a></li>
					  </ul>
					  <div class="clear"></div>
					  <div id="us" class="cf">
					    <h2>Urbanismo Social</h2>
					    
					    	<h5 class="border-top-red">
						    La ciudad es producto de una construcción social. Desde esta perspectiva buscamos promover el enriquecimiento del capital social a través de intervenciones comunitarias que contribuyan a la mejora del entorno y el fortalecimiento de la identidad.
					    	</h5>
					    	
					    	<p>Todo proyecto urbano de alto impacto social debe contemplar la participación activa de su comunidad.<br>
					    	<br>
En Cuadra Urbanismo diseñamos plataformas de co-creación a partir de la sensibilización social y la aplicación de métodos etnográficos. El objetivo es acercar a los tomadores de decisiones con los ciudadanos y lograr así procesos democráticos de transformación urbana.</p>

							<ul>
								<li><span class="red-square"></span> Plataformas de co-creación de    proyectos (socialización)</li>
								<li><span class="red-square"></span> Activaciones urbanas     (placemaking)</li>
								<li><span class="red-square"></span> Estrategias de sensibilización y     comunicación de  proyectos     urbanos</li>
								<li><span class="red-square"></span> Rehabilitación colaborativa    de barrios (Huertos urbanos,      murales, gestión cultural, etc.)</li>
							</ul>
							
					    <!-- content -->
					  </div>
					  <div id="ui">
					    <h2>UI</h2>
					    <!-- content -->
					  </div>
					  <div id="tic">
					    <h2>TIC</h2>
					    <!-- content -->
					  </div>
					  
					  <div id="epm">
					    <h2>EPM</h2>
					    <!-- content -->
					  </div>
					  
					  <div id="pp">
					    <h2>PP</h2>
					    <!-- content -->
					  </div>
				</div> 
			</div>
		</div>
		
		
		<!--JS includes-->
		<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script> 
		<script src="js/jquery.hashchange.min.js" type="text/javascript"></script>
		<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
		
		 <script type="text/javascript">
		    $(document).ready( function() {
		      $('#tab-container').easytabs();
		    });
		</script>
    </body>
</html>