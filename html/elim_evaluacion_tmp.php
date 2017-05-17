<?php
include ("seguridad.php");
include ('conexion.php');

?>
<script language="javascript">
	var respuesta_e=confirm('Realmente Desea Eliminar la Evaluacion: <?php echo $_REQUEST['pregunta']?>?');

 	
	if(respuesta_e==true)
	{	
		location.href='eliminar_evaluacion_tmp.php?id=<?php echo $_REQUEST['id']?>';
	}
		
	else
	{
		location.href='crear_evaluacion.php';
	}
</script>