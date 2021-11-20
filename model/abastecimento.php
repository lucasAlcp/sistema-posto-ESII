<?php


Class abastecimento{

    private int $id;
    private int $frentistaId;
    private int $combustivelId;
    private float $quantidadeEmLitros;
    private int $bombaId;
    private float $precoTotal;

    public function __construct($frentista, $combustivel,$quantidadeEmLitros, $bomba, $valorPorLitro, $conn)
    { 

        $this->frentistaId = $frentista;
        $this->combustivelId = $combustivel;
        $this->bombaId = $bomba;
        $this->quantidadeEmLitros = $quantidadeEmLitros;

    
        $this->precoTotal = $valorPorLitro * $quantidadeEmLitros;

        $this->CadastraNoBanco($conn);

    }

    private function CadastraNoBanco($conn){
        $insert = "INSERT INTO `abastecimentos`(`frentista_id`, `combustivel_id`, `quantidade`, `bomba_id`, `precoTotal`) VALUES (".$this->frentistaId.", ".$this->combustivelId.", ".$this->quantidadeEmLitros.",".$this->bombaId.", ".$this->precoTotal.")";

        $this->id = executa($conn,$insert);
    }



}

?>