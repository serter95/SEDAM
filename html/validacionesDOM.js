//alert("exito");

/*	var r = ('problema':/< /W >/g)

function valid(o,w)
{
	o.value = o.value.replace(r <w >,'');
}
*/

function auditoria()
{
	var nom_usu = document.getElementById("nom_usu").selectedIndex;
	var fecha_i = document.getElementById("datepicker_i").value;
	var fecha_f = document.getElementById("datepicker_f").value;

	if(nom_usu == null || nom_usu == 0)
	{
		alert("Seleccione un nombre de usuario");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(fecha_i)))
	{
		alert("La fecha del campo (Fecha inicial) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda");
		return false;
	}

	if(!(/^[0-9]{4}(\/|-)[0-9]{2}(\/|-)[0-9]{2}$/.test(fecha_f)))
	{
		alert("La fecha del campo (Fecha Final) debe ordenarse en A\u00f1o/Mes/D\u00eda o A\u00f1o-Mes-D\u00eda");
		return false;
	}

	if(fecha_i == null || fecha_i == 0)
	{
		alert("Seleccione la fecha inicial");
		return false;
	}

	if(fecha_i == null || fecha_i == 0)
	{
		alert("Seleccione la fecha inicial");
		return false;
	}

	if(fecha_i > fecha_f)
	{
		alert("La fecha no es valida");
		return false;
	}

	return true;
}

function restore()
{
	//var restore = document.getElementById("restore").value;
	var restore = document.getElementById("res").value;

	if(restore == null || restore == 0)
	{
		alert("Seleccione el archivo que va a restaurar");
		return false;
	}

	return true;
}

function validc_eval()
{
	var problema = document.getElementById("problema").value;
	var respuesta = document.getElementById("respuesta").value;
	var valor2 = document.getElementById("valor2").value;
	var valor3 = document.getElementById("valor3").value;
	var valor4 = document.getElementById("valor4").value;



	if(problema == null || problema == 0 || /^\s+$/.test(problema))
	{
		alert("Ingrese el problema");
		return false;
	}

	if(problema.length > 70)
	{
		alert("El problema no puede tener m\u00e1s de 70 caracteres");
		return false;
	}

	if(respuesta == null || respuesta == 0 || /^\s+$/.test(respuesta))
	{
		alert("Debe llenar la respuesta con n\u00fameros");
		return false;
	}

	if(valor2 == null || valor2 == 0 || /^\s+$/.test(valor2))
	{
		alert("Debe llenar el distractor 1 con n\u00fameros");
		return false;
	}


	if(valor3 == null || valor3 == 0 || /^\s+$/.test(valor3))
	{
		alert("Debe llenar el distractor 2 con n\u00fameros");
		return false;
	}

	if(valor4 == null || valor4 == 0 || /^\s+$/.test(valor4))
	{
		alert("Debe llenar el distractor 3 con n\u00fameros");
		return false;
	}


	return true;
}

function valid_eval()
{
	var planificacion = document.getElementById("planificacion").selectedIndex;
	var tema = document.getElementById("tema").selectedIndex;

	if(planificacion == 0 || planificacion == null)
	{
		alert("Seleccione una opci\u00f3n del campo (Planificaci\u00f3n)");
		return false;
	}

	if(tema == 0 || tema == null)
	{
		alert("Seleccione una opci\u00f3n del campo (C\u00f3digo del Proyecto)");
		return false;
	}

	return true;
}

