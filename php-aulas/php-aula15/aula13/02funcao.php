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
            include "funcoes.php"; //Comando include permite que adicionemos outros arquivos para que o documento atual possa acessar, dando a possibilidade de criarmos por exemplo uma biblioteca de novas funções e chamarmos elas de forma externa, sem que elas tenham que ser definidas dentro do nosso código!
            echo "<h1>Testando novas funções</h1>";
            ola(); //Chamando a função ola que foi criada no arquivo funcoes.php
            mostraValor(4); //chamando a função mostraValor que foi  criada no arquivo funcoes.php
            echo "<h2>Finalizando Programa...</h2>";
            //Caso seja necessário interromper o código se o arquivo externo estiver inacessível, devemos trocar o comando include por require. O include faz o código continuar funcionando. Já o require cessa a execução assim que encontra um erro com o arquivo.
        ?>
    </div>
</body>

</html>