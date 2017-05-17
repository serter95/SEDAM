<?php
session_start();
include ("conexion.php");
?>

<!DOCTYPE HTML>
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
		
		<section id="cuerpo">
		<article class="menu">
		
			<ul id="nav">
				<li><a href="principal_E.php">Inicio</a></li>
				<li><a href="#">Matematica</a>
					<ul>
						<li><a href="unidad1.php">Unidad - 1</a></li>
						<li><a href="unidad2.php">Unidad - 2</a></li>
						<li><a href="unidad3.php">Unidad - 3</a></li>
					</ul>
				</li>	
				<li><a href="muestra_estadistica_E.php">Estadistica</a></li>
				<li><a href="#">Configuraci&oacute;n</a>
					<ul>
						<li><a href="#">Sub - 1</a></li>
						<li><a href="#">Sub - 2</a></li>
						<li><a href="#">Sub - 3</a></li>
					</ul>
				</li>
			</ul>
			<div class="linea">
						<img src="../img/linea.jpg" />
					</div>
			</article>
		</article>
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
				<article id="logoi">
				<p>Logo comunidad</p>
			</article>
			<article id="mem">
				<p><br />REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br> MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA<br>
				   UNIVERSIDAD POLIT&Eacute;CNICA TERRITORIAL DEL ESTADO ARAGUA<br>"FEDERICO BRITO FIGUEROA"<br>
				   LA VICTORIA- ESTADO ARAGUA<br>
				</p>
			</article>
			<article id="logou">
				<p><img src="../img/logou.jpg" width="70px" height="65px"></p>
			</article>
		</footer>
</section>
</body>
</html>