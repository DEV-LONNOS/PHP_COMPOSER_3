<?php
    

    include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Pessoa;
    use App\model\Animal;
    $p = new Pessoa("Luizinho",18,"Programador");
    $pet = new Animal("Tobby","Yorkshire terrier",4);


    echo "<br><h1 id='td2'>Esse já é meu arquivo main.php<br>";
    echo "<h2 id='td2'>Esse é o arquivo main<h2><br>";
    echo "Esse é o nome da minha Pessoa: ";
    echo $p->nome;
    echo "<br>";
    echo "Esse é o nome do Cachorro da Pessoa: ";
    echo $pet->nome;