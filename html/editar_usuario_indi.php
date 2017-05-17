<?php
include ("seguridad.php");
include('conexion.php');

$id=$_GET['id'];
//$nom_usuario=trim($_GET['nom_usuario']);
$nueva_con=trim($_GET['nueva_contrasena']);
$rep_nueva_con=trim($_GET['rep_nueva_contrasena']);

if($nueva_con!=$rep_nueva_con)

{
	$bus="SELECT * FROM usuario WHERE id='$id'";
	$query=mysql_query($bus);
	while($dato=mysql_fetch_assoc($query))
	{
				$nom=$dato['nom_usuario'];
				$contra=$dato['contrasena'];
				$nivel=$dato['nivel'];
				
				if($nivel==2)
				{
					$dueno="Profesor";
				}
				else
				{
					$dueno="Estudiante";
				}
	}
	
?>
<script language="javascript">
alert('Error en la verificacion de contrasena, intente de nuevo');
location.href='mod_usuario_indi.php?id=<?php echo $id?>&nom_usuario=<?php echo $nom?>&contrasena=<?php echo $contra
?>&nivel=<?php echo $nivel?>&dueno=<?php echo $dueno?>';
</script>

<?php
}
else
{

$sql="UPDATE usuario SET contrasena='$nueva_con' WHERE id='$id' ";

mysql_query($sql);

$fecha=date('Y/m/d'); $hora=date('H:i:s');

$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de usuario','$fecha','$hora')";

mysql_query($aud);

?>
<script language="javascript">
alert('Usuario editado con Exito!')
location.href='cuenta_usuario.php';
</script>
<?php
}
?>
