<?php
include ("seguridad.php");
include ('conexion.php');

?>
<script language="javascript">
	var respuesta=confirm('Realmente Desea Eliminar la actividad escogida?');
 	
	if(respuesta==true)
	{	
		window.location.href='eliminar_ver.php?id_act=<?php echo $_REQUEST['id_act']?>';
	}
		
	else
	{
		window.location.href='detalle_act1.php?cedula_estudiantil=<?php echo $_REQUEST['cedula_estudiantil'] ?>';
	}
</script>
