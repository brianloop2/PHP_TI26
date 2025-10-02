<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade do balacobaco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php
echo '<h1>Atividade do balacobaco</h1>';
echo '<h4>23 atividades de php</h4>';
// 1. Função de boas-vindas
// Crie uma função que receba o nome de uma pessoa e retorne a frase:
//"Bem-vindo, [nome]!"

function boasVindas($nome){
    return 'Bem vindo,'. $nome;
}
$nome = 'felipe';
echo '<h5>Atividade 1 --------------------------------------------------------------------------</h5>';
echo boasVindas($nome);
echo '<br>';
echo '<br>';

// 2. Função de soma simples
// Crie uma função que receba dois números como parâmetros e retorne a soma 
// deles.

function somaSimples($num1, $num2,){
    
    return $num1 + $num2;

}
echo '<h5>Atividade 2 --------------------------------------------------------------------------</h5>';
$resultado = somaSimples(4, 3);
echo " a soma dos seus numeros dá: $resultado";
echo '<br>';
echo '<br>';

// 3. Função de par ou ímpar
// Crie uma função que receba um número e retorne se ele é par ou ímpar.
function parImpar($num){
        echo "O número $num : ";
        if
        ($num % 2 == 0){
            echo "é par!";
        }
        else
            echo "é impar";
}
echo '<h5>Atividade 3 --------------------------------------------------------------------------</h5>';

echo parImpar(2);
echo '<br>';
echo '<br>';
        
// 4. Função de maior número
// Crie uma função que receba 3 números e retorne qual deles é o maior.
function numMaior($n1, $n2, $n3){
    echo "Entre os numeros:  $n1, $n2, $n3","<br>";
    if ($n2 > $n1){
        $n1 = $n2;
        echo "O maior é o: $n2";
    }
    elseif ($n3 > $n1){
        $n1 = $n3;
        echo "O maior é o: $n3";
        }
    else 
        echo "O maior é o: $n1";
}
echo '<h5>Atividade 4 --------------------------------------------------------------------------</h5>';
echo numMaior(10, 20,1);
echo '<br>';
echo '<br>';

// 5. Função de média
// Crie uma função que receba um array de números e retorne a média.
function calcMedia($numeros){
    $soma = array_sum($numeros);
    return $soma / count($numeros);
}
echo '<h5>Atividade 5 --------------------------------------------------------------------------</h5>';
$numeros = [4, 10, 9, 1];
$media = calcMedia($numeros);
echo "Os media dos numeros do seu array é: $media ";
echo '<br>';
echo '<br>';


// 6. Função de inverter string
// Crie uma função que receba uma palavra e retorne ela invertida
function inverter($stringOriginal){
    return $stringInvertida = strrev($stringOriginal);  //a codigo 'strrev' inverter as palavras
}
echo '<h5>Atividade 6 --------------------------------------------------------------------------</h5>';
echo inverter('Balacovaco');
echo '<br>';
echo '<br>';

// 7. Função de contar vogais
// Crie uma função que receba uma string e retorne a quantidade de vogais nela.
function contaVogal($string) {
    //$string = strtolower($string); // strtolower — Converte uma string para minúsculas
    $vogais = 'aeiouAEIOU';  //mostro qual sao as vogais(versão maiuscula e minuscula)
    $contadorVogais = 0;
    // Percorre cada caractere da palavra/frase
    for ($i = 0; $i < strlen($string); $i++) {
    // Verifica se o palavra/frase atual está na '$vogais' 
        if (strpos($vogais, $string[$i]) !== false) {   //strpos — Encontra a posição da primeira ocorrência de uma substring em uma string
            $contadorVogais++;     //Em PHP, '!==' é o operador de desigualdade estrita, que retorna true se os valores de ambos os lados forem diferentes em valor ou tipo de dados, e false se forem idênticos em ambos.
        }
    }
    return $contadorVogais;
}
echo '<h5>Atividade 7 --------------------------------------------------------------------------</h5>';
$texto = "OBITO";
$totalDeVogais = contaVogal($texto);
echo "$texto <br>";
echo "O número de vogais presente na sua frase é de: " . $totalDeVogais;
echo '<br>';
echo '<br>';


