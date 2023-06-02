<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <main>
        <?php 
        
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);

        echo "Gerando um numero aleatório entre $min e $max....\n";
        echo "O numero gerado foi $num";

        
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
        </main>
</body>
</html>