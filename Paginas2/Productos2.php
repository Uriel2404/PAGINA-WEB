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
	<link rel="stylesheet" type="text/css" href="../estilos.css">
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
			<li><a href="../panel.php">INICIO</a></li>
			<li><a href="../Paginas2/Productos2.php">PRODUCTOS</a></li>
			<li><a href="../consultoria.php">CONSULTORÍA</a></li>
			<li><a href="../logout.php">CERRAR SESIÓN</a></li>
		</ul>
		<div class="logo3">
			<img src="Imágenes/2.png">
		</div>
	</nav>
	<!--BANNER-->
	
	<section class="servicios">
				<h1 class="titulo">NUESTROS PRODUCTOS</h1>
				<div class="linea"></div>
				<div class="contenido">
					
					<!--SECCIÓN DE IMÁGENES 1-->
					<div class="imagen">
						<div><img src="Imágenes/5.jpg"></div>
						<p >CAMIONES ARTICULADOS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 1)">Ver más</div>
						<div id="imagen1-info" class="imagen-info">
							<P>Los camiones articulados Cat® transportan un amplio espectro de materiales en distintas aplicaciones y condiciones del suelo. El simple funcionamiento y la comodidad de estilo automotriz, así como la combinación de puntos de servicio e intervalos prolongados de servicio de estos camiones de descarga le permiten enfocarse en su trabajo y perder menos tiempo y dinero en realizar el mantenimiento.</P>
						  	<b>Modelo del motor</b>
						  	<p>C18 Cat®</p>
						  	<b>Carga útil nominal</b>
						  	<p>41 t</p>
						  	<b>Colmada (SAE 2:1)</b>
						  	<P>25 m³</P>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/6.jpg"></div>
						<p>CAMIONES DE OBRAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 2)">Ver más</div>
						<div id="imagen2-info" class="imagen-info">
							<P>Durante más de 50 años, los resistentes camiones de obras y camiones mineros Cat® han funcionado en las difíciles condiciones de minas, proyectos de construcción y canteras en todo el mundo. Adaptados a nuestros cargadores de ruedas y excavadoras, puede confiar en nuestros camiones de acarreo para obtener una productividad máxima a un bajo costo por tonelada.							</P>
						  	<b>Modelo del motor</b>
						  	<p>C15 ACERT™ Cat®</p>
						  	<b>Clase de carga útil nominal (100%)</b>
						  	<p>38.6 t</p>
						  	<b>Velocidad máxima con carga</b>
						  	<P>73.5 Km/h</P>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/7.jpg"></div>
						<p>CARGADORES DE CADENAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 3)">Ver más</div>
						<div id="imagen3-info" class="imagen-info">
						  <p>Ahorre dinero y tiempo de transporte con una máquina resistente para desmonte de terrenos, excavaciones, nivelaciones, carga de camiones, trabajos en pendientes y más. Los trabajos exigentes, el terreno irregular y los espacios reducidos no son rivales para la versátil línea de cargadores de cadenas Cat®.						  </p>
						  <b>Potencia del volante</b>
						  <p>205 KW</p>
						  <b>Peso en orden de trabajo</b>
						  <p>28985 kg</p>
						  <b>Capacidad de uso general</b>
						  <P>3.2 m³</P>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/8.jpg"></div>
						<p>CARGADORES DE RUEDAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 4)">Ver más</div>
						<div id="imagen4-info" class="imagen-info">
						  <p>Los cargadores de ruedas Cat® permiten que los trabajos de manipulación de materiales y de carga sean más seguros, rápidos, precisos y rentables. Los cargadores delanteros Cat fijan el estándar en cuanto a confiabilidad, productividad, eficiencia del combustible, versatilidad y comodidad del operador.						  </p>
						  <b>Potencia bruta máxima</b>
						  <p>140 KW</p>
						  <b>Peso en orden de trabajo</b>
						  <p>15282 kg</p>
						  <b>Capacidad del cucharon</b>
						  <p>2,5 a 5,00m³</p>
						</div>
					</div>

				</div>

