<?php
include ("seguridad.php");
include ("conexion.php");
			
?>
<html>
<head>
<title>Aplicacion</title>

<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/estadistica.css" />

<script language="javascript" src="validacionesDOM.js"></script>
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
			<h2>Restauraci&oacute;n de la base de datos:</h2></br>
			<center>
		<?php
		if (!isset ($_FILES["ficheroDeCopia"])) 
		{ 
		?>
		<form action='restore.php' method='post' enctype='multipart/form-data' onSubmit="return restore()"> 
		<table cellspacing='7'>
		<tr>
			<th><lettab>Indique el origen del archivo a restaurar:</lettab></td> 
		</tr>
		<tr>
		<td>
			<input type="file" name="ficheroDeCopia" id="res"/>
		</td> 
		</tr>
		<tr>
			<td></br></br><lettab>Click para aceptar la restauraci&oacute;n</lettab></td>
		</tr>
		<tr>
		<td align='center'>
			<input type='submit' value='' title="Click para subir el archivo seleccionado" onClick="return restore()" style='background:url("../img/add.png") center no-repeat; height:100px; width:100px;'/>
		</td>
		</tr>
		</table> 
		</form> 
		<?php
	//	echo ($contenidoDeFormulario); 
		} 
		 else  
		 { 
		 $archivoRecibido=$_FILES["ficheroDeCopia"]["tmp_name"]; 
		 $destino="ficheroParaRestaurar.sql"; 
			 
		if (!move_uploaded_file ($archivoRecibido, $destino)) 
		{ 
		$mensaje='EL proceso ha fallado'; 
		echo $mensaje; 
		} 
		$sistema="show variables where variable_name= 'basedir'"; 
		$restore=mysql_query($sistema); 
		$DirBase=mysql_result($restore,0,"value"); 
		$primero=substr($DirBase,0,1); 
		if ($primero=="/") { 
			$DirBase="bin\mysql"; 
		}  
		else  
		{ 
			$DirBase=$DirBase."bin\mysql"; 
		} 
		$executa = "$DirBase -h $servername -u $dbusername --password=$dbpassword  $dbname < $destino"; 
		system($executa,$resultado); 
		if ($resultado)  
		{  

		/*	echo "<H3>Error ejecutando comando: $executa</H3>\n"; 
			$mensaje="ERROR. La copia de seguridad no se ha restaurado."; 
			$cabecera="COPIA DE SEGURIDAD NO RESTAURADA"; 
			echo $mensaje; 
			echo "<meta http-equiv='Refresh' content='3;url=selectoption.php'>"; 
		*/	?>
			<script language="javascript">
				alert("La copia de seguridad no se restauro como debe, verifique si escogio el archivo correcto");
				location.href="restore.php";
			</script>
			<?php 
			
		}  
		else  
		{ 
		/*	$mensaje2="La copia de seguridad se ha restaurado correctamente.";  
			$cabecera2="COPIA DE SEGURIDAD RESTAURADA"; 
			echo $mensaje2; 
			echo "<meta http-equiv='Refresh' content='3;url=selectoption.php'>";
		*/	?>
			<script language="javascript">
				alert("La copia de seguridad se ha restaurado correctamente");
				location.href="selectoption.php";
			</script>
			<?php 
		} 

		unlink ("ficheroParaRestaurar.sql"); // ficheroParaRestaurar.sql
			 
		} 

		?>
			</center>
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
