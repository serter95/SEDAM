<!--este va despues del formulario del gestor de entrada-->

<?php
include "conexion.php";
/*include "verificar_usuario.php";*/

//usuario y clave pasados por el formulario
$usuario = mysql_real_escape_string($_POST['usuario']);
$contrasena =mysql_real_escape_string($_POST['contrasena']);
//usa la funcion conexiones() que se ubica dentro de funciones.php
	//sentencia sql para consultar el nombre del usuario
	 $sql = "SELECT * FROM usuario WHERE nom_usuario='$usuario' AND contrasena='$contrasena'";
	//ejecucion de la sentencia anterior
	$ejecutar_sql=mysql_query($sql);
	$num=mysql_num_rows($ejecutar_sql);
	
	//si existe inicia una sesion y guarda el nombre del usuario
	
	
	if ($num){
		//inicio de sesion
		session_start();

		//configurar un elemento usuario dentro del arreglo global $_SESSION
		//deben colocar la ubicaion de el campo teniendo en cuenta que es un arreglo y que comienza por 0, 
		//en mi caso la ubicacion de mi name esta de segundo, segun el arreglo queda de primero

		$datos=mysql_fetch_array($ejecutar_sql);
		$_SESSION['usuario']=$datos['5'];
		$_SESSION['nivel']=$datos['3'];
		$_SESSION["autentificado"]='SI';
		$_SESSION["nom_usuario"]= $usuario;
		//retornar verdadero
		
		if($_SESSION['nivel']==1)
		{
			$_SESSION['dueno']="Administrador";
			
			$_SESSION['nom_d']=$_SESSION["nom_usuario"];
		}
		if($_SESSION['nivel']==2)
		{
			$_SESSION['dueno']="Profesor";
			$d_usu="SELECT * FROM profesor WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
			$d_usua=mysql_query($d_usu);
			$d_usuario=mysql_fetch_assoc($d_usua);
			
			$_SESSION['nom_d']=$d_usuario['nom_profesor'].' '.$d_usuario['ape_profesor'];
		}
		if($_SESSION['nivel']==3)
		{
			$_SESSION['dueno']="Estudiante";
			$d_usu="SELECT * FROM estudiante WHERE nom_usuario='".$_SESSION['nom_usuario']."'";
			$d_usua=mysql_query($d_usu);
			$d_usuario=mysql_fetch_assoc($d_usua);
			
			$_SESSION['nom_d']=$d_usuario['nom_estudiante'].' '.$d_usuario['ape_estudiante'];
		}
		
	//si es valido accedemos a inicio
	
	switch($_SESSION['nivel']){
		
	case '1':
	header("location:principal.php");
	break;

	case '2':
	header("location:principal.php");
	break;
	
	case '3':
	header("location:principal.php");
	break;
		}
	}

else {?>
<script language="javascript">
alert("Datos Incorrectos")
location.href="../index.php";
</script>
<?php
}
?>
