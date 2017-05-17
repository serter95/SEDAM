<?php
include ("seguridad.php");
include ("conexion.php")
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/modificar.css" />

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
		</article>
		<article class="contenido">
		<!--<center>
			<table width="760px" cellspacing="6px" class="tabla" >
				</br><h1>Operaciones Basicas</h1></br></br>
				 <tr>
				 	<th width="70px">Momento</th>
					<th width="90px">Objetivo</th>
					<th width="180px" >Tema</th>
					<th width="380px">Descripcion</th>
				 </tr>
				 <tr>
				 	<td>1</td>
					<td>1</td>
					<td align="left"><a href="obasica.php">Operaciones Basicas</a></td>
					<td align="justify"><br>
					<re>Suma</re> y <re>Resta</re> con n&uacute;meros menones a un 1000.000. <br> <re>Multiplicacion</re> y <re>Division</re> en donde 					                    el multiplicador y el divisor es de 2 cifras.
					</td>
				</tr>
				 <tr>
				 	<td>1</td>
					<td>2</td>
					<td align="justify"><a href="tcomparacion.php">Menor, Mayor, Igual que</a></td>
					<td align="justify">
					Establecer relaciones con "<re>></re>" mayor que, "<re><</re>" menor que e "<re>=</re>" igual que.</td>
				</tr>
				<tr>
					<td>1</td>
					<td>3</td>
					<td align="left"><a href="fraccion.php">Fracciones</a></td>
					<td align="justify">
						Concepto de <re>Fracci&oacute;n</re>, Fracci&oacute;nes <re>propia</re>, <re>impropia</re> y <re>mixta</re><br>
						<re>Suma</re>, <re>Resta</re>, <re>Multiplicacion</re> y <re>Division</re> de fracciones
					</td>
			 	</tr>
			 	<tr>
					<td>1</td>
					<td>4</td>
					<td align="left"><a href="decimal.php">Decimales</a></td>
					<td align="justify">
						Concepto de <re>Deciamles</re>.<br>
						<re>Suma</re>, <re>Resta</re>, <re>Multiplicacion</re> y <re>Division</re> de decimales.
					</td>
				</tr>
			</table>
		</center>-->
		<table>
			 <tr>
				 	<th width="70px">Momento</th>
					<th width="90px">Objetivo</th>
					<th width="180px" >Tema</th>
					<th width="380px">Descripcion</th>
			</tr>
			<?php
				$sql="select * from tema";
				$cursor= mysql_query($sql);
				$num= mysql_num_rows($cursor);
				while($datos=mysql_fetch_array($cursor)){
			?>
				
				<tr>
					<td width="70px"><?php echo $datos['momento']; ?></td>
					<td width="90px"><?php echo $datos['objetivo']; ?></td>
					<td width="180px" align="left"><?php echo $datos['titulo'];	?><a href="fraccion.php"></a></td>
					<td width="380px" align="justify"><?php echo $datos['descripcion']; ?></td>
					<td>
						<?php
							$codigo=$datos['codig_tema'];
						?>
						<form action="teoria.php" method="post">
							<input type="hidden" value="ver" name="ver" />
							<input type="hidden" value="<?php echo $codigo; ?>" name="codigo" />
							<input type="submit" name="ver" value="Ver" class="ver" /><br />
						</form>
					
					</td>
			 	</tr>
				<?php
				
				}
				
				?>
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
