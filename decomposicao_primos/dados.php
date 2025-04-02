<?php
    $num = $_POST['num'];

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
            echo "<h1><b>Decomposição em Fatores primos</b></h1>";
            $primo = 2;
            while($num > 1){
                if($num % $primo ==0){
                    echo $primo . " ";
                    $num = $num / $primo;
                }else{
                    $primo++;
                }
            }
        ?>
    </div>
 </body>
 </html>

    
