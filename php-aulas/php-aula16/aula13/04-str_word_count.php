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
        $frase = "Eu vou estudar PHP";
        
        //0 para contar palavras, 1 para criar um vetor onde cada palavra fica em uma posição e o 2 para criar um vetor mantendo o posicionamento de cada palavra dentro da string!
        $cont = str_word_count($frase,0);
        
        //cria um vetor separando as palavras pelo espaço ou o caractere de separação definido como parâmetro
        $vetor = explode(" ",$frase);

        $nome = "Paulo";
        //Cria um vetor separando letra por letra em uma posição
        $letras = str_split($nome);
        
        //Transforma um vetor em uma variável juntando todos os valores. Os valores serão separados pelo sinal que inserirmos no primeiro parâmetro. Podemos utilizar também a função "join", que tem a mesma função
        $refaz = implode("",$letras);

        echo " a frase <span class='foco'>$frase</span> tem $cont palavras <br>";
        print_r($vetor);
        echo "<br>";
        print_r($letras);
        echo "<br> $refaz";

        ?>
    </div>
</body>

</html>