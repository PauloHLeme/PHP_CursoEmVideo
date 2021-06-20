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
        $frase = "Eu estou aprendendo PHP";
        
        //Pesquisa a string solicitada dentro de outra string e retorna a posição(case sensitive)
        $pos = strpos($frase,"PHP");
        
        //Semelhante a anterior, mas Ignora caixa alta ou baixa (não case sensitive)
        $ipos = stripos($frase,"php");

        //Conta quantas vezes uma string foi encontrada dentro de outra string
        $conta = substr_count($frase,"en");
        
        echo "$frase <br>";
        echo "A string foi encontrada na posição $pos <br>";
        echo "A string foi encontrada na posição $ipos <br>";
        echo "A substring 'en' foi encontrada $conta vezes <br>";

        ?>
    </div>
</body>

</html>