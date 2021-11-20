<?php

    Class Combustivel{

        private int $id;
        private String $nome;
        private float $valorPorLitro;
        
        public function __construct($nome,$valorPorLitro,$conn)
        {
           
            $this->nome = $nome;
            $this->valorPorLitro = $valorPorLitro;

            $this->cadastraNoBanco($conn);
            
        }

        private function cadastraNoBanco($conn){
            $insert = "INSERT INTO `combustiveis`(`nome`, `valorPorLitro`) VALUES ('$this->nome', '$this->valorPorLitro')";
        
            $this->id = executa($conn,$insert);
        }

        public function getNome(){
            return $this->nome;
        }
        public function getId(){
            return $this->id;
        }
        public function getValorPorLitro(){
            return $this->valorPorLitro;
        }
    }

?>