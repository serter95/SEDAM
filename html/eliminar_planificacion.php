<?php

include ("seguridad.php");
include ('conexion.php');

$id=$_REQUEST['id'];

$sql_pla="UPDATE planificacion SET estatus='1' WHERE id_pla ='$id'";
mysql_query($sql_pla);

$sql_pla="UPDATE actividad SET estatus='1' WHERE id_pla ='$id'";
mysql_query($sql_pla);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Eliminacion de planificacion','$fecha','$hora')";

mysql_query($aud);
?>
<script language="javascript">
	alert('La planificaci\u00f3;n fue eliminado con \u00e9xito');
	location.href='accion_planificacion.php';
</script>

