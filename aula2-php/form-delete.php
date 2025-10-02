<?php
echo"<h1>form-delete.php pag...</h1>";

$id = $_GET["idDelete"];

var_dump($id);

//conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
//=======================================================

$scriptDelete = 'DELETE FROM tb_form_itens where id = :id';

$scriptPreparado = $conn->prepare($scriptDelete);

$scriptPreparado->execute(['id' => $id]);
//se este valor for maior q zero:
if ($scriptPreparado->rowCount() > 0) { //
    echo '<h2>Registro apagado com sucesso</h2>';
    header('location:table.php');
}
else {
    echo '<h2>Algo deu errado entre em conatato com @Assistência</h2>';
}
