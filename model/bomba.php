<?php

Class Bomba{

    private $id;
    private array $combustivelDisp;


    public function __construct($combustivelDisp, $conn)
    {
        $this->combustivelDisp = $combustivelDisp;

        $this->cadastraNoBanco($conn);

    }

    private function cadastraNoBanco($conn){
        $insert = "INSERT INTO `bombas`(`combustivelDisp`) VALUES ('".json_encode($this->combustivelDisp)."')";
        $this->id = executa($conn,$insert);
    }

    public function getId(){
        return $this->id;
    }

}

?>