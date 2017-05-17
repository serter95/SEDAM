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
				
					<p class="p">MENOR, MAYOR E IGUAL QUE<br><br> MENOR, MAYOR E IGUAL SON PALABRAS QUE NOS PERMITEN ENTENDER COMPARACIONES ENTRE 		 								 LOS N&Uacute;MEROS NATURALES Y DE ESA FORMA PODER ORDENARLOS SEG&Eacute;N UNO SEA MAYOR, MENOR O IGUAL QUE OTRO.
								 <br> <br>
								 ADEM&Aacute;S DEL CONOCIDO S&Iacute;MBOLO DE IGUAL (=) TAMBI&Eacute;N VIENE BIEN SABER SI ALGO NO ES IGUAL (?) O ES 					 								 MAYOR QUE (>) O MENOR QUE (<).<br> <br>
					</p>
					<img src="../img/profeec.png" class="profe" />
					
					
					
					<article  id="ejemplo" class="edialogo">
					<center>
					<img src="../img/comparacion1.png" />
					<img src="../img/comparacion2.png" /><br>
					<img src="../img/comparacion3.png" />
					</center>
					</article>
					
				  	<form action="videocompara.php" method="post">
						<input type="hidden" value="suma" name="operador" />
						<button type="submit" name="enviar" class="epractica">
						<img src="../img/flecha.png" width="width" height="height" alt="description"  class="flecha"/>
						</button>
					</form>
			  </article>
			  	 <input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
			</article>
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
