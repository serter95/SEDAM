<?php
include('seguridad.php');
include ("../html/conexion.php");
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/modificar.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />

<title>Aplicacion</title>
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
			<article>
			
			<?php
				$sql="select * from teoria";
				$cursor= mysql_query($sql);
				$num= mysql_num_rows($cursor);
				while($datos=mysql_fetch_array($cursor)){
					echo $datos['codigo']." ".$datos['unidad']." ".$datos['temat'];
					$codigo=$datos['codigo'];
				?>	
				
					<form action="mteoria.php" method="post">
					<input type="hidden" value="ver" name="seleccion" />
					<input type="hidden" value="<?php echo $codigo ?>" name="codigo" />
					<input type="submit" name="ver" value="Ver" class="ver" class="ver" /><br /> <br />
					</form>
				<?php
				
				}
				
				?>
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
