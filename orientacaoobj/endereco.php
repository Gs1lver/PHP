<?php

    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        public function _construct($logradouro, $numero, $cidade){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }

        public function _toString(){    
            return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
        }

        public function __destruct(){
            echo("DESTRUIR");
        }
    }

    $meuEndereco = new Endereco("Rua Adolfo Pinheiro", "123", "São Paulo");
    //funciona apenas se os atributos forem públicos
    //echo $meuEndereço->logradouro . "<br>";
    //echo $meuEndereço->numero . "<br>";
    //echo $meuEndereço->cidade . "<br>";
    echo $meuEndereco;

?>