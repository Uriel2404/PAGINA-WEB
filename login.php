<?php
include "conexion_db.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
	header("Location: panel.php");
}

if(isset($_POST["submit"])){
	$email=$_POST["email"];
	$password=md5($_POST["password"]);

	$check_email="SELECT * FROM usuario  WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conexion, $check_email);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: panel.php");
	}else{
		echo "<script>alert('La contraseña o el email son incorrectos')</script>";
	}
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
				<li><a href="Pagina.html">INICIO</a></li>
				<li><a href="Productos.html">PRODUCTOS</a></li>
				<li><a href="consul.html">CONSULTORÍA</a></li>
				<li><a href="login.php">INICIO DE SESIÓN</a></li>
			</ul>
		</nav>




	<div class= "Container">
		<form  action="" method="POST" class="form">
    		<div class="flex">
      			<div class="login color">Iniciar Sesión</div>
      			<label class="color">Email :</label>
      			<input type="email" class="input" name="email" value="<?php echo $email; ?>" required>
      			<label class="color">Contraseña :</label>
      			<input type="password" class="input" name="password" value="<?php echo $_POST['password']; ?>" required> 
      			<button name="submit">Entrar</button>
      			<br>
      			<div class="color align">¿No tienes una cuenta? <a href="registro.php">Crear Cuenta</a></div>
    		</div>
		</form>
	</div>




    	<!--REDES SOCIALES-->
	    <footer class="redes">
			<h3>SÍGUENOS EN:</h3>
			<a href="https://www.facebook.com/caterpillarinc" target="_blank"><i class="bx bxl-facebook-circle bx-md bx-tada-hover espacio" style = 'color:#ffffff' ></i></a>
			<a href="https://www.instagram.com/caterpillarinc/" target="_blank"><i class="bx bxl-instagram-alt  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://www.youtube.com/CatProducts" target="_blank"><i class="bx bxl-youtube  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
			<a href="https://twitter.com/CaterpillarInc" target="_blank"><i class="bx bxl-twitter  bx-md bx-tada-hover espacio" style = 'color:#ffffff'></i></a>
		</footer>
	</body>
</html>
