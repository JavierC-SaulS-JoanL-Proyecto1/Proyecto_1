<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
    <h1> Centro de recursos</h1>
 <!--    <div class="container">
        <div class="col-xs-12">
            <div class="col-xs-6">
                <label class="form-control">Label de prueba</label>
                <input type="checkbox" class="form-check-input">check box de prueba
                <button class="btn btn-success">Enviar</button>  
                <i class="fas fa-user"></i>
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
    </div>-->
    <form action="centroRecursos.php" method="POST">
        <label>nombre</label><br>
        <input  type="text" name="usuario"><br>
        <label>contraseña</label><br>
        <input type="password" name="password"><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
     <?php //echo "Bienvenido ".$_GET['usuario'];?>
</body>
</html>
   
    