<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="estilos.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="validacion.js"></script>
</head>
<body class="color_fondo">
	<?php

	?>
	
	 <div class="container">
	 	<div class="col-xs-12">	
	 		<div class="col-xs-4 col-xs-offset-4">
	 			<div class="login_centro">
		 			<h1>Iniciar sesion:</h1>
		 			<form name="formulario1" action="centroRecursos.php" method="POST" class="clase1" onsubmit="return validar()">

				 		<input type="text" name="usuario" class="form-control usuario" placeholder="Usuario">
				 		
				 		<div class="separacion_passwd"><input type="password" name="password" class="form-control col-xs-4 password" placeholder="Contraseña"></div>
				 		
				 		<button type="submit" class="btn btn-success" name="enviar">Enviar</button>
				 	</form>
		 		</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>

