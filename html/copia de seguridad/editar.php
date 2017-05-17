<?php
include('conexion.php');

$sql="UPDATE estadistica SET activ_evaluacion='".$_REQUEST['activ_evaluacion']."',indic_evaluados='".$_REQUEST['indic_evaluados']."',indic_alcanzados='".$_REQUEST['indic_alcanzados']."',indic_med_alcanzados='".$_REQUEST['indic_med_alcanzados']."',indic_no_alcanzados='".$_REQUEST['indic_no_alcanzados']."',actua_desempeno='".$_REQUEST['actua_desempeno']."' WHERE num_actividad='".$_REQUEST['num_actividad']."' ";
mysql_query($sql);

?>
<script languague="javascript">
alert('Actividad Editada con Exito!')
location.href='muestra_estadistica.php';
</script>
