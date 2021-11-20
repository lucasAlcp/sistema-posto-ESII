<?php
  include_once("../model/conexao.php");
  include_once("../model/frentista.php");
  include_once("../model/combustivel.php");
  include_once("../model/bomba.php");
  include_once("../model/abastecimento.php");
  include_once("../model/posto.php");

  $posto = new Posto($conn);


    if(isset($_POST['acao'])){
        switch($_POST['acao']){
            case 'cadastrarFrentista':
                if(!empty($_POST['nome'])){
                    $frentista = new Frentista($_POST['nome'], $conn);
                    header("location:/");
                }else{
                    echo "<script>alert('Houve um erro ao cadastrar o frentista, tente novamente!');window.location.href = '/</script>";
                    // header("location:/");
                }
            break;

            case 'cadastrarCombustivel':
                if(!empty($_POST['combustivel']) OR !empty($_POST['valorPorLitro'])){
                   
                    $frentista = new Combustivel($_POST['combustivel'],$_POST['valorPorLitro'], $conn);
                    header("location:/");
                }else{
                    echo "<script>alert('Houve um erro ao cadastrar o frentista, tente novamente!');window.location.href = '/</script>";
                    // header("location:/");
                }
            break;

            case 'cadastrarBomba':
                
                if(count($_POST) > 1){
                    $combustiveis = array();
                    foreach($_POST as $item){
                        if($item != 'cadastrarBomba'){
                            array_push($combustiveis, $item);
                        }
                    }

                    $bomba = new Bomba($combustiveis, $conn);
                    header("location:/");
                }else{
                    echo "<script>alert('Não é possivel cadastrar uma bomba sem combustivel!');window.location.href = '/'</script>";
                    // header("location:/");
                }
            break;
            
            case 'novoAbastecimento':
                
                if(count($_POST) > 3){

                    $combustivel = $posto->getCombustivel($_POST['combustivel_id']);
                    $valorPorLitro = $combustivel[2];

                    $abastecimento = new Abastecimento($_POST['frentista'],$_POST['combustivel_id'], $_POST['qntEmLitros'], $_POST['bomba'],$valorPorLitro, $conn);
                    header("location:/");
                }else{
                    echo "<script>alert('Preencha todo formulário!');window.location.href = '/'</script>";
                    // header("location:/");
                }
            break;

            default:
                header("location:/");
            break;
        }
    }

?>