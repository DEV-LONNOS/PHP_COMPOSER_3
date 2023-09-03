<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_COMPOSER_3</title>
</head>
<body>

    <h1 id="td3">Primeiro Título </h1>
    <p id="td3"> Primeiro Paragráfo<p>

    <style>
        body {
            background-color: gray;
        }
        #tdi {
            color: purple;
        }
        #td2 {
            color: green;
        }
        #td3 {
            color: navy;
        }


    </style>

        <?php
            echo "<h1 id='tdi'>Esse é o conteúdo do index.php<h1>";
            echo "<h1 id='tdi'>Esse é meu título em PHP</h1>";
            echo "<h2 id='tdi'>Esse é meu subtítulo em PHP<h2>";
            echo "<h3 id='tdi'>Esse é meu h3 em PHP<br>";
            echo "<br><p id='tdi'>Cada componente tem uma cor.<p>";

            include_once "main.php";

        ?>


</body>
</html>