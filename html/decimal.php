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

		<article class="contenido">
			<table>
				</br><h1>Fracciones</h1></br></br>
			  <tr>
					<td width="70px">Obj 4.1</td>
					<td><a href="tdecimal.php">Decimales</a></td>
			 </tr>
			 <tr>
					<td width="70px">Obj 4.2</td>
					<td><a href="tsrdecimal.php">Suma y Resta de Decimales</a></td>
			</tr>
			 <tr>
					<td width="70px">Obj 4.3</td>
					<td><a href="tmddecimal.php">Multiplicacion y Division de Fracciones Decimales</a></td>
			</tr>
		</table>
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
