<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cuadra Urbanismo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/animations.css">
    </head>
    <body class="inicio">
		<!--header include-->
		<?php include('includes/header.php') ?>
		<!--header include-->
		
		<div class="mast inicio">
			<video autoplay loop poster="" id="bgvid">
				<!--<source src="polina.webm" type="video/webm">-->
				<source src="img/videos/home.mp4" type="video/mp4">
			</video>
		</div>
		
		<div class="home">
		<div class="container">
			<div class="inner cf">
				<h1>¿Qué es Cuadra Urbanismo?</h1>
				
				<div class="p-cont cf">
					<span class="side-border"></span>
					<p>Somos una oficina dedicada a desarrollar e implementar estrategias innovadoras para conocer y resolver los desafíos urbanos. Vinculamos los esfuerzos de los distintos actores sociales para co-crear la ciudad en la que deseamos vivir.</p>
				</div>
				
				<h5 class="border-top-red">Aprovechamos la inteligencia comunitaria de los distintos actores sociales para co-crear la ciudad en la que todos queremos vivir</h5>
			
			</div>
		</div>
		
		<!--que hacemos-->
		<div class="container bg-gray">
			<div class="inner cf ">
				<h2>¿Qué hacemos?</h2>
				<img src="img/inicio/q-hacemos-img.jpg" alt="Cuadra que hacemos" class="home-imgs">
				
				<div class="p-cont2 cf">
					<span class="side-border"></span>
					<h3>01</h3>
					<h4>Vinculamos</h4>
				</div>
				
				<h6 class="border-top-red">Aprovechamos la inteligencia comunitaria de los distintos actores sociales para co-crear la ciudad en la que todos queremos vivir.</h6>
				
				<img src="img/inicio/q-hacemos-img.jpg" alt="Cuadra que hacemos" class="home-imgs">
				
				<div class="p-cont2 cf">
					<span class="side-border"></span>
					<h3>02</h3>
					<h4>Planeamos</h4>
				</div>
				
				<h6 class="border-top-red">Aplicamos métodos y técnicas profesionales para definir los retos, identificar las oportunidades y  diseñar rutas de acción congruentes con prospectiva de largo plazo.</h6>
				
				
				<img src="img/inicio/q-hacemos-img.jpg" alt="Cuadra que hacemos" class="home-imgs">
				
				<div class="p-cont2 cf">
					<span class="side-border"></span>
					<h3>03</h3>
					<h4>Intervenimos</h4>
				</div>
				
				<h6 class="border-top-red">Ejecutamos proyectos creativos de activación en el espacio público, para fortalecer el tejido social y potenciar el cambio social.</h6>


			</div>
		</div>
		</div>	
		<!--que hacemos-->
		<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script> 
		<script>
			$(window).scroll(function() {
				$('.home-imgs').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+400) {
						$(this).addClass("slideRight");
					}
				});
				
				$('.p-cont2').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+950) {
						$(this).addClass("fadeIn");
					}
				});
				
				$('h6.border-top-red').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+950) {
						$(this).addClass("slideLeft");
					}
				});
				
				
				
		    });
		</script>
		
    </body>
</html>