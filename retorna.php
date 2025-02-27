<?php

$aValores = $_REQUEST;
$aDadosRequisicao = apache_request_headers();

if(empty($aValores)){
    throw new Exception('Informe os dados para proseguir');
}

$sNome     = isset($_POST['name']) ? $_POST['name'] : '';
$sTelefone = isset($_POST['phone']) ? $_POST['phone'] : '';
$sEmail    = isset($_POST['email']) ? $_POST['email'] : '';
$sTexto    = isset($_POST['texto']) ? $_POST['texto'] : '';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno</title>
    <link rel="stylesheet" href="retorna.css">
</head>
<body>
    <div class="dados">
        <div class="nome">
            <Label for="nome">Nome: </Label>
            <input type="text" name="nome" id="nome" value="<?= $sNome ?>" disabled>
        </div>
        <div class="contato">
            <label for="phone">Telefone:</label>
            <input type="text" name="phone" id="phone" value="<?= $sTelefone ?>" disabled>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?= $sEmail ?>" disabled>
        </div>
        <div class="texto">
            
            <p><?= $sTexto ?></p>
        </div>
        <div class="request">
            <p>Dados enviados de: </p>
            <?php
                foreach($aDadosRequisicao as $indice => $valor){
                    echo $indice . ': ' . $valor . '<br>';
                }         
            ?>
        </div>
    </div>
</body>
</html>