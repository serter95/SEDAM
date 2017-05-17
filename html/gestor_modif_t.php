<?php
//error_reporting(E_ALL^E_NOTICE);
	
function consultaUsuarios(){
	$c=$_REQUEST['cod_tema'];
	//$condicio=$_POST['condicion'];
	$op=$_POST['opcion'];
	$salida='';

	switch($op)
	{
	
	case 'modificar':

	$formatos = array('.jpg', '.png', '.gif');
	$formato_video = array('.ogv', '.jpg', '.png', '.gif');
	$file_array = array('1', "");
	
//Guardar Salto de Linea
		$_REQUEST['titulo']=strtolower($_REQUEST['titulo']);
		$_REQUEST['contenido']=strtolower($_REQUEST['contenido']);
		$_REQUEST['descripcion']=strtolower($_REQUEST['descripcion']);
		$_REQUEST['titulo']=ucfirst($_REQUEST['titulo']);
		$_REQUEST['contenido']=ucfirst($_REQUEST['contenido']);
		$_REQUEST['descripcion']=ucfirst($_REQUEST['descripcion']);

	//Fin del Santo de linea;
	
	//Nombre del Archivo
	
		$nombreArchivo1 = $_FILES['ejemplo1']['name'];
		$nombreArchivo2 = $_FILES['ejemplo2']['name'];
		$nombreArchivo3 = $_FILES['ejemplo3']['name'];
		$nombreArchivo4 = $_FILES['ejemplo4']['name'];
		$nombreArchivo5 = $_FILES['video1']['name'];
		$nombreArchivo6 = $_FILES['video2']['name'];
	//Nombre Temporal del archivo
		$nombreTmpArchivo1 = $_FILES['ejemplo1']['tmp_name'];
		$nombreTmpArchivo2 = $_FILES['ejemplo2']['tmp_name'];
		$nombreTmpArchivo3 = $_FILES['ejemplo3']['tmp_name'];
		$nombreTmpArchivo4 = $_FILES['ejemplo4']['tmp_name'];
		$nombreTmpArchivo5 = $_FILES['video1']['tmp_name'];
		$nombreTmpArchivo6 = $_FILES['video2']['tmp_name'];
	//Extencion
		$ext1 = substr($nombreArchivo1, strrpos($nombreArchivo1, '.'));
		$ext2 = substr($nombreArchivo2, strrpos($nombreArchivo2, '.'));
		$ext3 = substr($nombreArchivo3, strrpos($nombreArchivo3, '.'));
		$ext4 = substr($nombreArchivo4, strrpos($nombreArchivo4, '.'));
		$ext5 = substr($nombreArchivo5, strrpos($nombreArchivo5, '.'));
		$ext6 = substr($nombreArchivo6, strrpos($nombreArchivo6, '.'));
	
//Chequeo de la existencia del archivo
	if(!in_array($nombreArchivo1, $file_array)){
		if (file_exists("../img/$nombreArchivo1")){
			$comprobacionU1="si";
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo1; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo2, $file_array)){
		if (file_exists("../img/$nombreArchivo2"))
		{
			$comprobacionU2="si";
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo2; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo3, $file_array)){
		if (file_exists("../img/$nombreArchivo3"))
		{
			$comprobacionU3="si";
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo3; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo4, $file_array)){
		if (file_exists("../img/$nombreArchivo4")){
			$comprobacionU4="si";
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo4; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo5, $file_array)){
		if (file_exists("../img/$nombreArchivo5")){
			$comprobacionU5="si";
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo5; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		
		}
	}
	if(!in_array($nombreArchivo6, $file_array)){
		if (file_exists("../img/$nombreArchivo6")){
		?>
			<script type="text/javascript">
				alert("El archivo <?php echo $nombreArchivo6; ?> ya existe, cambie el nombre para poder seguir");
			</script>
		<?php
		}
	}

//Comparacion de los formatos;
	if(!in_array($nombreArchivo1, $file_array)){
		if(in_array($ext1, $formatos)){
			$compatibilidad1="si";
		}
		else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo1; ?> no es compatible");
		</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo2, $file_array)){
		if(in_array($ext2, $formatos)){
			$compatibilidad2="si";
		}
		else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo2; ?> no es compatible");
		</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo3, $file_array)){
		if(in_array($ext3, $formatos)){
			$compatibilidad3="si";
		}
			else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo3; ?> no es compatible");
		</script>
		<?php
			}
	}
	if(!in_array($nombreArchivo4, $file_array)){	
		if(in_array($ext4, $formatos)){
			$compatibilidad4="si";
		}
		else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo4; ?> no es compatible");
		</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo5, $file_array)){
		if(in_array($ext5, $formato_video)){
			$compatibilidad5="si";
		}
		else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo5; ?> no es compatible");
		</script>
		<?php
		}
	}
	if(!in_array($nombreArchivo6, $file_array)){
		if(in_array($ext6, $formato_video))
		{
			$compatibilidad6="si";
		}
		else{
		?>
		<script type="text/javascript">
			alert ("La extenci\u00f3n del <?php echo $nombreArchivo6; ?> no es compatible");
		</script>
		<?php
		}
	}
