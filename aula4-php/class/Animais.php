<?php
class Animais{
    public function __construct(){
        $dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
        $usuario = 'root';
        $senha = '';
        $this->conn = new PDO($dsn, $usuario, $senha);
        //$this = "em mim mesmo"
    }

    private $conn;

    public function consultarAnimais(){

        $script = "SELECT * FROM tb_animais";
        $resultado = $this->conn->query($script)->fetchAll();
        
        return $resultado;
    }
    public function consultarAnimaisById($id){
        
        $script = "SELECT * FROM tb_animais WHERE id = {$id}";
        $resultado = $this->conn->query($script)->fetchAll();
         
        return $resultado;
    }
    public function cadastroAnimais($nome_animal, $nome_arquivo, $tipo_arquivo, $caminho_arquivo){
        
        $script = "INSERT INTO tb_animais (nome_animal, nome_arquivo, tipo_arquivo) VALUE (:nome_animal, :nome_arquivo, :tipo_arquivo, :caminho_arquivo)";
        $insert = $this->conn->prepare($script);
        $insert->execute([
            ":nome_animal" => $nome_animal,
            ":nome_arquivo" => $nome_arquivo,
            ":tipo_arquivo" => $tipo_arquivo,
            ":caminho_arquivo" => $caminho_arquivo
        ]);
        
        return $this->conn->lastInsertId();
    }
}