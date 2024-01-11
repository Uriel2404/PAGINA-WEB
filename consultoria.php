<?php
$Nombre = $Apellidos = $Teléfono = $email = $Compañia = $Estado = $Ciudad = $Tipo_de_consulta = $Mensaje = "";


include "conexion_db.php";
error_reporting(0);
session_start();

if(isset($_POST["submit"])){
    $Nombre = $_POST["Nombre"];
	$Apellidos = $_POST["Apellidos"];
	$Teléfono = $_POST["Teléfono"];
    $email = $_POST["correo"];
	$Compañia = $_POST["Compañia"];
	$Estado = $_POST["Estado"];
	$Ciudad = $_POST["Ciudad"];
	$Tipo_de_consulta = $_POST["Tipo_de_consulta"];
	$Mensaje = $_POST["Mensaje"];

    if($Mensaje == $Mensaje){
        $check_email = "SELECT * FROM consultoria WHERE correo='$email'";
        $result = mysqli_query($conexion, $check_email);
        if(mysqli_num_rows($result) == 0) {
			$sql = "INSERT INTO consultoria (Nombre, Apellidos, Teléfono, Correo, Compañia, Estado, Ciudad, Tipo_de_consulta, Mensaje) 
			VALUES ('$Nombre', '$Apellidos', '$Teléfono', '$email', '$Compañia', '$Estado', '$Ciudad', '$Tipo_de_consulta', '$Mensaje')";
			if(mysqli_query($conexion, $sql)){
                echo "<script>alert('Consulta mandada con éxito, en lo mas breve posible nos pondremos en contacto con usted')</script>";
                $Nombre = "";
                $Apellidos = "";
                $Teléfono = "";
				$email = "";
				$Compañia = "";
				$Estado = "";
				$Ciudad = "";
				$Tipo_de_consulta = "";
				$Mensaje = "";
            }else{
                echo "<script>alert('Hay un error')</script>";
            }
        }
		
    }
}






error_reporting(E_ALL);
ini_set('display_errors', 1);

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
	<section class="fondo2">
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


	<!--FORMULARIO-->
	<div class= "Container2">
		<form method="POST" class="form">
    		<div class="flex">
      			<div class="login color">Manda tu consulta</div>
      			<label class="color">Nombre :</label>
      			<input type="text" class="input" name="Nombre" value="<?php echo $Nombre ; ?>"required>
				  <label class="color">Apellidos :</label>
      			<input type="text" class="input" name="Apellidos" value="<?php echo $Apellidos ; ?>"required>
				  <label class="color">Teléfono :</label>
      			<input type="text" class="input" name="Teléfono" value="<?php echo $Teléfono ; ?>"required>
                <label class="color">Correo electrónico :</label>
      			<input type="email" class="input" name="correo" value="<?php echo $email ; ?>"required> 
				  <label class="color">Compañia :</label>
      			<input type="text" class="input" name="Compañia" value="<?php echo $Compañia ; ?>"required>
      			<label class="color">Estado :</label>
      			<input type="text" class="input" name="Estado" value="<?php echo $Estado ; ?>"required> 
				  <label class="color">Ciudad :</label>
      			<input type="text" class="input" name="Ciudad" value="<?php echo $Ciudad ; ?>"required>
				  <label class="color">Tipo de consulta :</label>
				  <select class="input" name="Tipo_de_consulta" required>
  					<option value="Preventiva">Preventiva</option>
  					<option value="Correctiva">Correctiva</option>
				  </select>
				  <label class="color">Mensaje :</label>
      			<input type="text" class="input" name="Mensaje" value="<?php echo $Mensaje ; ?>"required>
      			<button name="submit">Enviar Consulta</button>
    		</div>
		</form>
	</div>










	<main>
				<!--REDES SOCIALES-->
				<footer class="redes">
			<h3>SÍGUENOS EN:</h3>
			<a href="https://www.facebook.com/caterpillarinc" target="_blank"><i class="bx bxl-facebook-circle bx-md bx-tada-hover espacio" style = 'color:#ffffff' ></i></a>
			<a href="https://www.instagram.com/caterpillarinc/" target="_blank"><i class="bx bxl-instagram-alt  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://www.youtube.com/CatProducts" target="_blank"><i class="bx bxl-youtube  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://twitter.com/CaterpillarInc" target="_blank"><i class="bx bxl-twitter  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
		</footer>
	</main>








</section>
</body>
</html>
