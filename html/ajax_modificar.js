//Configuracion del Dialogo
$(function(){
	//CONFIGURAMOS EL FORM TIPO DIALOG
	$('#form').dialog({
		autoOpen:false,//ESTABLECEMOS PARA QUE NO SE ABRA SOLO CUANDO SE CARGUE LA PAGINA
		modal:true,//BLOQUEAMOS OTRA ACCION MIENTRAS EL FORM ESTE ABIERTO
		title:'Modificacion de Contenido',//TITULO EN EL FORM
		width: 1000,//TAMAÑO DEL FORM
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
	$('#modificar').on('click',function(){
		$('#form').dialog('open');//ABRIMOS EL FORMULARIO COMO TIPO DIALOG
		});	

	//validamos la accion a tomar cuando demos submit en el formulario frm_user
	$('#formt').on('submit',function(){
		
		$.ajax({
			type:'POST',//TIPO DE PETICION PUEDE SER GET
			dataType:"json",//EL TIPO DE DATO QUE DEVUELVE PUEDE SER JSON/TEXT/HTML/XML
			url:"gestor_modif_t.php",//DIRECCION DONDE SE ENCUENTRA LA OPERACION A REALIZAR
			data:'Op='+ $("#opcion").val() +'&'+datos,//DATOS ENVIADOS PUEDE SER TEXT A TRAVEZ DE LA URL O PUEDE SER UN OBJETO
			
			success: function(response){//ACCION QUE SUCEDE DESPUES DE REALIZAR CORRECTAMENTE LA PETCION EL CUAL NOS TRAE UNA RESPUESTA
				if(response.respuesta=="DONE"){//MANDAMOS EL MENSAJE QUE NOS DEVUELVE EL RESPONSE
					//$("#listausuarios").html(response.contenido);//cargo los registros que devuelve ajax
					$('#form').dialog('close');//CERRAMOS EL FORM
										
				}
				else{
					alert("Ocurrio un error al ejecutar la operacion, intentelo de nuevo");
					$('#loader').hide();	
				}

			},
			error: function(){//SI OCURRE UN ERROR 
				alert('El servicio no esta disponible intentelo mas tarde');//MENSAJE EN CASO DE ERROR
				$('#loader').hide();//OCULTAMOS EL DIV LOADER
			}
		});
		return false;//RETORNAMOS FALSE PARA QUE NO HAGA UN RELOAD EN LA PAGINA
	});
	
	//capturamos los eventos click que se den en la seccion tbody de la tabla en cualquier a
	$("#agregar").on("click",function(){
		//asignamos a variable por el objeto JQuery que seria toda la fila
		var pos=$(this).parent().parent();
		//recorremos todos los elementos del form de tipo input text y select y los llenamos con los
		//datos de la tabla.
		$("#frm_user input[type=text],select").each(function(index) {
			//asignamos a cada campo el valor correspondiente.
            $(this).val($(pos).children("article:eq("+index+")").text());
        });
		//abrimos el formulario como tipo dialog
		$("#opcion").val("editar");
		$("#form").dialog('open');
		
	});
// Cierre del Primer Dialogo
});

$(document).on('ready', function()
		{

		$('#show2').hide();
		$('#pestana1').css({'background-color': '#bbb'});
		$('#pestana1').css({'height': '40'});
		$('#pestana2').css({'background-color': '#ddd'});
		$('#pestana2').css({'height': '30'});
		/********************************/
		
		$("#pestana1").click(function(){	  
			$('#show2').fadeOut(function() {
			$('#pestana1').css({'background-color': '#bbb'});
			$('#pestana1').css({'height': '40'});
			$('#pestana2').css({'background-color': '#ddd'});
			$('#pestana2').css({'height': '30'});
			$('#show1').fadeIn();							 				 
				});					  		
			});
		$('#pestana2').click(function(){
			$('#show1').fadeOut(function(){
			$('#pestana1').css({'background-color': '#ddd'});
			$('#pestana1').css({'height': '30'});
			$('#pestana2').css({'background-color': '#bbb'});
			$('#pestana2').css({'height': '40'});
			$('#show2').fadeIn();	
				});					  
			});			 
		});