<?php
    namespace App\model;
    class Animal {
       public $nome;
       public $raca;
       public $idade;

        function __construct($nome,$raca,$idade) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
        }

    }