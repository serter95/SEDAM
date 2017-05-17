<?php

include ("seguridad.php");
include ('conexion.php');

$id=$_REQUEST['id'];

$sql="delete from preguntas_tmp where id_eva='$id'";
mysql_query($sql);

?>
<script language="javascript">
	alert('La evaluacion fue elimanada con exito!');
	location.href='crear_evaluacion.php';
</script>
