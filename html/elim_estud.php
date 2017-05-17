<?php
include ("seguridad.php");
include ('conexion.php');

?>
<script language="javascript">
	var respuesta=confirm('Realmente Desea Eliminar al estudiante: "<?php echo $_REQUEST['nom_estudiante']?> <?php echo $_REQUEST['ape_estudiante']?>"?');
 	
	if(respuesta==true)
	{	
		window.location.href='elim_estud_ver.php?cedula_estudiantil=<?php echo $_REQUEST['cedula_estudiantil']?>';
	}
		
	else
	{
		window.location.href='muestra_estudiante.php';
	}
</script>

