<?php
	include("conexion.php");
	error_reporting(E_ALL^E_NOTICE);
	$formatos = array('.jpg', '.png', '.gif');
	$formato_video = array('.ogv', '.jpg', '.png', '.gif');
	
	//Guardar Salto de Linea
	
		$_REQUEST['titulo']=strtolower($_REQUEST['titulo']);
		$_REQUEST['contenido']=strtolower($_REQUEST['contenido']);
		$_REQUEST['descripcion']=strtolower($_REQUEST['descripcion']);
		$_REQUEST['titulo']=ucfirst($_REQUEST['titulo']);
		$_REQUEST['contenido']=ucfirst($_REQUEST['contenido']);
		$_REQUEST['descripcion']=ucfirst($_REQUEST['descripcion']);
		//saltoLinea('$text1');
		//saltoLinea('$text2');

	
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

		if (file_exists("../img/$nombreArchivo1")){
			$comprobacionU1="si";
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo1; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		}
		if (file_exists("../img/$nombreArchivo2"))
		{
			$comprobacionU2="si";
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo2; ?> ya existe, cambie el nombre para poder seguir");
			</script>
			
		<?php
		}
		if (file_exists("../img/$nombreArchivo3"))
		{
			$comprobacionU3="si";
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo3; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		}
		if (file_exists("../img/$nombreArchivo4")){
			$comprobacionU4="si";
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo4; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		if($nombreArchivo5!="1"){
		if (file_exists("../img/$nombreArchivo5")){
			$comprobacionU5="si";
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo5; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		}
		
		if($nombreArchivo6!="1"){
		//Condicional que verifica el usuario cargo un segundo video
		if (file_exists("../img/$nombreArchivo6")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo6; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		}
//Finalizacion del chequeo de la existencia de los archivos
		}
//Comparacion de los formatos;
			if(in_array($ext1, $formatos)){
				$compatibilidad1="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo1; ?> no es compatible");
		</script>
		
		<?php
				}
			if(in_array($ext2, $formatos)){
				$compatibilidad2="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo2; ?> no es compatible");
		</script>
		
		<?php
				}
			if(in_array($ext3, $formatos)){
				$compatibilidad3="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo3; ?> no es compatible");
		</script>
		
		<?php
				}
			if(in_array($ext4, $formatos)){
				$compatibilidad4="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo4; ?> no es compatible");
		</script>
		
		<?php
				}
			if(in_array($ext5, $formato_video)){
				$compatibilidad5="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo5; ?> no es compatible");
		</script>
		
		<?php
				}
			if($nombreArchivo6!="1"){
			if(in_array($ext6, $formato_video))
			{
				$compatibilidad6="si";
			}
				else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion del <?php echo $nombreArchivo6; ?> no es compatible");
		</script>
		
		<?php
				}
			}
			
			if(($compatibilidad1!="") && ($compatibilidad2!="") && ($compatibilidad3!="") && ($compatibilidad4!="") && ($compatibilidad5!="")){
			
				if(($comprobacionU1=="") && ($comprobacionU2=="") && ($comprobacionU3=="") && ($comprobacionU4=="") && ($comprobacionU5=="")){
					
//condicional que revisa si el segundo video existe para cargar

					if($nombreArchivo6!="1"){
			if((move_uploaded_file( $nombreTmpArchivo1, "../img/$nombreArchivo1")) && (move_uploaded_file( $nombreTmpArchivo2, "../img/$nombreArchivo2")) && (move_uploaded_file( $nombreTmpArchivo3, "../img/$nombreArchivo3")) && (move_uploaded_file( $nombreTmpArchivo4, "../img/$nombreArchivo4")) && (move_uploaded_file( $nombreTmpArchivo5, "../img/$nombreArchivo5")) && (move_uploaded_file( $nombreTmpArchivo6, "../img/$nombreArchivo6")))
					{
					$rnombreArchivo1="../img/$nombreArchivo1";
					$rnombreArchivo2="../img/$nombreArchivo2";
					$rnombreArchivo3="../img/$nombreArchivo3";
					$rnombreArchivo4="../img/$nombreArchivo4";
					$rnombreArchivo5="../img/$nombreArchivo5";
					$rnombreArchivo6="../img/$nombreArchivo6";


$sql="INSERT INTO tema(codig_tema,fecha_creacion,momento,proyecto,objetivo,titulo,contenido,descripcion,ejemplo1,ejemplo2,ejemplo3,ejemplo4,video1,video2)values('".$_REQUEST['codigo']."','".$_REQUEST['fecha_creacion']."','".$_REQUEST['momento']."','".$_REQUEST['proyecto']."','".$_REQUEST['objetivo']."','".$_REQUEST['titulo']."','".$_REQUEST['contenido']."','".$_REQUEST['descripcion']."','$rnombreArchivo1','$rnombreArchivo2','$rnombreArchivo3','$rnombreArchivo4','$rnombreArchivo5','$rnombreArchivo6')";
mysql_query($sql);			
				?>  
							<script language="javascript">
								alert("Se guardo con exito");
								location.href="indice_teoria.php";
							</script> 
						<?php 
			
					}
					}
//El else que reacciona si no esta el segundo video
						else{
						
							if ((move_uploaded_file( $nombreTmpArchivo1, "../img/$nombreArchivo1")) && (move_uploaded_file( $nombreTmpArchivo2, "../img/$nombreArchivo2")) && (move_uploaded_file( $nombreTmpArchivo3, "../img/$nombreArchivo3")) && (move_uploaded_file( $nombreTmpArchivo4, "../img/$nombreArchivo4")) && (move_uploaded_file( $nombreTmpArchivo5, "../img/$nombreArchivo5")) )
								{
									$rnombreArchivo1="../img/$nombreArchivo1";
									$rnombreArchivo2="../img/$nombreArchivo2";
									$rnombreArchivo3="../img/$nombreArchivo3";
									$rnombreArchivo4="../img/$nombreArchivo4";
									$rnombreArchivo5="../img/$nombreArchivo5";

			
$sql="INSERT INTO tema(codig_tema,fecha_creacion,momento,proyecto,objetivo,titulo,contenido,descripcion,ejemplo1,ejemplo2,ejemplo3,ejemplo4,video1)values('".$_REQUEST['codigo']."','".$_REQUEST['fecha_creacion']."','".$_REQUEST['momento']."','".$_REQUEST['proyecto']."','".$_REQUEST['objetivo']."','".$_REQUEST['titulo']."','".$_REQUEST['contenido']."','".$_REQUEST['descripcion']."','$rnombreArchivo1','$rnombreArchivo2','$rnombreArchivo3','$rnombreArchivo4','$rnombreArchivo5')";
mysql_query($sql);
			
				?>  
							<script language="javascript">
								alert("Se guardo con exito");
								location.href="indice_teoria.php"; 
							</script> 
						<?php 
						
						
						}
					}
				}
				
				}
					else
						{
						?>  
							<script language="javascript">
								alert("Error con la compatibilidad de los arcivos");
								location.href="crear_tema.php"; 
							</script> 
						<?php  
						}