<?php
include ("seguridad.php");
include ('conexion.php');
$nivel = $_SESSION['nivel'];

if($nivel == 2)

{
?>
<script language="javascript">
	var respuesta=confirm('Realmente Desea Eliminar la Evaluaci\u00f3n');
 	
	if(respuesta==true)
	{	
		window.location.href='eliminar_evaluacion.php?id=<?php echo $_REQUEST['id']?>';
	}
		
	else
	{
		window.location.href='accion_evaluacion.php';
	}
</script>
<?php
}

else
{

?>
<script language="javascript">
		alert('Solo el profesor puede realizar esta accion');
		location.href='accion_evaluacion.php';
</script>
<?php
}
?>