// 8. Função de tabuada
// Crie uma função que receba um número e retorne a tabuada dele (de 1 a 10).

function tabuada($tabuadaDo){
    $resultadoTabuada = "";
    for ($i = 1; $i <= 10; $i++){
        $Atabela = $tabuadaDo * $i;
        $resultadoTabuada .= "$tabuadaDo x $i = $Atabela<br>";
    }
    return $resultadoTabuada;
}
echo '<h5>Atividade 8 --------------------------------------------------------------------------</h5>';
echo tabuada(191);

echo '<br>';
echo '<br>';

// 9. Função geradora de senhas
// Crie uma função que receba um número (tamanho da senha) e retorne uma 
// senha aleatória usando letras e números

function senhaAleatoria($senhaDeNumeros){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $comprimento = strlen($senhaDeNumeros);//strlen — Retorna o tamanho de uma string
    $senhaAleatoria = '';
    for($i = 0; $i < $comprimento; $i++){
        $senhaAleatoria .= $caracteres[rand(0, strlen($caracteres) - 1)];//strlen — Retorna o tamanho de uma string
    }
    return $senhaAleatoria;
}
echo '<h5>Atividade 9 --------------------------------------------------------------------------</h5>';
$digitesenha = senhaAleatoria("123123123123123");
echo "Sua senha agora é $digitesenha";
echo '<br>';
echo '<br>';


// 10. Função de formatar CPF
// Crie uma função que receba um número de 11 dígitos e retorne no formato:
// 000.000.000-00.
function formataCpf($cpf){
    //verificaçao se cpf tem 11 digitos
    $cpf = preg_replace('/\D/', '', $cpf);
    if(strlen($cpf) != 11){
        return false;
    }
    $cpfformatado = substr($cpf, 0, 3). '.' . substr($cpf, 3, 3). '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
    // substr — Retorna parte de uma string
    // '.' é usado para concatenar strings (unir textos) 
    return $cpfformatado;
}
echo '<h5>Atividade 10 -------------------------------------------------------------------------</h5>';


$cpf = "12345678910";
echo formataCpf($cpf);
echo '<br>';
echo '<br>';

// 11. Função de conversão
// Crie uma função que receba um valor em real (R$) e faça a conversão para 
// dólar (US$), usando um parâmetro para a cotação.
function formataReal(float $valor_reais, float $cotacao_dolar): float
{
    return $valor_reais / $cotacao_dolar;   //operacao em divisao
}
$real = 1;
$cotacao_hoje = 5.40; // Valor hipotético da cotação do dólar
$dolar = formataReal($real, $cotacao_hoje);

// Exibe o resultado formatado
echo '<h5>Atividade 11 -------------------------------------------------------------------------</h5>';
echo "R$ " . number_format($real, 2, ',', '.') . " equivalem a US$ " . number_format($dolar, 2, '.', ',');
//
//number_format — Formata um número com milhares agrupados


// 1 Dólar americano igual a
// 5,40 Real brasileiro
//atulizado dia 10/09/2025


echo '<br>';
echo '<br>';

//Usando banco de dados ====================================================================================
//minha conexao de banco em uma funçao com mensagem de erros

// 12. Função de conexão com banco
// Crie uma função que retorne um objeto PDO conectado ao banco

function conexao(){
//forma que aprendi a fazer a conexxao

// $dsn = "mysql:dbname=db_gerenciador_sala;host=localhost";
// $usuario = 'root';
// $senha = '';
// $conn = new PDO($dsn, $usuario, $senha);

//ou pode ser feito assim tbm =============================
//(vi la nos seus videos que você me passou Paulo!)

    try{    //conexxao do banco
        $pdo = new PDO("mysql:dbname=db_clientes;host=localhost","root","");
    }
    catch(PDOException $e){     //mensagem de erro com o banco 
        echo "Erro com o banco de dados:".$e->getMessage();
    }
    catch(Exception $e){    //mensagem de erro (q não seja com o banco)
        echo "Erro generico:".$e->getMessage();
    }
    return $pdo;
}
// var_dump(conexao());


