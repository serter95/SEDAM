<?php
include ('conexion.php');

$sql="DELETE FROM estadistica WHERE num_actividad ='".$_REQUEST['num_actividad']."'";

mysql_query($sql);

?>
<script language="javascript">
alert("La actividad fue eliminada con exito");
location .href='muestra_estadistica.php';
</script>
