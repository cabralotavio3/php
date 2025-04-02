<?php
    $num1 = $_POST['num'];
    $num2 = $_POST['num2'];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta ao formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <nav class="navbar navbar - light bg - light ">
        <a class ="navbar-brand " href =" #" >
        <img src=" imagem/logo.svg" width =" 30 " height =" 30 " alt=" ">
        </a>
        </nav>
    </div>
    <div class="container">
        <?php
            echo "<h1><b>MDC utilizando o método de Euclides(Método das divisões sucessivas).</b></h1>";
            $aux = 1;
            while($num2 != 0){
                $aux = $num2;
                $num2 = $num1 / $num2;
                $num1 = $aux;
            }
            echo $num2;
        ?>
    </div>
 </body>
 </html>

    
