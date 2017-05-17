<?php
session_start();
include ("conexion.php");

$sql="INSERT INTO estadistica(activ_evaluacion,indic_evaluados,indic_alcanzados,indic_med_alcanzados,indic_no_alcanzados,actua_desempeno,lapso)
values('".$_REQUEST['activ_evaluacion']."','".$_REQUEST['indic_evaluados']."','".$_REQUEST['indic_alcanzados']."','".$_REQUEST['indic_med_alcanzados']."','".$_REQUEST['indic_no_alcanzados']."','".$_REQUEST['actua_desempeno']."','".$_REQUEST['lapso']."')";

mysql_query($sql);

?>
<script language="javascript">
alert ("Actividad Agregada con Exito!")
location.href='estadistica.php';
</script>