function mod_eval()
{
	var problema = document.getElementById("problema").value;
	var respuesta = document.getElementById("respuesta").value;
	var planificacion = document.getElementById("planificacion").selectedIndex;
	var tema = document.getElementById("tema").selectedIndex;
	var valor2 = document.getElementById("valor2").value;
	var valor3 = document.getElementById("valor3").value;
	var valor4 = document.getElementById("valor4").value;



	if(problema == null || problema == 0 || /^\s+$/.test(problema))
	{
		alert("Ingrese el problema");
		return false;
	}

	if(problema.length > 70)
	{
		alert("El problema no puede tener m\u00e1s de 70 caracteres");
		return false;
	}

	if(planificacion == null)
	{
		alert("Seleccione una opci\u00f3n del campo (Planificaci\u00f3n)");
		return false;
	}

	if(tema == null)
	{
		alert("Seleccione una opci\u00f3n del campo (tema)");
		return false;
	}

	if(respuesta == null || respuesta == 0 || /^\s+$/.test(respuesta))
	{
		alert("Debe llenar la respuesta con n\u00fameros");
		return false;
	}

	if(valor2 == null || valor2 == 0 || /^\s+$/.test(valor2))
	{
		alert("Debe llenar el distractor 1 con n\u00fameros");
		return false;
	}


	if(valor3 == null || valor3 == 0 || /^\s+$/.test(valor3))
	{
		alert("Debe llenar el distractor 2 con n\u00fameros");
		return false;
	}

	if(valor4 == null || valor4 == 0 || /^\s+$/.test(valor4))
	{
		alert("Debe llenar el distractor 3 con n\u00fameros");
		return false;
	}


	return true;
}

function val_proyecto()

	{
		var num_proyecto = document.getElementById("num_proyecto").value;
		var contenido = document.getElementById("proyecto").value;
		var descripcion = document.getElementById("descripcion").value;

		if(num_proyecto == null || num_proyecto <= 0 || /^\s+$/.test(num_proyecto) || !(/^[0-9]+$/.test(num_proyecto)))
		{
			alert("Llene el campo (Proyecto N\u00famero) solo con n\u00fameros");
			return false;
		}

		if(num_proyecto > 5)
		{
			alert("El valor campo (Proyecto N\u00famero) debe ser menor a 6");
			return false;
		}
	
		if(contenido == null || contenido == 0 || /^\s+$/.test(contenido))
		{
			alert("Llene el campo (Contenido del Proyecto)");
			return false;
		}

		if(!(/^[a-zA-Z]/.test(contenido)))
		{
			alert("El campo (Contenido del Proyecto) debe comenzar con letras");
			return false;
		}

		if(contenido.length > 50)
		{
			alert("El campo (Contenido del Proyecto) de ser menor a 50 caracteres");
			return false;
		}

		if(descripcion == null || descripcion == 0 || /^\s+$/.test(descripcion))
		{
			alert("Llene el campo (Descripci\u00f3n del proyecto)");
			return false;
		}

		if(!(/^[a-zA-Z]/.test(descripcion)))
		{
			alert("El campo (Descripci\u00f3n del proyecto) debe comenzar con letras");
			return false;
		}

		if(descripcion.length > 256)
		{
			alert("El campo (Descripci\u00f3n del proyecto) de ser menor a 256 caracteres");
			return false;
		}
	
		return true;
	}

