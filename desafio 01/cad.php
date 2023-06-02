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
    <h1>Resultados: </h1>
    <main>
        <?php 
            $numero = $_GET["num"];
            // $antec = $numero -1;
            // $suces = $numero +1;


            echo "O número escolhido foi $numero\n";

            echo "O seu antecessor é ".($numero-1)."\n";

            echo "O seu sucessor é". ($numero+1)."\n";
            
           
        ?>
    </main>
    
</body>
</html>