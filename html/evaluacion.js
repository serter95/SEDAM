alert ("entro");
//validamos la accion a tomar cuando demos submit en el formulario frm_user
	$('#evaluacion').on('submit',function(){
		//AQUI USAMOS LA PETICION AJAX
		//var datos=$(this).serialize();
		$.ajax({
			type:'GET',//TIPO DE PETICION PUEDE SER GET
			dataType:"json",//EL TIPO DE DATO QUE DEVUELVE PUEDE SER JSON/TEXT/HTML/XML
			url:"gestor_crear_e.php",//DIRECCION DONDE SE ENCUENTRA LA OPERACION A REALIZAR
			
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

});