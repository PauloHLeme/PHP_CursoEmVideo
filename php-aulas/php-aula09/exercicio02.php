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
        $a = isset($_GET['ano']) ? $_GET['ano'] :1900;
        $i = date("Y") - $a;

        if ($i <16){
            $v = "você não vota";
        }elseif (($i >=16 and $i < 18) or ($i>=70)){
                $v = "o voto é opcional";
            }else{
                $v = "o voto é obrigatório";
            }
        echo "Você nasceu em $a e tem $i anos.";
        echo "<br>Com $i anos $v.";
        ?>
        <br>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>

</html>