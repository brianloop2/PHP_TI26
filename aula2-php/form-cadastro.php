<?php
echo"<h1>form-cadastro.php</h1>";

var_dump($_POST);
$formNome       = $_POST['text-nome'];
$formUsuario    = $_POST['text-usuario'];
$formTelefone   = $_POST['text-telefone'];
$formSenha      = $_POST['text-senha'];
$formConSenha   = $_POST['text-senha'];
//quase a padrão
// '!='  se não for igual a: 'outra variante'
if ($formSenha != $formConSenha) {
    header('location:tabela.php');
}


//conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
//=======================================================
$scriptCadastro = "INSERT INTO
    tb_form_itens(
        nome,
        usuario,
        telefone,
        senha
    )
    VALUES (
        :nome,
        :usuario,
        :telefone,
        :senha
    )";
    //prepare — Prepara uma instrução para execução e retorna um objeto de instrução
$scriptPreparado = $conn->prepare($scriptCadastro);
$scriptPreparado->execute([
        ':nome' => $formNome,
        ':usuario'=> $formUsuario,
        ':telefone'=> $formTelefone,
        ':senha'=> $formSenha
    ]);
header('location:tabela.php');