echo '<h5>Atividade 12 -------------------------------------------------------------------------</h5>';
echo '<h1>[X] feito</h1>';
echo '<br>';


//13. Função inserir usuário
//Crie uma função que receba nome e email e insira na tabela usuarios.

function insetInto($nome, $email)
{
    $conn = conexao();
    $script = "INSERT INTO tb_clientes (nome, email) VALUES (:nome, :email)";
    $insere = $conn->prepare($script)->execute([
        ':nome' => $nome,
        ':email' => $email
    ]);
    if($insere){
        echo "cadstrado com sucesso !";
    }else{
        echo "houve uma falha !";
    }
}
echo '<h5>Atividade 13 -------------------------------------------------------------------------</h5>';
// var_dump(insetInto('brian', 'olhaAquiPaulo@gmail.com'));
echo '<h1>[X] feito</h1>';

echo '<br>';

// 14. Função listar usuários
// Crie uma função que recebe o nome de uma tabela e retorne todos os dados 
// dela

function listar($tabela = 'tb_clientes'): array
{
    $conn = conexao();
    $script = "SELECT * FROM $tabela";
    $dados = $conn->query($script)->fetchAll();
    return $dados;
}

$resultadoLista = listar();
echo '<h5>Atividade 14 -------------------------------------------------------------------------</h5>';
echo '<h1>[X] feito</h1>';
echo '<pre>';
echo var_dump($resultadoLista);
echo '</pre>';
echo '<br>';


// 15. Função buscar usuário por ID
// Crie uma função que receba um nome de tabela e um id e retorne os dados 
// correspondente
function buscar($id = 0, $tabela='tb_clientes') : array{
    $conn = conexao();
    $script = "SELECT * FROM $tabela WHERE id = $id";
    $dados = $conn->query($script)->fetchAll();
    return $dados;
}

echo '<h5>Atividade 15 -------------------------------------------------------------------------</h5>';
echo '<h1>[X] feito</h1>';
echo '<pre>';
var_dump(buscar(3));        
echo '</pre>';
echo '<br>';


// 16. Função excluir usuário
// Crie uma função que receba nome de tabela e um id e exclua o usuário do 
// banco

function deleteFrom($id, $tabela = 'tb_clientes'): bool {
    $conn = conexao();
    $script = "DELETE FROM $tabela WHERE id = :id";
    $resul = $conn->prepare($script)->execute([":id" => $id]);

    return $resul;
}
echo '<h5>Atividade 16 -------------------------------------------------------------------------</h5>';
echo '<h1>[X] feito</h1>';
echo '<pre>';
var_dump(deleteFrom(3));    //vo apagar o registro 3    
echo '</pre>';
echo '<br>';


// 17. Escreva uma função que receba, o nome de um funcionario e o valor de seu salario e aplique 
//um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento,
// entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.
function aumentoDeSalario(float $salario){
    $vinte =    0.20;     //20%
    $quinze =   0.15;     //15%
    $dez =      0.10;     //10%
    if($salario < 1000){
        $resultado = $salario * $vinte;     //calculando os 20%
        $soma = $salario + $resultado;      //fazendo a soma dos 20%
        echo "Seu salario de R$.$salario recebe uns 20% (R$.$resultado) de aumento!","<br>";
        echo "Total fica: R$.$soma";
    }
    elseif($salario < 2000){
        $resultado = $salario * $quinze;
        $soma = $salario + $resultado;
        echo "Seu salario de R$.$salario recebe uns 15% (R$.$resultado) de aumento!","<br>";
        echo "Total fica: R$.$soma";
    }
    elseif($salario > 2000){
        $resultado = $salario * $dez;
        $soma = $salario + $resultado;
        echo "Seu salario de R$.$salario recebe uns 10% (R$.$resultado) de aumento!","<br>";
        echo "Total fica: R$.$soma";
    }
}
echo '<h5>Atividade 17 -------------------------------------------------------------------------</h5>';
echo aumentoDeSalario(2500.00);     //digite aqui o salario
echo '<br>';
echo '<br>';


