<?php
include ("seguridad.php");
include ('conexion.php');
$nivel = $_SESSION['nivel'];

if($nivel == 2)

{
?>
<script language="javascript">
	var respuesta_e=confirm('Realmente Desea Eliminar el Proyecto: <?php echo $_REQUEST['num_proyecto']?> - <?php echo $_REQUEST['contenido']?> ?');

 	
	if(respuesta_e==true)
	{	
		location.href='eliminar_proyecto.php?id=<?php echo $_REQUEST['id']?>';
	}
		
	else
	{
		location.href='accion_proyecto.php';
	}
</script>
<?php
}

else
{

?>
<script language="javascript">
		alert('Solo el profesor puede realizar esta accion');
		location.href='accion_proyecto.php';
</script>
<?php
}
?>