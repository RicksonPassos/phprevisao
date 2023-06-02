<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
            <?php 

                $cotacao = 5.14;
                $real = $_REQUEST["din"] ?? 0;

                $dolar = $real / $cotacao;

                $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao,$real,"BRL")." equivalem a " . numfmt_format_currency($padrao,$dolar, "USD");
            
            ?>

    </main>
</body>
</html>