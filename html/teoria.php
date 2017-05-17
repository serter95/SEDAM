<?php
include ("seguridad.php");
include ("conexion.php");
?>

<html>
<head>
<title>Aplicacion</title>
<link rel="stylesheet" type="text/css" href="../css/calculadora.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css"/>

<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="dialogo.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom.min.js"></script>
</head>

<body>
	<section id="contenedor">
		
		<header id="header">
			<img src="../img/banner.png" class="banner" />
		</header>
		
		<nav id="botonera">
			<section id="salir">
				Usuario:"<?php echo $_SESSION["nom_d"]?>"&nbsp;(<?php echo $_SESSION["dueno"]?>) <a href="salir.php" title="Cerrar sesion">Salir</a>
			</section>
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
				<div id="pestana1">
					Teor&iacute;a
				</div>
			
				<div id="pestana2">
					Video Explicativo
				</div>
				<!--<div id="pestana3">
					Practica
				</div>-->

			<div id="show4">
			<article id="pantalla">
			  <article class="informacion">
			
			<?php
			$sql = "SELECT * FROM tema WHERE codig_tema='".$_POST['codigo']."' ";
			$ejecutar_sql=mysql_query($sql);
			$num=mysql_num_rows($ejecutar_sql);
			
			$dato=mysql_fetch_array($ejecutar_sql);
			echo $dato["titulo"]."<br /><br />";
			$dato["contenido"]=$text1=str_replace(array("\r\n", "\r", "\n", "chr(13)", "\R\N", "\R", "\N", "CHR(13)"),"<br />", $dato["contenido"]);
			echo $dato["contenido"];
			?>
			
						<article id="ejemplo" class="edialogo">
							<center>
								<img src="<?php echo $dato["ejemplo1"]; ?>"  width="210px" height="200px" />
								<img src="<?php echo $dato["ejemplo2"]; ?>"  width="210px" height="200px" /><br>
								<img src="<?php echo $dato["ejemplo3"]; ?>"  width="210px" height="200px" />
								<img src="<?php echo $dato["ejemplo4"]; ?>"  width="210px" height="200px" />
							</center>
						</article>
					<img src="../img/profeec.png" class="profe" />
					
					<article id="dpaso">
						
						<?php
							
							
						?>
						
						<center>
						<img src="../img/esuma.png" width="300px" height="150px">
						</center>
					</article>	 			  
				</article>
					 <input type="submit" name="bdialogo" value="EJEMPLO" id="bdialogo" class="bdialogo" />
			</article>
			</div>
			<!--Fin del primer show -->
			<div id="show5">
			<?php
				if($dato["video2"]=="")
				{
			?>
				<video controls width="600" height="360" class="video">
					<source src="<?php echo $dato["video1"]; ?>" type="video/ogg">
				</video>
			<?php
				}
				else
				{
			?>
				<table>
					<tr>
						<td>
							<video controls class="videod">
								<source src="<?php echo $dato["video1"]; ?>" type="video/ogg">
							</video>
						</td>
						<td>
							<video controls class="videod">
							<source src="<?php echo $dato["video2"]; ?>" type="video/ogg">
							</video>
						</td>
					</tr>
				</table>
			<?php	
				}
			?>
			</div>
			
			<div id="show6">
						
			</div>
			
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
