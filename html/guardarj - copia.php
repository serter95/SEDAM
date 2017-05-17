
	<?php
	include ("conexion.php");
	
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
		if($_FILES['video2']['name']=!""){
		$nombreArchivo6 = $_FILES['video2']['name'];
		}
	//Nombre Temporal del archivo
		$nombreTmpArchivo1 = $_FILES['ejemplo1']['tmp_name'];
		$nombreTmpArchivo2 = $_FILES['ejemplo2']['tmp_name'];
		$nombreTmpArchivo3 = $_FILES['ejemplo3']['tmp_name'];
		$nombreTmpArchivo4 = $_FILES['ejemplo4']['tmp_name'];
		$nombreTmpArchivo5 = $_FILES['video1']['tmp_name'];
		if($_FILES['video2']['name']=!""){
		$nombreTmpArchivo6 = $_FILES['video2']['tmp_name'];
		}
	//Extencion
		$ext1 = substr($nombreArchivo1, strrpos($nombreArchivo1, '.'));
		$ext2 = substr($nombreArchivo2, strrpos($nombreArchivo2, '.'));
		$ext3 = substr($nombreArchivo3, strrpos($nombreArchivo3, '.'));
		$ext4 = substr($nombreArchivo4, strrpos($nombreArchivo4, '.'));
		$ext5 = substr($nombreArchivo5, strrpos($nombreArchivo5, '.'));
		if($_FILES['video2']['name']=!""){
		$ext6 = substr($nombreArchivo6, strrpos($nombreArchivo6, '.'));
		}
		if ((file_exists("../img/$nombreArchivo1")) || (file_exists("../img/$nombreArchivo2")) || (file_exists("../img/$nombreArchivo3")) || (file_exists("../img/$nombreArchivo4")) || (file_exists("../img/$nombreArchivo5")) || (file_exists("../img/$nombreArchivo6")) )
		{
		if (file_exists("../img/$nombreArchivo1")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo1; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		if (file_exists("../img/$nombreArchivo2")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo2; ?> ya existe, cambie el nombre para poder seguir");
			</script>
			
		<?php
		
		}
		if (file_exists("../img/$nombreArchivo3")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo3; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		if (file_exists("../img/$nombreArchivo4")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo4; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		if (file_exists("../img/$nombreArchivo5")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo5; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		if (file_exists("../img/$nombreArchivo6")){
		?>
			<script type="text/javascript">
			
				alert("El archivo <?php echo $nombreArchivo6; ?> ya existe, cambie el nombre para poder seguir");
			
			</script>
			
		<?php
		
		}
		}
		else{
			if((in_array($ext1, $formatos)) and (in_array($ext2, $formatos)) and (in_array($ext3, $formatos)) and (in_array($ext4, $formatos)) and (in_array($ext5, $formato_video)) and (in_array($ext6, $formato_video)) )
				{
					if ( (move_uploaded_file( $nombreTmpArchivo1, "../img/$nombreArchivo1")) && (move_uploaded_file( $nombreTmpArchivo2, "../img/$nombreArchivo2")) && (move_uploaded_file( $nombreTmpArchivo3, "../img/$nombreArchivo3")) && (move_uploaded_file( $nombreTmpArchivo4, "../img/$nombreArchivo4")) && (move_uploaded_file( $nombreTmpArchivo5, "../img/$nombreArchivo5")) && (move_uploaded_file( $nombreTmpArchivo6, "../img/$nombreArchivo6")) )
					{
					$rnombreArchivo1="../img/$nombreArchivo1";
					$rnombreArchivo2="../img/$nombreArchivo2";
					$rnombreArchivo3="../img/$nombreArchivo3";
					$rnombreArchivo4="../img/$nombreArchivo4";
					$rnombreArchivo5="../img/$nombreArchivo5";
					$rnombreArchivo6="../img/$nombreArchivo6";
				
$sql="INSERT INTO tema(codig_tema,momento,proyecto,objetivo,titulo,contenido,descripcion,fecha_creacion,ejemplo1,ejemplo2,ejemplo3,ejemplo4,video1,video2)values('".$_POST['codigo']."','".$_POST['momento']."','".$_POST['proyecto']."','".$_POST['titulo']."','".$_POST['contenido']."','".$_POST['descripcion']."','".$_POST['fecha_creacion']."','".$_POST['materia']."',$rnombreArchivo1,$rnombreArchivo2,$rnombreArchivo3,$rnombreArchivo4,$rnombreArchivo5,$rnombreArchivo6)";
			mysql_query($sql);
					}
					else{
						echo "no se guardo";
					
					}
				}
			else
				{
		?>
		<script type="text/javascript">
			alert ("La extencion de la Imagen o del Video no es compatible");
		</script>
		
		<?php
				}
		?>
	<script type="text/javascript">
		alert("se guardo con exito");
	</script>
	<?php
		}
	?>