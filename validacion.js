var error="";
		function validar(){
			error="";
			if (document.formulario1.usuario.value==""){
				error+="-El campo Usuario esta vacio. \n";
				document.getElementById("user").style.borderColor = "red";
				}else{document.getElementById("user").style.borderColor = "#CAC6C6"}

			if (document.formulario1.password.value=="") {
				 error+="-El campo Password esta vacio.";
				 document.getElementById("passwd").style.borderColor = "red";
				 alert(error);
				 return false;
				}else{document.getElementById("passwd").style.borderColor = "#CAC6C6"}

			if (document.formulario1.usuario.value=="") {
				alert(error); 
				return false;
			}else{return true;}
		}

