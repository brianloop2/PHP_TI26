<?php
include './class/Animais.php';

$animais = new Animais();

// $resul = $animais->consultarAnimais();
$resul = $animais->consultarAnimaisById(2);
echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
// var_dump($resul);
if($_SERVER['REQUEST_METHOD'] =  'POST' && isset($_POST['cadastro'])){
    $novoAnimal = $_POST['nome_animal'];
    $localtemp = $_FILES['foto_animal']['tmp_name'];
    $nomeArquivo = $_FILES['foto_animal']['name'];
    $tipoArquivo = explode('.',$nomeArquivo);
    $tipoArquivo = '.' . end($tipoArquivo);
    $novoNome = uniqid() . date("YmdHis") . $tipoArquivo;
    $caminho_arquivo = 'animais/' . $novoNome;
    if (move_uploaded_file($localtemp, './img/' . $caminho_arquivo)){  //pega aquivo e move para o outro
        $animais->cadastroAnimais( $nomeAnimal,  $nomeArquivo,  $tipoArquivo, $caminho_arquivo);
        echo '<h1>imagem salva com sucesso!!!</h1>';
    }  
}