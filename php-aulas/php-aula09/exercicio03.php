<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        a{
            padding: 15px;
            margin-top: 40px;
            background-color: cornflowerblue;
            border-radius: 5px;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <?php
            $note01 = $_GET['nota1'];
            $note02 = $_GET['nota2'];
            $media = ($note01+$note02)/2;

            echo "A média entre $note01 e $note02 é $media.";
            if($media<5){
                echo "O aluno foi Reprovado";
            }elseif ($media>=7) {
                echo "O aluno foi Aprovado";
            }else {
                echo "<br>O aluno está de Recuperação";
            }
        ?>
        <br>
        <br>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>

</html>