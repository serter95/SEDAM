<?php
include ("seguridad.php");
include ('conexion.php');

?>
<script language="javascript">
	var respuesta=confirm('Realmente Desea Eliminar al Profesor: "<?php echo $_REQUEST['nom_profesor']?> <?php echo $_REQUEST['ape_profesor']?>" que su C.I es: "<?php echo $_REQUEST['ci_profesor']?>"?');
 	
	if(respuesta==true)
	{	
		window.location.href='elim_prof_ver.php?id=<?php echo $_REQUEST['id']?>';
	}
		
	else
	{
		window.location.href='consult_prof.php';
	}
</script>
