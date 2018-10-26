<?php require('scripts.php')?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table id="tablaTable" class="table table-striped table-hover"> 
        <thead class="thead-dark"> 
        <tr> 
            <th scope="col">Usuario</th> 
            <th scope="col">First Name</th> 
            <th scope="col">Email</th> 
            <th scope="col">Due</th> 
            <th scope="col">Web Site</th> 
        </tr> 
        </thead> 
        <tbody> 
        <tr> 
            <td scope="row"><script>$('.label-usuario').text();</script></td> 
            <td>John</td> 
            <td>jsmith@gmail.com</td> 
            <td>$50.00</td> 
            <td>http://www.jsmith.com</td> 
        </tr> 
        <tr> 
            <td scope="row">Bach</td> 
            <td>Frank</td> 
            <td>fbach@yahoo.com</td> 
            <td>$50.00</td> 
            <td>http://www.frank.com</td> 
        </tr> 
        <tr> 
            <td scope="row">Doe</td> 
            <td>Jason</td> 
            <td>jdoe@hotmail.com</td> 
            <td>$100.00</td> 
            <td>http://www.jdoe.com</td> 
        </tr> 
        <tr> 
            <td scope="row">Conway</td> 
            <td>Tim</td> 
            <td>tconway@earthlink.net</td> 
            <td>$50.00</td> 
            <td>http://www.timconway.com</td> 
        </tr> 
        </tbody> 
        </table> 
    </body>
</html>
