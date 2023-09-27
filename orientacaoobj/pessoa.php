<?php

    class Pessoa {
        public $nome = "Sinome";
        protected $idade = 18;
        private $senha = "123456";


        public function verDados(){
            echo get_class();
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }

    class Programador extends Pessoa{
        public function verDados(){
            echo get_class();
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            //echo $this->senha . "<br>"; //não é possível acessar o atributo privado da classe pai
        }
    }

    $pessoa = new Programador();
    echo $pessoa->nome;
    $pessoa->verDados();
?>