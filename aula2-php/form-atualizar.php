<?php
echo '<h1>FOrm atualizar</h1>';
$id = $_GET["id"];
var_dump($_POST);
$formNome       = $_POST['text-nome'];
$formUsuario    = $_POST['text-usuario'];
$formTelefone   = $_POST['text-telefone'];
$formSenha      = $_POST['text-senha'];
$formConSenha   = $_POST['text-senha'];

    //conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
    //=======================================================

$scriptUpdate = "UPDATE tb_from_itens 
    SET nome, usuario, telefone, senha
    WHERE id = $id
";
$scriptEditado = $conn->prepare($scriptUpdate);
$scriptEditado->execute([
        ':nome' => $formNome,
        ':usuario'=> $formUsuario,
        ':telefone'=> $formTelefone,
        ':senha'=> $formSenha
    ]);
header('location:tabela.php');