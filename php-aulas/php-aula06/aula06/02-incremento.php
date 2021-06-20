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
      /* Esse exercicio
      pretende demonstrar o uso
      de operadores de incremento
      e decremento */
      $ano = $_GET['aa'];
      echo "O ano atual é $ano e o ano passado foi ". --$ano;
    ?>
</div>
</body>
</html>
 