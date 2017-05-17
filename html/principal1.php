<?php
include ("seguridad.php");
?>
<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

</head>
<body>
	<section id="contenedor">
		<header id="header">
	
		</header>
		<nav id="botonera">
			Usuario:"<?php echo $_SESSION["nom_usuario"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
		</nav>
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
			<li><a href="principal.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="indicet.php">Teoria</a></li>
						<li><a href="indicee.php">Evaluacion</a></li>
					</ul>
				</li>
				<li><a href="#">Actividades</a>
					<ul>
						<li><a href="estadistica.php">Crear Observacion</a></li>
						<li><a href="muestra_estadistica.php">Avances</a></li>
					</ul>
				</li>
				<li><a href="#">Configuraci&oacute;n</a>
					<ul>
						<li><a href="reg_estudiante.php">Nuevo estudiante</a></li>
						<li><a href="muestra_estudiante.php">Consulta de estudiantes</a></li>
					</ul>
				</li>
			</ul>
		</article>
		
		<div class="linea">
			<img src="../img/linea.jpg" />
		</div>
		<article class="contenido">
		</br><h1 >Bienvenido a S.E.D.A.M para 4to Grado</h1></br></br>
		<p>Software Educativo Dirigido al Aprendizaje de las Matematicas de 4to Grado</p>
		
		</article>
		</section>
		
		<footer id="pie">

		<center>
			<b><letcol>Dise&ntilde;ado y Desarrollado por: Br Sergei Teran y Br Juan Rodr&iacute;guez</letcol></b>
		</center>
		</footer>
</section>
</body>

</html>
