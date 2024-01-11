<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="Funciones.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
	<title>Consultores Caterpillar</title>
</head>
<body>
	<!--MENÚ-->
	<nav class="menu">
		<div class="hamburguesa" onclick="mostrar()">
			<span></span><span></span><span></span>
		</div>
		<div class="logo1">
			<img src="Imágenes/1.png">
		</div>
		<label class="logo">Consultores Caterpillar</label>
		<ul id="menu-desplegable">
			<li><span class="cerrar" onclick="ocultar()">X</span></li>
			<li><a href="panel.php">INICIO</a></li>
			<li><a href="Paginas2/Productos2.php">PRODUCTOS</a></li>
			<li><a href="consultoria.php">CONSULTORÍA</a></li>
			<li><a href="logout.php">CERRAR SESIÓN</a></li>
		</ul>
        <div class="logo3">
			<img src="Imágenes/2.png">
		</div>
	</nav>
	<!--BANNER-->
	<header>
			<div class="banner">
					<div class="texto-banner">
							<H1>¿QUIÉNES SOMOS?</H1>
							<br>
							<p>
								En Caterpillar, somos líderes en la industria de equipos pesados y maquinaria de construcción desde hace más de un siglo. Con un legado de innovación, calidad y rendimiento incomparables, nos enorgullece ofrecer soluciones sólidas para las necesidades más exigentes.
							</p>
					</div>
			</div>
	</header>
	<main>
		<section class="nosotros">
				<h1 class="titulo">MISIÓN Y VISIÓN</h1>
				<div class="linea"></div>
				<p class="contenido">
					Nuestra historia se remonta a un momento crucial en el que nuestra empresa, Caterpillar, tomó la decisión de abrirse hacia un gran respaldo en cuanto a la atención al cliente. Reconociendo la importancia de brindar un servicio excepcional, nos propusimos ofrecer una consultoría integral que abarcara tanto movimientos correctivos como preventivos para cada adquisición de productos realizada por nuestros clientes.
					<BR></BR>
					Conscientes de que cada compra es una inversión significativa para nuestros clientes, nos comprometemos a garantizar que obtengan el máximo valor de sus adquisiciones. Nuestro enfoque de consultoría va más allá de simplemente proporcionar productos de alta calidad; nos esforzamos por ofrecer soluciones personalizadas que se ajusten a las necesidades específicas de cada cliente.
					<BR></BR>
					En resumen, nuestra empresa Caterpillar se compromete a ofrecer un respaldo integral en la atención al cliente mediante nuestra consultoría especializada. Estamos dedicados a realizar movimientos correctivos y preventivos que optimicen cada adquisición de productos, brindando soluciones personalizadas, un excelente servicio al cliente y colaborando estrechamente con nuestros clientes para garantizar su satisfacción y éxito.
				</p>
				<button class="boton" onclick="toggleInformacion()">VER MÁS</button>
				<div id="informacionAdicional" style="display: none;">
					<h1 class="titulo">VALORES</h1>
					<div class="linea"></div>
					<p class="contenido">
						<b>Integridad:</b> Caterpillar se compromete a actuar con honestidad, ética y transparencia en todas sus operaciones y relaciones comerciales.
						<P></P>
						<b>Excelencia:</b> La empresa se esfuerza por alcanzar la excelencia en todo lo que hace, desde la fabricación de productos hasta la prestación de servicios y la satisfacción del cliente.
						<P></P>
						<b>Sostenibilidad:</b> Caterpillar se preocupa por el medio ambiente y se esfuerza por desarrollar soluciones sostenibles que minimicen el impacto ambiental de sus productos y operaciones.
						<P></P>
						<b>Respeto:</b> La empresa valora y respeta la diversidad, fomentando un entorno de trabajo inclusivo y respetuoso, donde todas las personas sean tratadas con dignidad y consideración.
						<P></P>
						<b>Trabajo en equipo:</b> Caterpillar reconoce la importancia del trabajo en equipo y promueve la colaboración entre sus empleados, clientes y socios comerciales para lograr resultados exitosos.
						<P></P>
						<b>Innovación:</b> La empresa fomenta la creatividad y la innovación, buscando constantemente nuevas formas de mejorar sus productos, procesos y servicios para satisfacer las necesidades cambiantes de sus clientes.
						<P></P>
						<b>Compromiso con el cliente:</b> Caterpillar se compromete a comprender y cumplir las necesidades de sus clientes, brindando productos y servicios de calidad y estableciendo relaciones a largo plazo basadas en la confianza y la satisfacción del cliente.
					</p>
					<BR></BR>
					<h1 class="titulo">HISTORIA</h1>
					<div class="linea"></div>
					<P class="contenido">
						La historia de Caterpillar se remonta a más de un siglo atrás, cuando la compañía fue fundada en 1925 en Estados Unidos. Desde sus humildes comienzos como una empresa de maquinaria para la construcción, Caterpillar ha crecido hasta convertirse en líder mundial en equipos pesados y soluciones industriales. A lo largo de los años, hemos superado desafíos, hemos innovado constantemente y nos hemos adaptado a un mundo en constante cambio. Nuestra dedicación a la calidad, la fiabilidad y el servicio al cliente nos ha permitido construir una sólida reputación y establecer relaciones duraderas con nuestros clientes en todo el mundo. Hoy en día, continuamos avanzando con pasión y determinación, impulsando el progreso en diversas industrias y contribuyendo al éxito de nuestros clientes en cada proyecto que emprenden.
					</P>
				  </div>
		</section>









		<!--REDES SOCIALES-->
		<footer class="redes">
			<h3>SÍGUENOS EN:</h3>
			<a href="https://www.facebook.com/caterpillarinc" target="_blank"><i class="bx bxl-facebook-circle bx-md bx-tada-hover espacio" style = 'color:#ffffff' ></i></a>
			<a href="https://www.instagram.com/caterpillarinc/" target="_blank"><i class="bx bxl-instagram-alt  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://www.youtube.com/CatProducts" target="_blank"><i class="bx bxl-youtube  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://twitter.com/CaterpillarInc" target="_blank"><i class="bx bxl-twitter  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
		</footer>
	</main>
</body>
</html>