//IF que indica la ruta que ya existe en la BD si el usuario no introduce un video

		$sql = "SELECT * FROM tema WHERE codig_tema='".$_POST['codigo']."' ";
			$ejecutar_sql=mysql_query($sql);
			$num=mysql_num_rows($ejecutar_sql);
			$file=mysql_fetch_array($ejecutar_sql);
			
		if(in_array($nombreArchivo1, $file_array)){
			$nombreArchivo_bd1=$file['ejemplo1'];
			$compatibilidad1="si";
			$ruta_bd1="si";
		}
		if(in_array($nombreArchivo2, $file_array)){
			$nombreArchivo_bd2=$file['ejemplo2'];
			$compatibilidad2="si";
			$ruta_bd2="si";
		}
		if(in_array($nombreArchivo3, $file_array)){
			$nombreArchivo_bd3=$file['ejemplo3'];
			$compatibilidad3="si";
			$ruta_bd3="si";
		}
		if(in_array($nombreArchivo4, $file_array)){
			$nombreArchivo_bd4=$file['ejemplo4'];
			$compatibilidad4="si";
			$ruta_bd4="si";
		}
		if(in_array($nombreArchivo5, $file_array)){
			$nombreArchivo_bd5=$file['video1'];
			$compatibilidad5="si";
			$ruta_bd5="si";
		}
		if(in_array($nombreArchivo6, $file_array)){
			$nombreArchivo_bd6=$file['video2'];
			$compatibilidad6="si";
			$ruta_bd6="si";
		}
if(($ruta_bd1!="si") || ($ruta_bd2!="si") || ($ruta_bd3!="si") || ($ruta_bd4!="si") || ($ruta_bd4!="si")){

	$rnombreArchivo1=$nombreArchivo_bd1;
	$rnombreArchivo2=$nombreArchivo_bd2;
	$rnombreArchivo3=$nombreArchivo_bd3;
	$rnombreArchivo4=$nombreArchivo_bd4;
	$rnombreArchivo5=$nombreArchivo_bd5;
	$rnombreArchivo6=$nombreArchivo_bd6;
	
	if(!in_array($nombreArchivo1, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo1, "../img/$nombreArchivo1");
			$rnombreArchivo1="../img/$nombreArchivo1";
		}
	if(!in_array($nombreArchivo2, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo2, "../img/$nombreArchivo2");
			$rnombreArchivo2="../img/$nombreArchivo2";
		}
	if(!in_array($nombreArchivo3, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo3, "../img/$nombreArchivo3");
			$rnombreArchivo3="../img/$nombreArchivo3";
		}
	if(!in_array($nombreArchivo4, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo4, "../img/$nombreArchivo4");
			$rnombreArchivo4="../img/$nombreArchivo4";
		}
	if(!in_array($nombreArchivo5, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo5, "../img/$nombreArchivo5");
			$rnombreArchivo5="../img/$nombreArchivo5";
		}
	if(!in_array($nombreArchivo6, $file_array))
		{
			move_uploaded_file( $nombreTmpArchivo6, "../img/$nombreArchivo6");
			$rnombreArchivo6="../img/$nombreArchivo6";
		}

$modificar="UPDATE tema SET momento='".$_REQUEST['momento']."', planificacion='".$_REQUEST['planificacion']."', objetivo='".$_REQUEST['objetivo']."', titulo='".$_REQUEST['titulo']."', contenido='".$_REQUEST['contenido']."', descripcion='".$_REQUEST['descripcion']."', fecha_modificacion='".$_REQUEST['fecha_modificacion']."', ejemplo1='$rnombreArchivo1', ejemplo2='$rnombreArchivo2', ejemplo3='$rnombreArchivo3', ejemplo4='$rnombreArchivo4', video1='$rnombreArchivo5', video2='$rnombreArchivo6' where codig_tema='$c' ";
mysql_query($modificar);
}

