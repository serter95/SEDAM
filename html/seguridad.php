<?php 
//Inicio la sesión 
session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI")
{	
?>   	<!--si no existe, envio a la página de autentificacion--> 
<script language="javascript">
alert("Usted no posee los permisos necesarios contacte al administrador del sistema")
location.href="../index.php"; 
</script> 
<?php   	//ademas salgo de este script 
//   	exit(); 
}
?>	

