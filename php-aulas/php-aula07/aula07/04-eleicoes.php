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
      $ano = $_GET['y'];
      $idade = 2021 - $ano;
      $tipo = ($idade >=18 and $idade<65) ? "obrigatório" : "não obrigatório";

      echo "Quem nasceu em $ano tem $idade anos.";
      echo " Seu voto é $tipo";
    ?>
</div>
</body>
</html>
 