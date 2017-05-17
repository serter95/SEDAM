<?php
include ("conexion.php");
error_reporting(E_ALL^E_NOTICE);
function consultaUsuarios(){
	$salida='';
	$c=$_POST['codigo'];
	//$condicio=$_POST['condicion'];
	$op=$_POST['modificar'];
	switch($op)
	//if('modificar'==$_POST['modificar'])
	{
	case 'modificar':
		$guardar=mysql_query("UPDATE teoria set unidad='".$_POST['unidad']."', temat='".$_POST['tema']."', contenidot='".$_POST['contenido']."', ejemplo1='".$_POST['ejemplo1']."', ejemplo2='".$_POST['ejemplo2']."' where codigo=$c");
	break;
	}
	
	//Realizamos la Consulta que nos traera todos los registros de la BD
	$consulta=mysql_query("select codigo,unidad,temat,contenidot,ejemplo1,ejemplo2 from teoria where codigo=$c");
	 //Validamos si hay o no registros
	 if(mysql_num_rows($consulta)>0){
		 while($dato=mysql_fetch_array($consulta)){
			 $salida.='
			 <article class="contenidot" >
				'.$dato["codigo"].'
			</article>
			
			<article class="contenidot">
				'.$dato["temat"].'
			</article>
			
			<article class="contenidot">
				'.$dato["contenidot"].'
			</article>
			
			<article class="contenidot">
				'.$dato["ejemplo1"].'
			</article>
			
			<article class="contenidot">
				'.$dato["ejemplo2"].'
			</article>
			 ';
		 }
	 }
	 else
	 {
		 $salida='
				No hay Registros en la Base de Datos, Tu codigo!!
		 ';
	 }
	 return $salida;
}

/*function returnStatus($palabra){
	switch($palabra){
		case "Activo":
			$status="btn-success";
		break;
		case "Suspendido":
			$status="btn-warning";
		break;
		case "Cancelado":
			$status="btn-danger";
		break; 
	 }	
return $status;
}
/*if(!$conex=mysql_connect('localhost','root','')){
	$statusConexion=false;
}
if(!mysql_select_db('ajax',$conex)){
	$statusConexion=false;
}
else{
	mysql_query("set names 'utf-8'",$conex);
}*/

?>