if(($compatibilidad1!="") && ($compatibilidad2!="") && ($compatibilidad3!="") && ($compatibilidad4!="")){
		if(($comprobacionU1=="") && ($comprobacionU2=="") && ($comprobacionU3=="") && ($comprobacionU4=="") && ($comprobacionU5=="")){
//condicional que revisa si el segundo video existe para cargar
			
			if(!in_array($nombreArchivo1, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo1, "../img/$nombreArchivo1");
					$rnombreArchivo1="../img/$nombreArchivo1";
				}
			if(!in_array($nombreArchivo2, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo2, "../img/$nombreArchivo2");
					$rnombreArchivo2="../img/$nombreArchivo2";
				}
			if(!in_array($nombreArchivo3, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo3, "../img/$nombreArchivo3");
					$rnombreArchivo3="../img/$nombreArchivo3";
				}
			if(!in_array($nombreArchivo4, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo4, "../img/$nombreArchivo4");
					$rnombreArchivo4="../img/$nombreArchivo4";
				}
			if(!in_array($nombreArchivo5, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo5, "../img/$nombreArchivo5");
					$rnombreArchivo5="../img/$nombreArchivo5";
				}
			if(!in_array($nombreArchivo6, $file_array))
				{
					move_uploaded_file( $nombreTmpArchivo6, "../img/$nombreArchivo6");
					$rnombreArchivo6="../img/$nombreArchivo6";
				}

$modificar="update tema set fecha_modificacion='".$_REQUEST['fecha_modificacion']."', momento='".$_REQUEST['momento']."', planificacion='".$_REQUEST['planificacion']."', objetivo='".$_REQUEST['objetivo']."', titulo='".$_REQUEST['titulo']."', 
contenido='".$_REQUEST['contenido']."', descripcion='".$_REQUEST['descripcion']."',
ejemplo1='$rnombreArchivo1', ejemplo2='$rnombreArchivo2', ejemplo3='$rnombreArchivo3', ejemplo4='$rnombreArchivo4', video1='$rnombreArchivo5', video2='$rnombreArchivo6' where codig_tema='$c' ";
mysql_query($modificar);
			
$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de tema','$fecha','$hora')";

mysql_query($aud);
				?>  
							<script language="javascript">
								alert("Se modifico con \u00e9xito");
							</script> 
						<?php 
		}		
	}
else{
		?>  
			<script language="javascript">
				alert("Error con la compatibilidad de los archivos");
			</script> 
		<?php  
		}
	break;
}
	//ejecucion de la sentencia anterior
			$sql = "SELECT * FROM tema WHERE codig_tema='$c' and estatus='0'";
			$ejecutar_sql=mysql_query($sql);
			$num=mysql_num_rows($ejecutar_sql);
	
	//Validamos si hay o no registros
			if ($num){
				$dato=mysql_fetch_array($ejecutar_sql);
				$dato["contenido"]=$text1=str_replace(array("\r\n", "\r", "\n", "chr(13)", "\R\N", "\R", "\N", "CHR(13)"),"<br />", $dato["contenido"]);
				$dato["descripcion"]=$text2=str_replace(array("\r\n", "\r", "\n", "chr(13)", "\R\N", "\R", "\N", "CHR(13)"),"<br />", $dato["descripcion"]);
			$salida.='
				
					<div id="pestana1">
						Contenido
					</div>
			
					<div id="pestana2">
						Video & Ejemplos
					</div>
					
					<article class="fecha_modificacion" >
						<b>Ultima Modificaci&oacute;n: </b>'.$dato["fecha_modificacion"].'
					</article>
					<div id="show1">
					<article class="contenidot" >
						<b>C&oacute;digo del Tema: </b>'.$dato["codig_tema"].'
					</article>
					
					<article class="contenidot">
						<b>Momento:  </b>'.$dato["momento"].'
					</article>
					
					<article class="contenidot">
						<b>Planificaci&oacute;n: </b>'.$dato["planificacion"].'
					</article>
					
					<article class="contenidot">
						<b>Objetivo: </b>'.$dato["objetivo"].'
					</article>
					
					<article class="titulo">
						<b>T&iacute;tulo: </b>'.$dato["titulo"].'
					</article>
					
					
					<article class="contenidot">
						<b>Contenido: </b>'.$dato["contenido"].'
					</article>
					
					<article class="contenidot">
						<b>Descripci&oacute;n: </b>'.$dato["descripcion"].'
					</article>
					</div>
					
					<div id="show2">
					<article class="cont_imagen">
						<b>Ejemplos:</b> <br>
					<article class="image">
						<img src='.$dato["ejemplo1"].' width="150px" height="150px" alt= "Ejemplo1" >
					</article>
			
					<article class="image">
						<img src='.$dato["ejemplo2"].' width="150px" height="150px" alt= "Ejemplo2" >
					</article>
					
					<article class="image">
						<img src='.$dato["ejemplo3"].' width="150px" height="150px" alt= "Ejemplo3" >
					</article>
					
					<article class="image">
						<img src='.$dato["ejemplo4"].' width="150px" height="150px" alt= "Ejemplo4" >
					</article>
					</article>
					
					<article class="cont_video">
					
						Video:
							<video controls width="250px" height="135px" class="video1">
								<source src='.$dato["video1"].' type="video/ogg">
							</video>
							
							<video controls width="250px" height="135px" class="video1">
								<source src='.$dato["video2"].' type="video/ogg">
							</video>	
					</article>

					</div>';
	 }
	 return $salida;
	 }

?>