function validarcrear_tema()

	{
		var momento_v = document.getElementById("momento").selectedIndex;
		var proyecto_v = document.getElementById("proyecto").selectedIndex;
		var objetivo_v = document.getElementById("objetivo").value;
		var titulo_v = document.getElementById("titulo").value;
		var contenido_v = document.getElementById("contenido").value;
		var descripcion_v = document.getElementById("descripcion").value;
		var archivo1 = document.getElementById("ejemplo1").value;
		var archivo2 = document.getElementById("ejemplo2").value;
		var archivo3 = document.getElementById("ejemplo3").value;
		var archivo4 = document.getElementById("ejemplo4").value;
		
		if(momento_v == 0 || momento_v == null)
		{
			alert("Seleccione una opci\u00f3n del campo (Momento)");
			return false;
		}
			
		if(proyecto_v == 0 || proyecto_v == null)
		{
			alert("Seleccione una opci\u00f3n del campo (Planificaci\u00f3n)");
			return false;
		}
			
	
		if(objetivo_v == null || /^\s+$/.test(objetivo_v) || !(/^[0-9]+$/.test(objetivo_v)))
		{
			alert("Llene el campo (objetivo) solo con n\u00fameros");
			return false;
		}

		if(objetivo_v > 10)
		{
			alert("El campo (objetivo) debe ser menor de 10");
			return false;
		}

		if(objetivo_v < 1)
		{
			alert("El campo (objetivo) debe ser mayor de 0");
			return false;
		}
		
		if(titulo_v == null ||  /^\s+$/.test(titulo_v) || titulo_v == 0)
		{
			alert("Coloque el (t\u00edtulo del tema)");
			return false;
		}

		if(!(/^[a-zA-Z]/.test(titulo_v)))
		{
			alert("El (t\u00edtulo del tema) debe comenzar solo con letras");
			return false;
		}

		if(titulo_v.length > 100)
		{
			alert("El (T\u00edtulo del tema) debe se mayor de 100 caracteres");
			return false;
		}
		
		if(contenido_v == null || contenido == 0 )
		{
			alert("Llene el (desarrollo del tema)");
			return false;
		}
		
		if(!(/^[a-zA-Z]/.test(contenido_v)) || /^\s+$/.test(contenido_v))
		{
			alert("El (desarrollo del tema) debe comenzar solo con letras");
			return false;
		}

		if(contenido_v.length > 500)
		{
			alert("El (desarrollo del tema) no puede exceder los 500 caracteres");
			return false;
		}

		if(descripcion_v == null || descripcion_v == 0 )
		{
			alert("Llene la (descripci\u00f3n del contenido)");
			return false;
		}
		
		if(!(/^[a-zA-Z]/.test(descripcion_v)) || /^\s+$/.test(descripcion_v))
		{
			alert("La (descripci\u00f3n del contenido) debe comenzar solo con letras");
			return false;
		}

		if(descripcion_v.length > 256)
		{
			alert("La (descripci\u00f3n del contenido) no puede exceder los 256 caracteres");
			return false;
		}

		if(archivo1 == null || archivo1 == 0)
		{
			alert("Debe agregar una imagen en el campo (Ejemplo 1)");
			return false;
		}

		if(archivo2 == null || archivo2 == 0)
		{
			alert("Debe agregar una imagen en el campo (Ejemplo 2)");
			return false;
		}

		if(archivo3 == null || archivo3 == 0)
		{
			alert("Debe agregar una imagen en el campo (Ejemplo 3)");
			return false;
		}

		if(archivo4 == null || archivo4 == 0)
		{
			alert("Debe agregar una imagen en el campo (Ejemplo 4)");
			return false;
		}

		return true;
	}


function validarcrear_tema_m()

	{
		var momento_v = document.getElementById("momento").selectedIndex;
		var proyecto_v = document.getElementById("proyecto").selectedIndex;
		var objetivo_v = document.getElementById("objetivo").value;
		var titulo_v = document.getElementById("titulo").value;
		var contenido_v = document.getElementById("contenido").value;
		var descripcion_v = document.getElementById("descripcion").value;

		if(momento_v == null)
		{
			alert("Seleccione una opci\u00f3n del campo (Momento)");
			return false;
		}
			
		if(proyecto_v == null)
		{
			alert("Seleccione una opci\u00f3n del campo (Planificaci\u00f3n)");
			return false;
		}
			
	
		if(objetivo_v == null || /^\s+$/.test(objetivo_v) || !(/^[0-9]+$/.test(objetivo_v)))
		{
			alert("Llene el campo (objetivo) solo con n\u00fameros");
			return false;
		}

		if(objetivo_v > 10)
		{
			alert("El campo (objetivo) debe ser menor de 10");
			return false;
		}

		if(objetivo_v < 1)
		{
			alert("El campo (objetivo) debe ser mayor de 0");
			return false;
		}
		
		if(titulo_v == null ||  /^\s+$/.test(titulo_v) || titulo_v == 0)
		{
			alert("Coloque el (t\u00edtulo del tema)");
			return false;
		}

		if(!(/^[a-zA-Z]/.test(titulo_v)))
		{
			alert("El (t\u00edtulo del tema) debe comenzar solo con letras");
			return false;
		}

		if(titulo_v.length > 100)
		{
			alert("El (T\u00edtulo del tema) debe se mayor de 100 caracteres");
			return false;
		}
		
		if(contenido_v == null || contenido == 0 )
		{
			alert("Llene el (desarrollo del tema)");
			return false;
		}
		
		if(!(/^[a-zA-Z]/.test(contenido_v)) || /^\s+$/.test(contenido_v))
		{
			alert("El (desarrollo del tema) debe comenzar solo con letras");
			return false;
		}

		if(contenido_v.length > 500)
		{
			alert("El (desarrollo del tema) no puede exceder los 500 caracteres");
			return false;
		}

		if(descripcion_v == null || descripcion_v == 0 )
		{
			alert("Llene la (descripci\u00f3n del contenido)");
			return false;
		}
		
		if(!(/^[a-zA-Z]/.test(descripcion_v)) || /^\s+$/.test(descripcion_v))
		{
			alert("La (descripci\u00f3n del contenido) debe comenzar solo con letras");
			return false;
		}

		if(descripcion_v.length > 256)
		{
			alert("La (descripci\u00f3n del contenido) no puede exceder los 256 caracteres");
			return false;
		}


		return true;
	}

