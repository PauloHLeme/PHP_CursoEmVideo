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
        $count = 0;
        do {
            echo "$count ";
        $count += 2;
        } while ($count <= 20); 
    ?>
</div>
</body>
</html>
 