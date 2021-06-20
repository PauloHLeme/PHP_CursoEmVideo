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
            $a = isset($_GET['ano'])? $_GET['ano']:1900;
            $i = date("Y") - $a;

            if($i >=18){
                $v = "já pode votar";
                $d = "também dirigir";
            }else{
                $v = "não pode votar";
                $d = "nem dirigir";
            }
            echo "Você nasceu em $a e tem $i anos.";
            echo "<br>Com essa idade você $v e $d."
        ?>
        <br>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>

</html>