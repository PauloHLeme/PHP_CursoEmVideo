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
      $a = 3;
      $b = &$a;
      $b += 5;
      $a++;
      echo "A variável <code>a</code> vale $a";
      echo "<br>A variável <code>b</code> vale $b";
    ?>
</div>
</body>
</html>
 