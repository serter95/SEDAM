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
			Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
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
				
					<p class="p">N&Uacute;MEROS CON DECIMASLES<br><br> SON N&Uacute;MEROS QUE TIENEN UN "." PUNTO &Oacute; UNA "," COMA Y SE EXPRESA DE 						LA SIGUIENTE FORMA 1,33.<br> <br>
						EL PUNTO &Oacute; COMA DECIMAL ES LA PARTE M&Aacute;S IMPORTANTE DE UN N&Uacute;MERO DECIMAL. EST&Aacute; EXACTAMENTE A LA  		 						DERECHA DE LA POSICI&Oacute;N DE LAS UNIDADES. SIN &Eacute;L, ESTAR�AMOS PERDIDOS Y NO SABR�AMOS CU&Aacute;L ES CADA 
						POSICI&Oacute;N.

					<article  id="ejemplo" class="edialogo">
						<center>
						<img src="../img/decimal.png" />
						<img src="../img/decimal1.png" />
						</center>
					</article>
					
					<img src="../img/profeec.png" class="profe" />
				  <form action="videodecimal.php" method="post">
						<input type="hidden" value="suma" name="operador" />
						<button type="submit" name="enviar" class="epractica">
						<img src="../img/flecha.png" alt="flecha" class="flecha"/>
						</button>
				   </form>
					 </article>
					 </article>
						<input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
					<article>
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