<?php
require_once "conexao.php";
 class Ator {

    private $nome;


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
         $this->nome = $nome;
    }
    public function listarAtores(){
        global $db;
        $query = $db->query("SELECT * FROM ator");
        $resultado = $query->fetchAll(PDO::FETCH_CLASS);

        return $resultado;

    }
    public function criarAtor($nome, $sobrenome){
        global $db;
        if($nome != null && $sobrenome != null){
        $query = $db->prepare("INSERT INTO  ator (primeiro_nome, ultimo_nome) values(:nome,:sobrenome)");
        $resultado = $query->execute([
            "nome"=> $nome,
            "sobrenome" => $sobrenome
            ]);
        }

        return $resultado;
    }
 }