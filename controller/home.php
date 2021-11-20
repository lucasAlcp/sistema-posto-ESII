<?php

include_once("../htdocs/model/frentista.php");
include_once("../htdocs/model/combustivel.php");
include_once("../htdocs/model/abastecimento.php");
include_once("../htdocs/model/bomba.php");
include_once("../htdocs/model/posto.php");
include_once("../htdocs/model/conexao.php");


$posto = new Posto($conn);

$todosFrentistas = $posto->listaFrentistas();
$todasBombas = $posto->listaBombas();
$todosAbastecimentos = $posto->listaAbastecimentos();
$todosCombustiveis = $posto->listaCombustiveis();

$frentistaQueMaisAbasteceu = array('dados' => $posto->frentistaQueMaisAbasteceu());
if(empty($frentistaQueMaisAbasteceu['dados'])){
    array_push($frentistaQueMaisAbasteceu, '--');
}else{
    array_push($frentistaQueMaisAbasteceu,$posto->getNomeFrentista($frentistaQueMaisAbasteceu['dados']->frentista_id));
}

$combustivelMaisVendido = $posto->listaCombustivelMaisVendido();
if(empty($combustivelMaisVendido->combustivel_id)){
    $nomeCombustivelMaisVendido = "--";
}else{
    $nomeCombustivelMaisVendido = $posto->getCombustivel($combustivelMaisVendido->combustivel_id);
    $nomeCombustivelMaisVendido = $nomeCombustivelMaisVendido[1];
}




include_once("../htdocs/view/template/home/conteudo.html");


?>