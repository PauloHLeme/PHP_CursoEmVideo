<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
            $number = isset($_GET['num'])? $_GET['num']: 0;
            $operation = isset($_GET['operacao'])? $_GET['operacao']: "cubo";

            switch ($operation) {
                case 'dobro':
                    $result = $number * 2;
                    break;
                case 'cubo':
                    $result = $number * 3;
                    break;
                case 'raiz':
                    $result = sqrt($number);
                    break;
            }
            echo "O $operation de $number é igual a <span class= 'foco'>$result</span>!"
        ?>
        <br>
        <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>

</html>