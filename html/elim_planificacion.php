<?php
include ("seguridad.php");
include ('conexion.php');

$nivel = $_SESSION['nivel'];

if($nivel == 2)

{
?>
<script language="javascript">
	var respuesta_e=confirm('Realmente Desea Eliminar la planificaci\u00f3n: <?php echo $_REQUEST['nom_act']?>?');

 	
	if(respuesta_e==true)
	{	
		location.href='eliminar_planificacion.php?id=<?php echo $_REQUEST['id']?>';
	}
		
	else
	{
		location.href='accion_planificacion.php';
	}
</script>
<?php
}

else
{

?>
<script language="javascript">
		alert('Solo el profesor puede realizar esta acci\u00f3n');
		location.href='accion_planificacion.php';
</script>
<?php
}
?>
