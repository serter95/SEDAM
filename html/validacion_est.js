//alert ("llamado al archivo js con exito");
function validacion()

	{
		var cedula_estudiantil = document.getElementById("cedula_estudiantil").value;
		var nom_estudiante = document.getElementById("nom_estudiante").value;
		var ape_estudiante = document.getElementById("ape_estudiante").value;
		var edad = document.getElementById("edad").value;
		var sexo = document.getElementById("sexo").selectedIndex;
		var seccion = document.getElementById("seccion").selectedIndex;

		if(cedula_estudiantil == null ||  /^\s+$/.test(cedula_estudiantil) || cedula_estudiantil == 0)
		{
			alert("Llene el campo (C\u00e9dula estudiantil) solo con n\u00fameros");
			return false;
		}

		if(cedula_estudiantil.length <= 10 || !(/^[0-9]+$/.test(cedula_estudiantil)))
		{
			alert("Revise nuevamente el campo (C\u00e9dula estudiantil) sus datos pueden estar incorrectos!");
			return false;
		}

		if(nom_estudiante == null ||  /^\s+$/.test(nom_estudiante) || nom_estudiante == 0)
		{
			alert("Llene el campo (Nombre) solo con letras");
			return false;
		}

		if(nom_estudiante.length <= 2 || !(/^[a-zA-Z]+$/.test(nom_estudiante)))
		{
			alert("Revise nuevamente el campo (Nombre) sus datos pueden estar incorrectos!");
			return false;
		}

		if(ape_estudiante == null || /^\s+$/.test(ape_estudiante) || ape_estudiante == 0 )
		{
			alert("Llene el campo (Apellido) solo con letras");
			return false;
		}

		if(ape_estudiante.length <= 2 || !(/^[a-zA-Z]+$/.test(ape_estudiante)))
		{
			alert("Revise nuevamente el campo (Apellido) sus datos pueden estar incorrectos!");
			return false;
		}

		if(edad == null || /^\s+$/.test(edad) || edad == 0)
		{
			alert("Llene el campo (Edad) solo con n\u00fameros");
			return false;
		}

		if(edad.length > 2 || !(/^[0-9]+$/.test(edad)))
		{
			alert("Revise nuevamente el campo (Edad) no debe ser mayor de 2 d\u00edgitos");
			return false;
		}

		if( sexo == null || sexo == 0 )
		{
			alert("Elija una opci\u00f3n del campo (sexo)");
			return false;
		}

		if( seccion == null || seccion == 0 )
		{
			alert("Elija una opci\u00f3n del campo (secci\u00f3n)");
			return false;
		}

		return true;
	}

function validacion_mod()

	{
		var cedula_estudiantil = document.getElementById("cedula_estudiantil").value;
		var nom_estudiante = document.getElementById("nom_estudiante").value;
		var ape_estudiante = document.getElementById("ape_estudiante").value;
		var edad = document.getElementById("edad").value;
		var sexo = document.getElementById("sexo").selectedIndex;
		var seccion = document.getElementById("seccion").selectedIndex;

		if(cedula_estudiantil == null ||  /^\s+$/.test(cedula_estudiantil) || cedula_estudiantil == 0)
		{
			alert("Llene el campo (C\u00e9dula estudiantil) solo con n\u00fameros");
			return false;
		}

		if(cedula_estudiantil.length <= 10 || !(/^[0-9]+$/.test(cedula_estudiantil)))
		{
			alert("Revise nuevamente el campo (C\u00e9dula estudiantil) sus datos pueden estar incorrectos!");
			return false;
		}

		if(nom_estudiante == null ||  /^\s+$/.test(nom_estudiante) || nom_estudiante == 0)
		{
			alert("Llene el campo (Nombre) solo con letras");
			return false;
		}

		if(nom_estudiante.length <= 2 || !(/^[a-zA-Z]+$/.test(nom_estudiante)))
		{
			alert("Revise nuevamente el campo (Nombre) sus datos pueden estar incorrectos!");
			return false;
		}

		if(ape_estudiante == null || /^\s+$/.test(ape_estudiante) || ape_estudiante == 0 )
		{
			alert("Llene el campo (Apellido) solo con letras");
			return false;
		}

		if(ape_estudiante.length <= 2 || !(/^[a-zA-Z]+$/.test(ape_estudiante)))
		{
			alert("Revise nuevamente el campo (Apellido) sus datos pueden estar incorrectos!");
			return false;
		}

		if(edad == null || /^\s+$/.test(edad) || edad == 0)
		{
			alert("Llene el campo (Edad) solo con n\u00fameros");
			return false;
		}

		if(edad.length > 2 || !(/^[0-9]+$/.test(edad)))
		{
			alert("Revise nuevamente el campo (Edad) no debe ser mayor de 2 d\u00edgitos");
			return false;
		}

		if( sexo == null)
		{
			alert("Elija una opci\u00f3n del campo (sexo)");
			return false;
		}

		if( seccion == null)
		{
			alert("Elija una opci\u00f3n del campo (secci\u00f3n)");
			return false;
		}

		return true;
	}

function validacion_bus()
	{
		var bus_est = document.getElementById("bus_est").selectedIndex;

		if(bus_est == null || bus_est == 0)
		{
			alert("Seleccione la c\u00e9dula del estudiante que desea buscar");
			return false;
		}

		return true;
	}