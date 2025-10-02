<?php
require './config.php';
echo '<h1>aula 3 - php</h1>';

//criaçao de uma function
function calcular($num1, $num2, $num3){
    echo '<h1>hello word</h1>';
    //modo simples:
    // $valorA = 10;
    // $valorB = 58;
    // $resultado = 10 + 58;

    // $resultado = $num1 + $num2;
    // echo "a soma de {$num1} + {$num2} = " . $resultado;
}

/*@TESTE*/
function consultarTabelas($tabela = 'tb_turma', $conn2): string
{

if(empty($conn2) || $conn2 == ''){
    echo 'IRMAO PASSA A CONEXAO DO BANCO AI<br>';
    return false;
}

$script = 'SELECT * fROM' . $tabela;

$res = $conn2->query($script)->fetch();

echo '<pre>';
var_dump($res);

return 'banco consultado com sucesso!';
}
function conexao(){

$dsn = "mysql:dbname=db_gerenciador_sala;host=localhost";
$usuario = 'root';
$senha = '';
return new PDO($dsn, $usuario, $senha);



}

$novaConexao = conexao();



consultarTabelas('tb_docente', $novaConexao);
consultarTabelas('tb_sala', $novaConexao);
consultarTabelas('tb_turma', $novaConexao);
consultarTabelas('tb_reserva_sala', $novaConexao);
consultarTabelas('tb_turma', $novaConexao);


