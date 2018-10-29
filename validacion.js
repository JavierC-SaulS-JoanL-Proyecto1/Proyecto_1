var error="";
		function validar(){
			if (document.formulario1.usuario.value==""){
				error+="El campo Usuario esta vacio.";
				}

			if (document.formulario1.password.value=="") {
				 error+="El campo Password esta vacio.";
				 alert(error);
				 return false;
				}else{
					return true;
				}
				
		}



