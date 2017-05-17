<?php
include ("seguridad.php");
include ('conexion.php');

if($_REQUEST['nivel']==1)
{
?>
	<script language="javascript">
		alert("No puede eliminar al usuario administrador..!");
		window.location.href='consult_usuario.php';
	</script>
<?php
}
else
{
?>
	<script language="javascript">
		var respuesta=confirm('Realmente Desea Eliminar al Usuario: "<?php echo $_REQUEST['nom_usuario']?>"?');
		
		if(respuesta==true)
		{	
			window.location.href='elim_usuario_ver.php?id=<?php echo $_REQUEST['id']?>&ced=<?php echo $ced 
			?>&nivel=<?php echo $_REQUEST['nivel']?>';
		}
			
		else
		{
			window.location.href='consult_usuario.php';
		}
	</script>
<?php
}
?>
