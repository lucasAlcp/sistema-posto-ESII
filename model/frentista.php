<?php

// include_once "../htdocs/model/conexao.php";

Class Frentista{

    private String $nome;
    private int $id;

    public function quantoAbasteceu($combustivel){
        
    }
    public function abastecer($combustivel, $qntd, $bomba ){}

    public function __construct($nome,$conn){
      
        $this->nome = $nome;
        
        $this->CadastraNoBanco($conn);
    }

    private function CadastraNoBanco($conn){
        $insert = "INSERT INTO `frentistas`(`nome`) VALUES ('$this->nome')";
        
       $this->id = executa($conn,$insert);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getId(){
        return $this->id;
    }

}


?>