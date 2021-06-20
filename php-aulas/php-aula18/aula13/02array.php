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
            //Range cria um vetor contando passos. O primeiro numero define o valor inicial, o segundo o valor máximo e o terceiro o passo, que gera os novos valores, até atingir o final
            $c = range(5, 20, 2);
            
            print_r($c);
            foreach ($c as $valor) {
                # code...
            }
            ?>
        </pre>
    </div>
</body>

</html>