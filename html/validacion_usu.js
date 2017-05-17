//alert ("llamado al archivo js con exito");

function validacion_mod()
	{
//		var nom_usuario = document.getElementById("nom_usuario").value;
		var contrasena = document.getElementById("contrasena").value;
		var rep_contrasena = document.getElementById("rep_contrasena").value;
		
/*		if(nom_usuario == null || /^\s+$/.test(nom_usuario))
		{
			alert("Llene el campo (Nombre del usuario) comenzando sin espacios");
			return false;
		}

		if(nom_usuario.length <= 5)
		{
			alert(" El campo (Nombre del usuario) debe tener mas de 5 caracteres");
			return false;
		}

		if(nom_usuario.length >= 13)
		{
			alert(" El campo (Nombre del usuario) debe ser menor de 13 caracteres");
			return false;
		}
*/
		if(contrasena == null || /^\s+$/.test(contrasena))
		{
			alert("Llene el campo (Nueva Contrase\u00f1a) comenzando sin espacios");
			return false;
		}

		if(contrasena.length <= 4)
		{
			alert(" El campo (Nueva Contrase\u00f1a) debe ser mayor de 4 caracteres");
			return false;
		}
		
		if(contrasena.length >= 13)
		{
			alert(" El campo (Nueva Contrase\u00f1a) debe ser menor de 13 caracteres");
			return false;
		}

		if(rep_contrasena == null || /^\s+$/.test(rep_contrasena))
		{
			alert("Llene el campo (Repita Nueva Contrase\u00f1a)");
			return false;
		}

		if(rep_contrasena.length <= 4)
		{
			alert(" El campo (Repita Nueva Contrase\u00f1a) debe ser mayor de 4 caracteres");
			return false;
		}
		
		if(rep_contrasena.length >= 13)
		{
			alert(" El campo (Repita Nueva Contrase\u00f1a) debe ser menor de 13 caracteres");
			return false;
		}

		return true;
	}

