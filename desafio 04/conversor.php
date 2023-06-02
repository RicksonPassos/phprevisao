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
                <?php 
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");

                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);
                //var_dump($dados);

                    $cotacao = $dados["value"][0]["cotacaoCompra"];
                    echo "A cotaçaõ foi $cotacao";

                    $valor = $_REQUEST["numero"] ?? 0;

                    $conversao = $valor/$cotacao;

                    echo "O valor informado convertdico é: $conversao";

                ?>
    
</body>
</html>