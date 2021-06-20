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
            $product = "leite";
            $price = 4.5;

            echo "<p>O $product custa R$". number_format($price,2). "</p>";

            /**Após colocar a frase que quer que seja exibida, colocar, separado por vírgula, as variáveis na ordem respectiva
             * %d       para decimal
             * %u       módulo do decimal
             * %f       para valor real
             * %s para string
             */
            printf("<p>O %s custa RS %.2f</p>",$product,$price);
        ?>
    </div>
</body>

</html>