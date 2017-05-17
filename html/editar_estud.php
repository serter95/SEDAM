<?php
include ("seguridad.php");
include('conexion.php');

$id=$_GET['id'];
$cedula_est=trim( $_GET['cedula_estudiantil']);
$nom_est=ucfirst( trim( $_GET['nom_estudiante']));
$ape_est=ucfirst( trim( $_GET['ape_estudiante']));
$edad=trim( $_GET['edad']);
$sexo=$_GET['sexo'];
$seccion=$_GET['seccion'];


$ci="SELECT ci_profesor FROM profesor WHERE seccion_prof Like '$seccion' AND estatus='0'";

$prof=mysql_query($ci);
$ci_prof=mysql_fetch_array($prof);

		if($ci_prof!=0)
			{
				$sql="UPDATE estudiante SET nom_estudiante='$nom_est',ape_estudiante='$ape_est',
				edad='$edad',sexo='$sexo',seccion='$seccion',ci_profesor='".$ci_prof['ci_profesor']."' WHERE id='$id'";

				mysql_query($sql);
				
				
				$fecha=date('Y/m/d'); $hora=date('H:i:s');

				$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Modificacion de estudiante','$fecha','$hora')";

				mysql_query($aud);

?>
		<script language="javascript">
		alert('Estudiante editado con \u00c9xito!')
		location.href='muestra_estudiante.php';
		</script>
<?php			
			}
		else
			{
				$nom=$_SESSION['nom_usuario'];
				$niv="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
				$res=mysql_query($niv);
					
					while($dt=mysql_fetch_array($res))
						{
							
							if($dt['nivel']==1)
							{
?>
								<script language="javascript">
								alert("No existe un profesor asignado para esta secci\u00f3n, Por favor ingrese uno");
								location.href="reg_prof.php";
								</script>
<?php
							}
							
							if($dt['nivel']==2)
							{
							?>
								<script language="javascript">
								alert("No Existe un profesor asignado para esta secci\u00f3n, contacte a el administrador del sistema")
								location.href="reg_estudiante.php";
								</script>
							<?php	
							}
						}
			}


?>