/*
	Validaciones de Tato


function validarNombre()
{
		var nombre = document.getElementById("nombreShow").value;
		
		if(nombre.length == 0){
				mostrarPrompt("Campo Requerido", "nombrePrompt", "red");
				return false;
			}
		if(!nombre.match(/^[a-zA-Z]+\s{1}[a-zA-Z]+$/)){
				mostrarPrompt("Coloque su Nombre y Apellido", "nombrePrompt", "red");
				return false;			
			}
				mostrarPrompt("Hola " + nombre, "nombrePrompt", "green");
				return true;
}

function validarCedula()
{
	var cedula = document.getElementById("cedulaShow").value;
	
	if(cedula.length == 0){
				mostrarPrompt("Campo Requerido", "cedulaPrompt", "red");
				return false;
	}
	if(!cedula.match(/^[0-9]{1,2}\.[0-9]{3}\.[0-9]{3}$/)){
				mostrarPrompt("Coloque su numero de cedula", "cedulaPrompt", "red");
				return false;			
			}
				mostrarPrompt("Valido", "cedulaPrompt", "green");
				return true;	
		
}

function validarEmail()
{
	var email = document.getElementById("emailShow").value;
	
	if(email.length == 0){
				mostrarPrompt("Campo Requerido", "emailPrompt", "red");
				return false;
	}
	if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
				mostrarPrompt("Coloque un correo valido", "emailPrompt", "red");
				return false;			
			}
				mostrarPrompt("Valido", "emailPrompt", "green");
				return true;	
}

function validarComen()
{
	var coment = document.getElementById("comenShow").value;
	var requerido = 1000;
	var resta = requerido - coment.length;
	
	if(resta > 0){
			mostrarPrompt(resta + "Caracteres Restantes", "comenPrompt", "green");
			return false;	
		}
			mostrarPrompt("Valido", "comenPrompt", "red");
			return true;
}


function validarForm()
{
	if(!validarNombre() || !validarCedula() || !validarEmail() || !validarComen()){
				jsMostrar("formPrompt");
				mostrarPrompt("El formulario debe estar completo", "formPrompt", "red");
				setTimeout(function(){jsOcultar("formPrompt");}, 2000);
				return false;
		}	
}

function jsMostrar(id)
{
		document.getElementById(id).style.display = "block";	
}

function jsOcultar(id)
{
		document.getElementById(id).style.display = "none";	
}

function mostrarPrompt(mensaje, ubicacion, color)
{
				document.getElementById(ubicacion).innerHTML = mensaje;
				document.getElementById(ubicacion).style.color = color;
}*/
