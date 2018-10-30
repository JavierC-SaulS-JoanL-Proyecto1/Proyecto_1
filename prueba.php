<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    //https://getbootstrap.com/docs/4.0/components/forms/
    
    if (isset($_REQUEST['enviar'])) {
        var_dump($_REQUEST['usuario']);
        var_dump($_REQUEST['pass']);
    }else{ echo'formulario no enviado';}
        $link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
	
	if (!$link) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
        $queryPrueba = "SELECT * FROM usuarios";
	
	$query = mysqli_query($link, $queryPrueba);
	if ($query) {
           $usuario = mysqli_fetch_array($query);
		echo "<h1>EXITO</h1>";
                echo $usuario[0];
	}
    ?>
    <h1> Centro de recursos</h1>
    <div class="container">
        <div class="col-xs-12">
            <div class="col-xs-6">
                <label class="form-control">Label de prueba</label>
                <input type="checkbox" class="form-check-input">check box de prueba
                <button class="btn btn-success">Enviar</button>  
            </div>
            <div class="col-xs-6">
                <input type="email" class="form-control"placeholder="email@example.com">
                <button class="btn btn-danger">Cancelar</button>
            </div>
            <div class="col-xs-2">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <input type="password" class="form-control col-xs-4" placeholder="Password">
            </div>
            <div class="col-xs-8">
                <label  class="col-form-label">label estatico</label>
                
            </div>
        </div>
  
    <form action="centroRecursos.php" method="POST">
        <label>nombre</label><br>
        <input  type="text" name="usuario"><br>
        <label>contraseña</label><br>
        <input type="password" name="pass"><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
      </div>
     <?php //echo "Bienvenido ".$_GET['usuario'];?>
</body>
</html>

