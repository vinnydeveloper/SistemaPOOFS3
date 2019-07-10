<?php
require_once "model/Ator.php";

class AtorController {

    public function req($funcao){

        switch($funcao){
            case "/":
                //$atores = Ator::listarAtores();
                $atores = new Ator();
                $atores = $atores->listarAtores();
                $_REQUEST['atores'] = $atores;
                require_once "view/viewAtor.php";
            break;
            case "cadastro":
                if($_SERVER['REQUEST_METHOD'] == "GET"){

                    //GET
                    unset($_REQUEST['resultado']);
                    require_once "view/viewCadastroAtor.php";
                }else {
                    //POST
                    //var_dump($_POST);


                     //$atores = Ator::criarAtor($_POST['nome'], $_POST['sobrenome']);

                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    $ator = new Ator();
                    // $_REQUEST['resultado'] =$ator->criarAtor($nome, $sobrenome);
                    $resultado = $ator->criarAtor($nome, $sobrenome);
                    $_REQUEST['resultado'] = $resultado;
                    require_once "view/viewCadastroAtor.php";
                }

            break;
            case "editar":
            
            break;

            case "excluir":
            break;
        
        }
        
    }

}
?>
