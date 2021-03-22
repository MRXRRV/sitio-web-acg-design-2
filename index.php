<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina web example</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?<?php print date('Y-m-d H:i:s'); ?>">
	<!-- para las ilustraciones es ingresar a la pagina undraw.co -->
	<!-- para trabajar en responsive -->
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- se usa libreria aos para las animaciones -->
	<link rel="stylesheet" type="text/css" href="js/aos/dist/aos.css">
	<!-- se usa libreria aos para las animaciones -->
</head>
<body>
	<header>
		<nav>
			<section class="contenedor nav">
				<div class="logo">
					<img src="img/logo-jordan-alexander.png" alt="">
				</div>
				<div class="enlaces-header">
					<a href="#">inicio</a>
					<a href="#">inicio</a>
					<a href="#">inicio</a>
					<a href="#">inicio</a>
					<a href="#">inicio</a>
					<a href="#">inicio</a>
					<a href="#">inicio</a>
				</div>
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
			</section>
		</nav>
		<div class="contenedor">
			<section class="contenido-header">
				<section class="textos-header">
					<h1>Our creatyvity is your success</h1>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, laboriosam.</p>
					<a href="#">Learn more</a>
				</section>
				<img src="img/primeraIlustracion.svg" alt="">
			</section>
		</div>
	</header>
	<section class="about-us">
		<div class="contenedor1">
			<h2 class="titulo">We provide a wide range</h2>
			<div class="contenedor-articulo">
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-pen-fancy"></i>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-code"></i>
					<h3>Web Design</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-chart-pie"></i>
					<h3>Video Production</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-comments"></i>
					<h3>SEO</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-chart-bar"></i>
					<h3>Marketing</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo" data-aos="zoom-in-right">
					<i class="fas fa-cog"></i>
					<h3>Inphograpics</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
			</div>
		</div>
	</section>
	<section class="questions contenedor">
		<section class="textos-questions">
			<h1>Our creatyvity is your success</h1>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, laboriosam.</p>
			<a href="#">Learn more</a>
		</section>
		<img src="img/segundaIlustracion.svg" alt="" data-aos="zoom-out-up" data-aos-duration="2000">
	</section>
	<section class="results">
		<div class="contenedor1 conten-results">
			<section class="numbers">
				<div class="number" data-aos="zoom-in-left">
					<h4>+2322</h4>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
				</div>
				<div class="number" data-aos="zoom-in-left">
					<h4>+2322</h4>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
				</div>
				<div class="number" data-aos="zoom-in-left">
					<h4>+2322</h4>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
				</div>
				<div class="number" data-aos="zoom-in-left">
					<h4>+2322</h4>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
				</div>
			</section>
			<section class="results-text">
				<h4>Lorem, ipsum dolor sit amet.</h4>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, fuga.</p>
				<a href="#">Ingrese aqui</a>
			</section>
		</div>
	</section>
	<section class="contenedor1 service">
		<img src="img/terceraIlustracion.svg" alt="" data-aos="zoom-in-right" data-aos-duration="3000">
		<div class="box-skills">
			<h4><i class="fa fa-check-circle"></i> Web design</h4>
			<h4><i class="fa fa-check-circle"></i> Web develovment</h4>
			<h4><i class="fa fa-check-circle"></i> SEO</h4>
			<h4><i class="fa fa-check-circle"></i> Marketing</h4>
			<h4><i class="fa fa-check-circle"></i> Web support</h4>
		</div>
	</section>
	<footer>
		<div class="part-footer">
			<img src="img/logo-jordan-alexander.png" alt="">
		</div>
		<div class="part-footer">
			<h4>Servicios</h4>
			<a href="#">services 1</a>
			<a href="#">services 2</a>
			<a href="#">services 3</a>
		</div>
		<div class="part-footer">
			<h4>Acerca de</h4>
			<a href="#">about 1</a>
			<a href="#">about 2</a>
			<a href="#">about 3</a>
		</div>
		<div class="part-footer">
			<h4>Redes sociales</h4>
			<div class="social-media">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-youtube"></i>
			</div>
		</div>
	</footer>
</body>
<script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
<script src="js/main.js?<?php print date('Y-m-d H:i:s'); ?>"></script>
<!-- se usa libreria aos para las animaciones -->
<script src="js/aos/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<!-- se usa libreria aos para las animaciones -->
</html>