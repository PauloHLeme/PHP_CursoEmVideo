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
        $nome = "Guanabara";
        $txt = str_repeat("PHP ",5);
        $linha = str_repeat("_",50);


        //Cria um padding com espaços do tamanho escolhido, na direção escolhida
        $novo = str_pad($nome,30," ",STR_PAD_RIGHT);

        echo "Meu professor $novo é muito modesto <br>";
        echo "$txt <br>";
        echo "$linha <br>";

        ?>
    </div>
</body>

</html>