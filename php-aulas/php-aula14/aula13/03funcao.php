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
        function soma(){
            $par = func_get_args(); //Função interna que pega todos os parâmetros passados dentro de uma chamada de função, criando um array com todos os valores
            $total = func_num_args(); //Função interna que retorna como valor a quantidade total de parâmetros passados na chamada da função
            $sum = 0;

            for ($count=0; $count < $total ; $count++) { 
                $sum += $par[$count];
            }
            return $sum;
        }
        $r = soma(3,5,2, 8,9,4);
        echo "a soma dos valores é $r";
        ?>
    </div>
</body>

</html>