<BR></BR>
				<!--SECCIÓN DE IMÁGENES 2-->
				<div class="contenido">
					
					
					<div class="imagen">
						<div><img src="Imágenes/9.jpg"></div>
						<p>COMPACTADORES</p>
						<div class="boton2" onclick="mostrarInformacion(event, 5)">Ver más</div>
						<div id="imagen5-info" class="imagen-info">
						  <p>Compactar de acuerdo con las especificaciones es muy importante para aplicaciones de suelos, rellenos sanitarios y pavimentación. Los compactadores Cat® están específicamente diseñados para todo tipo de operación de compactación.</p>
						  <b>Peso en orden de trabajo: con cabina</b>
						  <p>7210 kg</p>
						  <b>Ancho de compactación</b>
						  <p>1676 mm</p>
						  <b>Potencia bruta</b>
						  <p>74.5 kW</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/10.jpg"></div>
						<p>DRAGALINAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 6)">Ver más</div>
						<div id="imagen6-info" class="imagen-info">
						  <p>Las dragalinas Cat® son una herramienta de excavación principal en muchas operaciones de minería de superficie en todo el mundo. Son altamente productivas y ofrecen el costo de material por tonelada más bajo de la industria.</p>
						  <B>Capacidad del cucharón</B>
						  <p>24 a 34m³ </p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/11.jpg"></div>
						<p>EQUIPOS SUBTERRANEOS PARA ROCA DURA</p>
						<div class="boton2" onclick="mostrarInformacion(event, 7)">Ver más</div>
						<div id="imagen7-info" class="imagen-info">
						  <p>Caterpillar ofrece una variedad de sistemas y soluciones de minería subterránea para satisfacer sus demandas de alta producción y reducir el costo por tonelada.</p>
						  <b>Modelo de motor</b>
						  <p>Cat® C15</p>
						  <b>Potencia del motor: Motor Ther 3, ISO 14396:2002</b>
						  <p>299 KW</p>
						  <b>Capacidad de carga útil nominal</b>
						  <p>17200 jg</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/12.jpg"></div>
						<p>EXCAVADORAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 8)">Ver más</div>
						<div id="imagen8-info" class="imagen-info">
						  <p>No importa qué tipo de trabajo realice, ya sea excavación, apertura de zanjas o carga de camiones, las excavadoras Cat® ofrecen un rendimiento óptimo, una inigualable versatilidad y una excelente eficiencia del combustible. El funcionamiento simple, la sorprendente durabilidad y las más recientes características de seguridad y tecnología lo ayudarán a llevar a su negocio al siguiente nivel.</p>
						  <b>Potencia neta: ISO 9249</b>
						  <p>70.6 KW</p>
						  <b>Peso en orden de trabajo</b>
						  <p>12400 kg</p>
						  <b>Profundidad máxima de excavación</b>
						  <p>5570 mm</p>
						</div>
					</div>

				</div>

				<BR></BR>
				<!--SECCIÓN DE IMÁGENES 3-->
				<div class="contenido">
					
					
					<div class="imagen">
						<div><img src="Imágenes/13.jpg"></div>
						<p>MANIPULADORES DE MATERIALES</p>
						<div class="boton2" onclick="mostrarInformacion(event, 9)">Ver más</div>
						<div id="imagen9-info" class="imagen-info">
						  <p>Los manipuladores de materiales Cat® se han diseñado y fabricado para las industrias exigentes. Estas agresivas máquinas ofrecen un rendimiento rápido, móvil y eficiente, ya sea que posean garfios, un cucharón de almeja o un imán.</p>
						  <b>Modelo de motor</b>
						  <p>Cat C4.4</p>
						  <B>Peso en orden de trabajo máximo</B>
						  <p>26500 kg</p>
						  <b>Alcance máximo</b>
						  <p>12010 mm</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/14.jpg"></div>
						<p>MANIPULADORES TELESCÓPICOS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 10)">Ver más</div>
						<div id="imagen10-info" class="imagen-info">
						  <p>El diseño superior y las características avanzadas se combinan para incorporar en los manipuladores telescópicos Cat® la mejor visibilidad panorámica y tomar la delantera en capacidad de levantamiento y alcance. Máximo rendimiento y construcción robusta para ofrecer más confiabilidad y durabilidad con bajos costos de operación.</p>
						  <b>Capacidad de carga nominal</b>
						  <p>2500 kg</p>
						  <b>Altura máxima de levantamiento</b>
						  <p>5600 mm</p>
						  <b>Modelo de motor</b>
						  <p>TD 2.9L L4*</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/15.jpg"></div>
						<p>MINICARGADORES Y CARGADORES DE CADENAS COMPACTOS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 11)">Ver más</div>
						<div id="imagen11-info" class="imagen-info">
						  <p>Los minicargadores y los cargadores de cadenas compactos Cat® ofrecen mejoras centradas en el cliente, además de las características y las innovaciones más recientes y pioneras en la industria.</p>
						  <b>Potencia bruta: SAE J1995</b>
						  <P>44.9 KW</P>
						  <B>Capacidad nominal de operación</B>
						  <p>865 kg</p>
						  <b>Peso en orden de trabajo</b>
						  <p>2955 kg</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/16.jpg"></div>
						<p>MOTONIVELADORAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 12)">Ver más</div>
						<div id="imagen12-info" class="imagen-info">
						  <p>Fabricada con décadas de experiencia en diseño, encontrará la motoniveladora Cat® perfecta para su aplicación de nivelación. Con cabinas de primera calidad, sistemas hidráulicos avanzados, opciones de tipo de control y de tecnología, realizará sus proyectos de nivelación a tiempo a un costo más bajo.</p>
						  <b>Potencia base (11.ª Marcha): Neta</b>
						  <p>227 KW</p>
						  <b>Peso en orden de trabajo: equipado normalmente</b>
						  <p>33713 kg</p>
						  <b>Ancho de la hoja</b>
						  <p>5.5 m</p>
						</div>
					</div>

				</div>

				<BR></BR>
				<!--SECCIÓN DE IMÁGENES 4-->
				<div class="contenido">
					
					
					<div class="imagen">
						<div><img src="Imágenes/17.jpg"></div>
						<p>MOTOTRAÍLLAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 13)">Ver más</div>
						<div id="imagen13-info" class="imagen-info">
						  <p>Las mototraíllas Cat® tienen la potencia, la tracción y la velocidad necesarias para una producción confiable en una variedad de aplicaciones de movimiento de tierras. Algunas opciones de traíllas son de taza abierta de motor único y de motor en tándem, de tiro y empuje con motor en tándem y elevadora.</p>
						  <b>Potencia al volante: tractor/trailla</b>
						  <p>304 KW (407 hp)</p>
						  <b>Capacidad de la trailla: colmada</b>
						  <p>17.6m³</p>
						  <b>Velocidad máxima con carga</b>
						  <p>53.9 km/h</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/18.jpg"></div>
						<p>PALA DE CABLE ELÉCTRICAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 14)">Ver más</div>
						<div id="imagen14-info" class="imagen-info">
						  <p>Las palas de cable eléctricas Cat® están diseñadas específicamente para eliminar grandes cantidades de material estéril y mineral, a una fracción del costo por tonelada.</p>
						  <b>Carga útil del balde</b>
						  <p>109 t</p>
						  <b>Capacidad del balde</b>
						  <p>30,6 a 62,7m³</p>
						  <b>Peso de trabbajo con balde y varillajes</b>
						  <p>1386178 kg</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/19.jpg"></div>
						<p>PALAS HIDRÁULICAS PARA MINERÍA</p>
						<div class="boton2" onclick="mostrarInformacion(event, 15)">Ver más</div>
						<div id="imagen15-info" class="imagen-info">
						  <p>La tecnología de la pala hidráulica Cat® ofrece mayores fuerzas de excavación y mejor productividad.</p>
						  <b>Rendimiento del motor: SAE J1995</b>
						  <P>2248 KW</P>
						  <b>Carga útil del cucharón</b>
						  <p>61 t</p>
						  <b>Peso en orden de trabajo</b>
						  <p>599 t</p>
						</div>
					</div>

					<div class="imagen">
						<div><img src="Imágenes/20.jpg"></div>
						<p>PAVIMENTADORAS DE ASFALTO</p>
						<div class="boton2" onclick="mostrarInformacion(event, 16)">Ver más</div>
						<div id="imagen16-info" class="imagen-info">
						  <p>Caterpillar ofrece una amplia gama de pavimentadoras de asfalto que compiten en los mercados de neumáticos de caucho, cadenas de acero y bandas de caucho. Las pavimentadoras y los elevadores de hileras ofrecen soluciones versátiles y confiables para aplicaciones de pavimentación exigentes.</p>
						  <b>Potencia bruta</b>
						  <p>55 KW</p>
						  <b>Alcance estandar de pavimentación</b>
						  <p>1,75 a 3,42 m</p>
						  <b>Peso en orden de trabajo: con el modelo SE34 VT</b>
						  <p>8730 kg</p>
						</div>
					</div>

				</div>

				<BR></BR>
				<!--SECCIÓN DE IMÁGENES 5-->
				<div class="contenido">
					
					
					<div class="imagen">
						<div><img src="Imágenes/21.jpg"></div>
						<p>PERFILADORAS DE PAVIMENTO EN FRÍO</p>
						<div class="boton2" onclick="mostrarInformacion(event, 17)">Ver más</div>
						<div id="imagen17-info" class="imagen-info">
						  <p>Las perfiladoras de pavimento en frío Cat colocan las toneladas en los camiones hora tras hora, jornada tras jornada. El rendimiento eficiente y potente con controles simplificados y tecnología integrada lo ayudan a terminar el trabajo más rápido con la precisión de fresado que necesita. Los rotores del sistema K Cat ofrecen un flujo de material eficiente con un patrón de corte excelente y componentes rediseñados para un servicio más fácil y una vida útil más extensa. Elija entre una variedad de rotores, anchos de corte y opciones para proyectos urbanos, de servicios públicos y de alta producción.</p>
						  <b>Ancho de fresado</b>
						  <p>2235 mm</p>
						  <b>Potencia nominal</b>
						  <p>576 KW</p>
						  <b>Peso en orden de trabajo</b>
						  <p>36700 kg</p>
						</div>
					</div>
				
					<div class="imagen">
						<div><img src="Imágenes/22.jpg"></div>
						<p>PERFORADORAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 18)">Ver más</div>
						<div id="imagen18-info" class="imagen-info">
						  <p>Sobre la base del sólido legado de diseños comprobados, las perforadoras giratorias de agujeros para explosivos Cat® actuales ofrecen mejoras sustanciales en tecnología, eficiencia y productividad para alcanzar de manera eficiente las tasas de productividad deseadas. Nuestros modelos más recientes integran completamente los diseños, los componentes y las tecnologías Cat, y cada modelo ofrece exactamente lo que espera de un producto que lleva la marca Cat: durabilidad, precisión, productividad y respaldo de servicio y piezas sin igual, en cualquier parte del mundo. Lo importante se encuentra debajo de la pintura. Ahí encontrará todo lo que representamos.</p>
						  <b>Carga de la broca</b>
						  <p>Hasta 16.964kg</p>
						  <b>Diámetro del orificio</b>
						  <p>127 a 200mm</p>
						  <b>Motor</b>
						  <p>Cat® C18 a 1.800rpm</p>
						</div>
					</div>
				
					<div class="imagen">
						<div><img src="Imágenes/23.jpg"></div>
						<p>RECUPERADORES DE CAMINOS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 19)">Ver más</div>
						<div id="imagen19-info" class="imagen-info">
						  <p>Los recuperadores de caminos Cat pulverizan la capa de asfalto y la mezclan con la base subyacente para estabilizar las carreteras deterioradas. Los recuperadores pueden agregar emulsiones asfálticas u otros agentes aglutinantes durante la pulverización o durante una pasada de mezcla separada.</p>
						  <b>Peso en orden de trabajo máximo</b>
						  <p>26700 kg</p>
						  <b>Ancho de corte/mezcla</b>
						  <p>2438 mm</p>
						  <b>Potencia bruta</b>
						  <p>310 KW</p>
						</div>
					</div>
				
					<div class="imagen">
						<div><img src="Imágenes/24.jpg"></div>
						<p>RETROEXCAVADORAS CARGADORAS</p>
						<div class="boton2" onclick="mostrarInformacion(event, 20)">Ver más</div>
						<div id="imagen20-info" class="imagen-info">
						  <p>Las retroexcavadoras cargadoras Cat® ofrecen una capacidad superior de excavación, apertura de zanjas, relleno y manipulación de materiales. Además, se pueden usar para muchas aplicaciones, que incluyen, entre otras, construcción general, demolición y excavación, paisajismo, rotura de asfalto y pavimentación. Las retroexcavadoras Cat le proporcionan la potencia y el manejo preciso que necesita cuando opera en áreas donde el uso de equipos más grandes no es práctico.</p>
						  <b>Potencia neta: SAE J1349</b>
						  <P>70 KW</P>
						  <b>Profundidad de excavación: estándar</b>
						  <p>4360 mm</p>
						  <b>Peso en orden de trabajo: máximo</b>
						  <p>11000 kg</p>
						</div>
					</div>
				
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