<?php
include ("seguridad.php");
?>

<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="dialogo.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
</head>

<body>
	<section id="contenedor">
		<header id="header">
	
		</header>
		<nav id="botonera">
			Usuario:"<?php echo $_SESSION["nom_usuario"]?>"&nbsp; <a href="salir.php" title="Cerrar sesion">Salir</a>
		</nav>
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
				<li><a href="principal_E.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="indicet.php">Teoria</a></li>
						<li><a href="indicee.php">Evaluacion</a></li>
					</ul>
				</li>
				<li><a href="muestra_estadistica_E.php">Actividad</a>
				</li>
			</ul>
		</article>
		<div class="linea">
			<img src="../img/linea.jpg" />
		</div>
		<article class="contenido">
		
			<article id="pantalla">
				<article class="informacion">
				
				  <p class="p">DIVISI&Oacute;N<br><br> LA DIVISIDIVISI&Oacute;N CONSISTE EN REPARTIR EN PARTES IGUALES EL TOTAL DE 		 							   UN TODO NUM&Eacute;RICO.
				
					<br> <br> PARA SU NOTACI&Oacute;N SE EMPLEA ENTRE EL SIGNO �.
					<br> <br>
					
					<article id="ejemplo" class="edialogo">
							<center>
								<img src="../img/division.png" width="300px" height="130px" /><br>
								<img src="../img/division2.png"  width="210px" height="200px" />
								<img src="../img/division3.png"  width="210px" height="200px" />
							</center>
						</article>
					
					<img src="../img/profeec.png" class="profe" />
					<form action="videodivision.php" method="post">
					<input type="hidden" value="multiplicacion" name="operador" />
					<button type="submit" name="enviar" class="epractica">
					<img src="../img/flecha.png" alt="flecha" class="flecha"/>
					</button>
					</form>
				 </article>
				 
				  <input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
			</article>
		
		</article>
		</section>
		
		<footer id="pie">

			<center>
		
			<article id="logoi">
				<p><img src="../img/logoi.png" width="110px" height="110px" class="img" ></p>
			</article>
			<article id="mem"> <!-- <hr border="1px" height="10px"/>-->
				<p>REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="95px" height="95px" class="img"></p>
			</article>
		</center>
		</footer>
</section>
</body>

</html>
