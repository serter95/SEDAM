<?php
include ("seguridad.php");
?>

<html>
<head>
<meta charset=utf-8>
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
		
			<?php
					include ("menu.php");
						$menu=menu();
						echo $menu;
			?>
		</article>
		<div class="linea">
			<img src="../img/linea.jpg" />
		</div>
		<article class="contenido">
		
			<article id="pantalla">
				<article class="informacion">
				
					<p class="p">MULTIPLICACI&Oacute;N Y DIVISI&Oacute;N DE FRACCIONES<br><br> MULTIPLICACI&Oacute;N: SE MULTIPLICA NUMERADOR CON NUMERADOR Y DENOMINADOR CON DENOMINADOR.
				
					<br> <br> <br> DIVISI&Oacute;N: SE INVIERTE LA SEGUNDA FRACCION Y SE HACE UNA MULTIPLICACION.
					<br> <br>
					<img src="../img/division.png" width="width" height="height" alt="description" />
					<img src="../img/profeec.png" class="profe" />
					<a href="videoresta.php"><img src="../img/flecha.png" width="width" height="height" alt="description" class="flecha" /></a>
				</article>
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