// 18. Crie uma função que verifique se uma letra é vogal ou consoante.
function letraOuConsoante($letra){
    // '===' é o operador de igualdade estrita, que compara se dois valores são iguais em valor E em tipo de dados
    if(strlen($letra) === 1 &&  ctype_alpha($letra)){   //ctype_alpha — Verifica se os caracteres são alfabéticos
        $letraMinuscula = strtolower($letra);   //strtolower — Converte uma string para minúsculas
        $vogal = ['a', 'e', 'i', 'o', 'u'];
        if(in_array($letraMinuscula, $vogal)){
            return 'sua letra é vogal';
        }else{
            return 'sua letra é consoante';
        }
    }else{
        return 'tecla invalida';      //caso se algo q n seja uma letra seja digitado
    }
}
echo '<h5>Atividade 18 -------------------------------------------------------------------------</h5>';
echo letraOuConsoante("i");
echo '<br>';
echo '<br>';

// 19. Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.
function filtroDeNumPares(array $numeros): array {
    return array_filter($numeros, function($numero) {
        //array_filter — Filtra elementos de um array utilizando uma função callback
        return $numero % 2 === 0;
    });
}
echo '<h5>Atividade 19 -------------------------------------------------------------------------</h5>';
echo '<pre>';
$Array = [1,2,3,4,5,6,7,8,9,10,11,12,13];
$pares = filtroDeNumPares($Array);
print_r($pares);     //print_r — Exibe informação legível sobre uma variável
echo '</pre>';
echo '<br>';

// 20. Crie uma função que receba um array de números e retorne o segundo maior número do array.

//esta funcao esta errada era para ser o o 'segundo maior' do array e não o 'maior' !!!

// function filtroDoNumMaior(array $numeroArray) {
//     return max($numeroArray);
// }
// echo '<h5>Atividade 20 -------------------------------------------------------------------------</h5>';

// echo '<pre>';
// echo 'O maior do seu Array é: ';

// $maiorDoArray = [1,2,3,40,5,6,7,8,9,10];

// $maior =  filtroDoNumMaior($maiorDoArray);
// print_r($maior);
// echo '</pre>';
// echo '<br>';
function segMaior($array) {    
    $arrayUnico = array_unique($array);     //array_unique — Remove os valores duplicados de um array
    rsort($arrayUnico);     //rsort — Ordena um array em ordem descrescente
    // Retorna o segundo maior número
    return $arrayUnico[1];
}
$numArray = [5, 3, 9, 1, 10, 7];
$segundo = segMaior($numArray);
echo '<h5>Atividade 20 -------------------------------------------------------------------------</h5>';
echo "O segundo maior número é: $segundo";



// 21. Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que começam com uma vogal.

function filtroVogal($array) {
    $resultado = [];

    foreach ($array as $string) {
        if (preg_match('/^[aeiouAEIOU]/', $string)) {       //preg_match — Realiza uma correspondência com expressão regular
            $resultado[] = $string;
        }
    }

    return $resultado;
}
$palavras = ["carro", "sacola", "Paulo", "laranja", "Escada", "mesa"];
$resultado = filtroVogal($palavras);

echo '<h5>Atividade 21 -------------------------------------------------------------------------</h5>';
print_r($resultado);

echo '<br>';
echo '<br>';

// 22. Faça uma função que retorne o cubo de um número.
function cuboDeUmNumero($numero) {
    //para calcular um cubo de um numero ele tem q ser multiplicado 3 vezes
    $cubo = $numero ** 3; // numero * numero * numero
    echo "O cubo de $numero é: $cubo";
}
echo '<h5>Atividade 22 -------------------------------------------------------------------------</h5>';
echo cuboDeUmNumero(6);
echo '<br>';
echo '<br>';


// 23. Faça uma função que retorne a raiz quadrada de um número.
function raizQuadr($num){
    $raiz = sqrt($num);
    echo "a raiz quadrada de $num é: $raiz";
}
echo '<h5>Atividade 23 -------------------------------------------------------------------------</h5>';
echo raizQuadr(25);
echo '<br>';
echo '<br>';

?>


</body>
</html>
