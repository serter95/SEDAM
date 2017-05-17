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

	$(function(){
	//CONFIGURAMOS EL FORM TIPO DIALOG
	$('#dpaso').dialog({
		autoOpen:false,//ESTABLECEMOS PARA QUE NO SE ABRA SOLO CUANDO SE CARGUE LA PAGINA
		modal:true,//BLOQUEAMOS OTRA ACCION MIENTRAS EL FORM ESTE ABIERTO
		title:'Paso a Paso',//TITULO EN EL FORM
		width:'770',//TAMAÑO DEL FORM
		height:'480',
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
	$('#bpaso').on('click',function(){
		$('#dpaso').dialog('open');//ABRIMOS EL FORMULARIO COMO TIPO DIALOG
	});
});
/*$(document).on('ready', function()
		{
		//Inicio del Datepicker;
		
		$("#fecha").datepicker();
		//Final del Datepicker
		$('#show2').hide();
		$('#show3').hide();
		$('#pestana1').css({'background-color': 'rgba(255,255,255,.15)'});
		$('#pestana1').css({'height': '40'});
		$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
		$('#pestana2').css({'height': '30'});
		/*******************************
		
		$("#pestana1").click(function(){
									  
			$('#show2').fadeOut(function() {
			$('#pestana1').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana1').css({'height': '40'});
			$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana2').css({'height': '30'});
			$('#show1').fadeIn();
			$('#show3').hide();
				});
			});
		$('#pestana2').click(function(){
			$('#show1').fadeOut(function(){
			$('#pestana1').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana2').css({'height': '40'});
			$('#pestana3').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana3').css({'height': '30'});
			$('#show2').fadeIn();
			$('#show3').fadeIn();
			$('#show3').hide();
				});
			});	
	
		/*$('#pestana3').click(function(){
			$('#show3').fadeOut(function(){
			$('#pestana1').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana2').css({'height': '30'});
			$('#pestana3').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana3').css({'height': '40'});
			$('#show2').fadeIn();
			$('#show1').fadeIn();
			$('#show1').hide();
				});				  
			});	
		

		});*/

$(document).on('ready', function()
		{
		//Inicio del Datepicker;
		
		$("#fecha").datepicker();
		//Final del Datepicker
		$('#show5').hide();
		$('#show6').hide();
		
	$('#pestana1').css({'background-color': '#bbb'});
		$('#pestana1').css({'height': '40'});
		$('#pestana2').css({'background-color': '#ddd'});
		$('#pestana2').css({'height': '30'});
		$('#pestana2').css({'background-color': '#ddd'});
		$('#pestana2').css({'height': '30'});
		/********************************/
		
		$("#pestana1").click(function(){
									  
			$('#show5').fadeOut(function() {
			$('#pestana1').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana1').css({'height': '40'});
			$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana2').css({'height': '30'});
			$('#pestana3').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana3').css({'height': '30'});
			$('#show4').fadeIn();
			$('#show6').hide();
				});					  		
			});
		
		$('#pestana2').click(function(){
			$('#show4').fadeOut(function(){
			$('#pestana1').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana2').css({'height': '40'});
			$('#pestana3').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana3').css({'height': '30'});
			$('#show5').fadeIn();
			$('#show6').hide();
				});					  
			});		
		
		$('#pestana3').click(function(){
			$('#show4').fadeOut(function(){
			$('#pestana1').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana2').css({'height': '30'});
			$('#pestana3').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana3').css({'height': '40'});
			$('#show6').fadeIn();
				});		  
			$('#show5').fadeOut(function(){
			$('#pestana1').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': 'rgba(00, 110, 100, 20)'});
			$('#pestana2').css({'height': '30'});
			$('#pestana3').css({'background-color': 'rgba(255,255,255,.15)'});
			$('#pestana3').css({'height': '40'});
			$('#show6').fadeIn();
				});
			});
		});	

	$(function(){
	//CONFIGURAMOS EL FORM TIPO DIALOG
	$('#resultado').dialog({
		autoOpen:false,//ESTABLECEMOS PARA QUE NO SE ABRA SOLO CUANDO SE CARGUE LA PAGINA
		modal:true,//BLOQUEAMOS OTRA ACCION MIENTRAS EL FORM ESTE ABIERTO
		title:'Resultado:',//TITULO EN EL FORM
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
	$('#mostrar_resultado').on('click',function(){
		$('#resultado').dialog('open');//ABRIMOS EL FORMULARIO COMO TIPO DIALOG
	});
});
