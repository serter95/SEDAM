<?php
include ("seguridad.php");
include('conexion.php');

$id=$_GET['id'];
$cedula=trim($_GET['ci_profesor']);
$nombre=ucfirst( trim($_GET['nom_profesor']) );
$apellido=ucfirst( trim($_GET['ape_profesor']) );
$seccion_prof=$_GET['seccion_prof'];

$sql = "SELECT ci_profesor FROM profesor WHERE ci_profesor='$cedula'";

$result = mysql_query($sql) or die ("Error en $sql:". mysql_error());
$num=mysql_num_rows($result);

//echo $sql , $result;

//if($num<=1)
//{
	
$sql="UPDATE profesor SET nom_profesor='$nombre', ape_profesor='$apellido', seccion_prof='$seccion_prof' WHERE id='$id'";

mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de profesor','$fecha','$hora')";

mysql_query($aud);

?>
<script language="javascript">
alert('Profesor editado con \u00c9xito!')
location.href='consult_prof.php';
</script>
<?php
//}
//else
//{
?>
<!--<script language='javascript'>
alert ('Error, la cedula de identidad ya existe!')
location.href="mod_prof.php";
</script>-->
<?php
//}


