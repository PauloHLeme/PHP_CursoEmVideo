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
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            
            //ao deixarmos o colchete sem número, acrescentamos um valor ao final do vetor
            $v[] = "O";
            print_r($v);

            //Adiciona o valor na última posição do array
            array_push($v, "Z");
            print_r($v).

            //Remove a última posição da array e também seu valor
            array_pop($v);
            print_r($v);

            ?>
        </pre>
    </div>
</body>

</html>