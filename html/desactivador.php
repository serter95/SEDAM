<?php
include ("seguridad.php");
include ('conexion.php');

$sql="UPDATE evaluacion SET activador='1' WHERE id_eva ='".$_REQUEST['id']."'";
mysql_query($sql);

?>
<script language="javascript">
	alert('La evaluaci\u00f3n fue desactivada con \u00c9xito');
	location.href='accion_evaluacion.php';
</script>
