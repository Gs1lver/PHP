<?php

    class Aluno {
        private $nome;
        private $ra;
        private $curso;

        public function getRa(){
            return $this->ra;
        }

        public function setRa($ra){
            $this->ra = $ra;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }

        public function exibir(){
            return array(
                "nome"=>$this->getNome(),
                "ra"=>$this->getRa(),
                "curso"=>$this->getCurso()
            );
        }

    }

?>