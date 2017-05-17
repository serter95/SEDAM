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
				
					<p class="p">FRACCIONES<br><br> LAS FRACCIONES CONCISTEN EN DIVIDIR UNA TOTALIDAD EN PARTES IGUALES. HAY 3 TIPOS DE FRACCIONES: 
					<br> <br>
					PROPIAS: SU NUMERADOR ES MENOR QUE SU DENOMINADOR EJEMPLO 6 < 7.<br> <br>
					INPROPIAS: SU NUMERADOR ES MAYOR QUE SU DENOMINADOR 10 > 8. <br> <br>
					MIXTAS: ES CUANDO TENEMOS UN N&Uacute;MERO CON UNA <br> FRACCION.
					</p>
				
				<article id="ejemplo" class="edialogo">
						<center>
						<img src="../img/fraccion.png" width="auto" height="auto" />
						</center>
					</article>
				
				<img src="../img/profeec.png" class="profe" />
				  	<form action="videofracciones.php" method="post">
						<input type="hidden" value="mdfraccion" name="operador" />
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
