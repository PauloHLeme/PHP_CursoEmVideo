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
        /**
         * Ao criarmos uma função, podemos criar uma variável dentro do parâmetro e utilizá=la dentro do código.
         * Se simplesmente criarmos como $x, teremos o valor da chamada passado pra ela.
         * Agora, se adicionarmos o & na frente, de forma que fique &$x, estaremos passando não apenas o valor da variável utilizada na chamada, mas a própria variável. Isso alterará o valor de ambas as variáveis, e é conhecido como passagem de valor por referência
         */
            function teste (&$x){ //Passagem de valor por referência feita com uso do &
                $x +=2;
                echo "O valor de X é $x<br>";
            }
            $a = 3;
            teste($a);//A variável $a foi passada como referência na chamada, e terá seu valor alterado da mesma forma que a variável $x

            echo "O valor de A é $a";
        ?>
    </div>
</body>

</html>