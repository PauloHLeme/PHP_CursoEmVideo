<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        
        echo "A média entre $nota1 e $nota2 é $media";
        echo "<br>O aluno foi ".(( $media<6) ? "reprovado" : 'aprovado');
    ?>
</div>
</body>
</html>
 