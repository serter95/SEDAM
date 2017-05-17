<?php
include ("seguridad.php");
include ("conexion.php");

$id_act=$_REQUEST['id_act'];

$sql="UPDATE actividad SET estatus='1' WHERE id_act='$id_act'";
mysql_query($sql);

$rel="UPDATE rel_est_act SET estatus='1' WHERE id_act='$id_act'";
mysql_query($rel);

?>
<script language="javascript">
	alert('La actividad fue eliminado con exito');
	location.href='muestra_estadistica.php';
</script>
