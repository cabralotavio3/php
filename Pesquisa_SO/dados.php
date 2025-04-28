<?php
    $lista = $_POST['lista'];
    $listab = $_POST['listab'];
    $listac = $_POST['listac'];
    $listad = $_POST['listad'];
    $listae = $_POST['listae'];

    
    $dados[] = array('nome' => $_POST['nome'], 'so' => $lista);
    $dados[] = array('nome' => $_POST['nomeb'], 'so' => $listab);
    $dados[] = array('nome' => $_POST['nomec'], 'so' => $listac);
    $dados[] = array('nome' => $_POST['nomed'], 'so' => $listad);
    $dados[] = array('nome' => $_POST['nomee'], 'so' => $listae);

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
            <p class="h2 text-center py-4">EXIBINDO RESULTADOS DA PESQUISA</p>
        </div>
    </div>
    <main role="main">
        <div class="container">
            <?php
            $and = 0;
            $ios = 0;
                foreach( $dados as $linha => $item ){
                    if($item['so'] == "op1"){
                        $and += 1; 
                    }
                    if($item['so'] == "op2"){
                        $ios += 1; 
                }}
            ?>
            <?php?>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $i = 0;
                        foreach( $dados as $linha => $item ){
                            if($item['so'] == "op1"){
                                $i = $i+1;?>
                                <th scope="col"><?php echo $item['nome'];}}?></th>
                             <p class="h2 text-center py-4"> <?php echo $i;?> PREFEREM ANDROID</p>
                            
            
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $i = 0;
                        foreach( $dados as $linha => $item ){
                            if($item['so'] == "op2"){
                                $i = $i+1;?>
                                <th scope="col"><?php echo $item['nome'];}}?></th>
                             <p class="h2 text-center py-4"> <?php echo $i;?> PREFEREM IOS</p>
                            
            
            </tbody>
        </table>
    </div>
    <div class="container">
                <div class="row">
                    <a class="btn btn-primary" href="formulario.html">Novo Cálculo</a>
                </div>
            </div>    
    </div>
</body> 
</main>
 </html>

    
