<?php

require __DIR__ . "/vendor/autoload.php";

use chillerlan\QRCode\QRCode;

$oQrCode = new QRCode();

$sUrlGerarQr = $_POST['url'] ? $_POST['url'] : '';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QrCode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="index.php" class="card p-4">
                    <div class="title text-center mb-4">
                        <h1 class="card-title">Gerar QRCode</h1>
                    </div>
                    <div class="url mb-3">
                        <label for="url" class="form-label">URL:</label>
                        <input type="text" name="url" id="url" class="form-control" placeholder="Digite a URL">
                    </div>
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <div class="imgCode">
                    <?php
                        if(!empty($sUrlGerarQr)){
                            echo '<img src="'.$oQrCode->render($sUrlGerarQr).'" alt="QrCode" class="img-fluid" height="200" width="200">';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>