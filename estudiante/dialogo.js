	$(function(){
	//CONFIGURAMOS EL FORM TIPO DIALOG
	$('#ejemplo').dialog({
		autoOpen:false,//ESTABLECEMOS PARA QUE NO SE ABRA SOLO CUANDO SE CARGUE LA PAGINA
		modal:true,//BLOQUEAMOS OTRA ACCION MIENTRAS EL FORM ESTE ABIERTO
		title:'Ejemplos',//TITULO EN EL FORM
		width:'auto',//TAMAÑO DEL FORM
		height:'auto',
		show:{
			effect:"clip",
			duration:800
			},
		hide:{
			effect:"clip",
			duration:800
			}
	});
	//CUANDO PRESIONAMOS EL BOTON AGREGAR MOSTRAMOS EL FORMULARIO
	$('#bdialogo').on('click',function(){
		$('#ejemplo').dialog('open');//ABRIMOS EL FORMULARIO COMO TIPO DIALOG
	});
});