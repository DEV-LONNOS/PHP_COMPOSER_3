<?php
    namespace App\model;
    class Pessoa {
        public $nome;
        public $idade;
        public $ocupacao;

        function __construct($nome,$idade,$ocupacao) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->ocupacao = $ocupacao;
        }
    }