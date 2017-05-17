<?php
	session_start();
	
	include ("conexion.php");
	$u=$_POST['usuario'];
	$c=$_POST['contrasena'];
	
	$sql="select * from usuario where nom_usuario='$u' and contrasena='$c'";
		
	$rs = mysql_query($sql) or die ("Error en $sql:". mysql_error());
	$row = mysql_num_rows($rs);
	

	
if($row > 0)
{
		$_SESSION["autentificado"]= "SI";
		$_SESSION["nom_usuario"]= $u;
	
	while($datos=mysql_fetch_array($rs))
	{
	
	$datos=$datos['nivel'];
		
	switch($_SESSION['nivel']=$datos)
		{
	case '1':
	header("location:../profesor/principal.php");
	break;

	case '2':
	header("location:../estudiante/principal_E.php");
	break;
		}
	}
}

else
{
?>
<script languague="javascript">
alert("Datos Incorrectos")
location.href="../index.php";
</script>
<?php
}
?>
