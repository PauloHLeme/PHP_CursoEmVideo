<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <pre>
            <?php
            $v = array("A","J","M","X","K");
            //print_r é muito útil para exibir o vetor durante a programação
            print_r($v);

            //var_dump exibe o tipo de string e quantos itens tem o vetor. Mais completo, mas mais poluído
            var_dump($v);

            //count retorna uma contagem de um vetor
            echo "O vetor tem ".count($v). " elementos.<br>";
            ?>
        </pre>
    </div>
</body>

</html>