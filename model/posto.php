<?php

    Class Posto{

        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function frentistaQueMaisAbasteceu(){
            $select = "SELECT frentista_id, COUNT(frentista_id) AS quantidade FROM `abastecimentos` GROUP BY frentista_id ORDER BY quantidade DESC";
            return retornaObjeto( $this->conn,$select);
        }
        public function getNomeFrentista($id){
            $select = "SELECT nome FROM frentistas WHERE id = ".$id;
            $frentista = retornaObjeto( $this->conn,$select);
            return $frentista->nome;
        }
        public function listaFrentistas(){
            $select = "SELECT * FROM `frentistas` ORDER BY id DESC";
            return retornaObjetos( $this->conn,$select);

        }

        public function listaBombas(){
            $select = "SELECT * FROM `bombas`";
            return retornaObjetos($this->conn,$select);
        }

        public function listaAbastecimentos(){
            $select = "SELECT * FROM `abastecimentos`";
            return retornaObjetos($this->conn,$select);
        }

        public function QntTodosAbastecimentos(){
            $select = "SELECT count(id) FROM abastecimentos";
            return retornaValor($this->conn,$select);
        }


        public function listaCombustiveis(){
            $select = "SELECT * FROM `combustiveis`";
            return retornaObjetos($this->conn,$select);
        }

        public function listaCombustivelMaisVendido(){
            $select = "SELECT combustivel_id, COUNT(combustivel_id) AS quantidade FROM `abastecimentos` GROUP BY combustivel_id ORDER BY quantidade DESC";
            return retornaObjeto($this->conn,$select);
        }


        public function getInformacoesAbastecimento($id_frentista, $id_combustivel){
            $select = "SELECT frentistas.nome, combustiveis.nome, combustiveis.valorPorLitro FROM frentistas INNER JOIN combustiveis WHERE frentistas.id = $id_frentista AND combustiveis.id = $id_combustivel";

            return retornaValor($this->conn,$select);
        }


        public function getCombustivel($id){
            $select = "SELECT *  FROM combustiveis WHERE id = $id";
            return retornaValor($this->conn,$select); 
        }
        public function getTodosAbastecimentoFrentista($id){
            $select = "SELECT * FROM abastecimentos WHERE frentista_id = $id";
            return retornaObjetos($this->conn,$select);
        }
 
        public function totalAbastecimentoPorFrentista($id){
            $select = "SELECT count(frentista_id)  FROM abastecimentos WHERE frentista_id=$id";
            return retornaValor($this->conn,$select);
        }

        public function totalAbastecimentoPorCombustivel($id){
            $select = "SELECT count(combustivel_id)  FROM abastecimentos WHERE combustivel_id=$id";
            return retornaValor($this->conn,$select);
        }
    }

?>