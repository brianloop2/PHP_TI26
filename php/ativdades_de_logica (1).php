<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades de logica PHP</title>
</head>
<body>
<!-- 1- Escreva um programa que verifique se um número fornecido pelo usuário é positivo, negativo ou zero.-->
    <?php
        echo "<h4>1.Escreva um numero:</h4>\n";
        $numero = 0;
        if
        ($numero > 0){
            echo "<p>O numero $numero é positivo!</p>";
        }
        else if
        ($numero < 0){
            echo "<p>O numero $numero é negativo!</p>";
        }
        else
            echo "<p>O numero $numero é zero.!</p>";
    ?>
<!-- 2- Crie um programa que leia a idade de uma pessoa e informe se ela é maior de idade (18 anos ou mais) ou menor de idade.-->
    <?php
        echo "<h4>2.Digite sua idade: </h4>";
        $idade = 110;
        echo "$idade ...";
        if
        ($idade > 17){
            echo "Você é de maior!";
        }
        else 
            echo "Você é de menor!";
    ?>   
<!-- 3- Escreva um programa que verifique se um número fornecido pelo usuário é par ou ímpar.-->
    <?php
        echo "<h4>3.Digite um número: </h4>";
        $numero2 = 0;
        echo "$numero2 ...";
        if
        ($numero2 % 2 == 0){
            echo "O numero é par!";
        }
        else
            echo "O numero é impar";
    ?>
<!-- 4- Imprima os números de 1 a 10 utilizando um laço de repetição. -->
    <?php
        echo "<h4>4.Números de 1 a 10:</h4>";
        for ($i = 1; $i < 11; $i++)
        echo "[ $i ],";
    ?>

<!-- 5- Imprima todos os números pares de 1 a 20 utilizando um laço de repetição. -->
    <?php
        echo "<h4>5.Números pares de 1 a 20:</h4>";
        for($j = 1; $j < 21; $j++)
        if ($j % 2 == 0){
            echo "[ $j ]";
        }
    ?>

<!-- 6- Calcule a soma de todos os números de 1 a 100 utilizando um laço de repetição.(5050)-->
    <?php
        echo "A soma de todos os números de 1 a 100";
        $somaDeTodos = 0;

        for ($k = 1; $k <= 100; $k++) {
        $somaDeTodos += $k;
        }
        echo "resultado de tudo somado: " . $somaDeTodos;
    ?>
<!-- 7- Escreva um programa que verifique se uma letras fornecida pelo usuário é uma vogal ou uma consoante.-->
    <style>
        .linha{
            width: 100%;
            height: 1px;
            background-color: black;
        }
    </style>
    <div class="linha"></div>
    <h4>Digite uma letras:</h4><br>
    <form method="post">
        <input type="text" name="letras" maxlength="1" required>
        <button type="submit">enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // strtolower — Converte uma string para minúsculas
    $letras = strtolower($_POST["letras"]);
    if (preg_match("/^[a-zA-Z]$/", $letras)) {
        if (in_array($letras, ['a', 'e', 'i', 'o', 'u'])) {
            echo "A letra '{$letras}' é uma vogal.";
        } else {
            echo "A letra '{$letras}' é uma consoante.";
        }
        } else {
        echo "Não é uma letra do alfabeto";
        }
    }
    ?>
<!-- 8- Escreva um programa que leia um mês do ano e informe quantos dias ele tem.-->
    <div class="linha"></div>
    <h4>Informe o nome de um mês:</h4>
    <form method="post">
        <input type="text" name="mes" required>
        <button type="submit">enviar</button>
    </form>
    <?php    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = strtolower(trim($_POST["mes"])); // Converte para minúsculas e remove espaços extras
        $diasMes = [
            "janeiro" => 31,
            "fevereiro" => 28,
            "março" => 31,
            "abril" => 30,
            "maio" => 31,
            "junho" => 30,
            "julho" => 31,
            "agosto" => 31,
            "setembro" => 30,
            "outubro" => 31,
            "novembro" => 30,
            "dezembro" => 31
        ];
        if (array_key_exists($mes, $diasMes)) {
            echo "O mês de " . ucfirst($mes) . " tem " . $diasMes[$mes] . " dias.";
        } else {
            echo "não é um mes";
        }
    }
    ?>
<!-- 9-Escreva um programa que leia o salário de um funcionário e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.-->
    <div class="linha"></div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {     
            $aumento = 0;
            $salarioNovo = 0;
            $salario = floatval($_POST["salario"]);
        if ($salario < 1000) {
            $aumento = 0.20;
        } elseif ($salario >= 1000 && $salario <= 2000) {
            $aumento = 0.15;
        } else {
            $aumento = 0.10;
        }
            $valorAumento = $salario * $aumento;
            $salarioNovo = $salario + $valorAumento;
        echo "Salário inicial: R$ " . number_format($salario, 2) . "<br>";
        echo "O aumento seria : " . ($aumento * 100) . "%<br>";
        echo "Valor do aumento: R$ " . number_format($valorAumento, 2) . "<br>";
        echo "Salario novo: R$ " . number_format($salarioNovo, 2) . ".";
}
?>
<!-- 10-Imprima os primeiros 10 números da sequência de Fibonacci utilizando um laço de repetição.-->    
    <div class="linha"></div>
    <?php
        $comeco = 0;
        $fim = 1;
        for ($l = 0; $l < 10; $l++) {
        echo "[$comeco]" . "<br>";
        $temp = $comeco + $fim;
        $comeco = $fim;
        $fim = $temp;
    }
    ?>
<!-- 11- Inverter uma String, implemente um programa que inverte uma String fornecida pelo usuário utilizando um laço de repetição.-->
    <?php
        $texto = readline("Escreva uma palavra: ");
        $inversao = "";
        for ($o = strlen($texto) - 1; $o >= 0; $o--) {
        $inversao .= $texto[$o];
        }
        //resultado
        echo "palavra invertida: {$inversao}";
    ?>
</body>
</html>