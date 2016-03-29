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
					<p>Somos una oficina dedicada a desarrollar e implementar estrategias innovadoras para conocer y resolver los desafíos urbanos.</p>
				</div>
				
				<h5 class="border-top-red">Vinculamos los esfuerzos de los distintos actores sociales para co-crear la ciudad en la que todos deseamos vivir.</h5>
			
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
				
				<h6 class="border-top-red">Vinculamos los esfuerzos de los distintos actores sociales para co-crear la ciudad en la que todos deseamos vivir.</h6>
				
				<img src="img/inicio/q-hacemos-img.jpg" alt="Cuadra que hacemos" class="home-imgs">
				
				<div class="p-cont2 cf">
					<span class="side-border"></span>
					<h3>02</h3>
					<h4>Planeamos</h4>
				</div>
				
				<h6 class="border-top-red">La complejidad de los procesos urbanos hacen necesario el desarrollo de estrategias integrales eficaces y congruentes. </h6>
				
				
				<img src="img/inicio/q-hacemos-img.jpg" alt="Cuadra que hacemos" class="home-imgs">
				
				<div class="p-cont2 cf">
					<span class="side-border"></span>
					<h3>03</h3>
					<h4>Resolvemos</h4>
				</div>
				
				<h6 class="border-top-red">En Cuadra hemos estructurado nuestros productos y servicios para abordar de forma integral los retos de la ciudad. </h6>


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
					if (imagePos < topOfWindow+700) {
						$(this).addClass("fadeIn");
					}
				});
				
				$('h6.border-top-red').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+700) {
						$(this).addClass("slideLeft");
					}
				});
				
				
				
		    });
		</script>
		
    </body>
</html>