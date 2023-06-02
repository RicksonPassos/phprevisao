<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php 
        $num = $_POST["n"] ?? 0;

        echo "<p>Analisando o número". number_format($num, 3,",","."). "informado pelo usuário:</p>";
         
        ?>
    </main>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    
</body>
</html>