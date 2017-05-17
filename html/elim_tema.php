<?php
include ("seguridad.php");
include ('conexion.php');

$nivel = $_SESSION['nivel'];

if($nivel == 2)

{

?>
<script language="javascript">
	var respuesta_e=confirm('Realmente Desea Eliminar la Evaluacion: <?php echo $_REQUEST['cod_tema']?> <?php echo $_REQUEST['tema']?>?');

 	
	if(respuesta_e==true)
	{	
		location.href='eliminar_teoria.php?cod_tema=<?php echo $_REQUEST['cod_tema']?>';
	}
		
	else
	{
		location.href='accion_teoria.php';
	}
</script>
<?php
}

else
{

?>
<script language="javascript">
		alert('Solo el profesor puede realizar esta accion');
		location.href='accion_teoria.php';
</script>
<?php
}
?>