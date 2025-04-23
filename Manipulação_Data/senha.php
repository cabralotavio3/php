<?php
    $data = $_POST['data'];
    $nome = $_POST['nome'];
 
    function geradorSenhas( $chars ,$nome, $data){
        $string = str_replace("-", "", $data);
        $algarismos = "$nome" . "$string";
        return substr (str_shuffle( $algarismos ) , 0 , $chars);
    }
    $dados[] = array('nome' => $_POST['nome'], 'data' => $data);
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
        <div class="jumbotron">
            <p class="h2 text-center py-4">ESCOLHA UMA SENHA:</p>
        </div>
    </div>
    <main role="main">
        <div class="container">
        <form action="dados.php" method="get">
            <div class="col">
            <input type="radio" id="option1" name="options" value="op1">
            <label for="option1"><?php echo geradorSenhas(7, $nome, $data) ?></label>
            </div>
            <div class="col">
            <input type="radio" id="option2" name="options" value="op2">
            <label for="option2"> <?php echo geradorSenhas(7, $nome, $data) ?></label>
            </div>
            <div class="col">
            <input type="radio" id="option3" name="options" value="op3">
            <label for="option3"> <?php echo geradorSenhas(7, $nome, $data) ?></label>
            
            <div class="col">
            <input type="radio" id="option3" name="options" value="op3">
            <label for="option3"> <?php echo geradorSenhas(7, $nome, $data) ?></label>
            </div>

            <input type="submit"class="btn btn-primary"value="Enviar">
            
    </form>
    </div>
</body> 
</main>
 </html>

    
