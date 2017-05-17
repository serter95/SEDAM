<?php
include ("seguridad.php");
include("conexion.php");
include("obtener_fecha.php");

$nom=$_SESSION['nom_usuario'];
	
		$sql="SELECT nivel FROM usuario WHERE nom_usuario='$nom'";
		$niv_usu=mysql_query($sql);
		$niv_usua=mysql_fetch_assoc($niv_usu);
		$nivel=$niv_usua['nivel'];
		
		if($nivel!=3)
		{

$cedula_est=trim( $_GET['cedula_estudiantil']);
$nom_est=ucfirst( trim( $_GET['nom_estudiante']));
$ape_est=ucfirst( trim( $_GET['ape_estudiante']));
$edad=trim( $_GET['edad']);
$sexo=$_GET['sexo'];
$seccion=$_GET['seccion'];

$sql="SELECT cedula_estudiantil FROM estudiante WHERE estatus='0' and cedula_estudiantil In ('$cedula_est')";
$con=mysql_query($sql);
$dato=mysql_fetch_array($con);
$ces=$dato['cedula_estudiantil']; 
		
		if($cedula_est == $ces)
			{
			?>
				<script language="javascript">
				alert("El estudiante ya existe, registre uno nuevo");	
				location.href='reg_estudiante.php';
				</script>
			<?php	
			}
		else
			{

				$ci="SELECT ci_profesor FROM profesor WHERE seccion_prof='$seccion' AND estatus='0'";
				$prof=mysql_query($ci);
				$ci_prof=mysql_fetch_array($prof);

			if($ci_prof!=0)
				{		
					$sql="INSERT INTO estudiante (cedula_estudiantil, nom_estudiante, ape_estudiante, edad, sexo, seccion, ano, estatus,
			 ci_profesor) values ('$cedula_est', '$nom_est', '$ape_est', '$edad', '$sexo', '$seccion', '$ano', '0','".$ci_prof['ci_profesor']."')";
					mysql_query($sql);
					
					$usu="INSERT INTO usuario (nom_usuario, contrasena, nivel, estatus) VALUES ('$cedula_est', '".$nom_est."".$ape_est."',3,0)";
					mysql_query($usu);
					
					$nom_usu="UPDATE estudiante SET nom_usuario='$cedula_est' WHERE cedula_estudiantil='$cedula_est'";
					mysql_query($nom_usu);
					
					$fecha=date('Y/m/d'); $hora=date('H:i:s');

					$aud="INSERT INTO auditoria (nom_usuario, accion, fecha, hora)values('".$_SESSION['nom_usuario']."','Insercion de estudiante','$fecha','$hora')";

					mysql_query($aud);
?>
					<script language="javascript">
					alert("Nuevo estudiante agregado con \u00c9xito!")	
					location.href='reg_estudiante.php';
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
								alert("No Existe un profesor asignado para esta secci\u00f3n, Por favor ingrese uno")
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
			
			}
			
		}
else
{
?>
<script language="javascript">
alert("Usted no es Administrador o Profesor");
window.location.href='principal.php';
</script>
<?php
}
?>		
