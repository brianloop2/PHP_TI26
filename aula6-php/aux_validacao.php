<?php
echo '<h1>aux_validacao.php</h1>';

var_dump($_POST);


function fnValidarNomeCompleto(string $nome) : bool {
    /*
    - Validar se é um nome
    - não pode carcter especial
    - não pode estar vazio
    - não pode ser numero
    */

    //caso se ele n for uma string return false
    if(!is_string($nome)){
        echo 'não é uma string';
        return false;
    }
    //caso se ele n for um int return false
    if(is_numeric($nome)){
        echo 'é um numero';
        return false;
    }
    //caso o nome contenha um numero
    if(ctype_alnum($nome)){
        echo 'ele tem numero ali tbm';
        return false ;
    }
    //caso o nome contenha carcte especial
    if(preg_match("/^[a-zA-ZçÇáéíóúãõâêîôûàèìòùäëïöüñÇÁÉÍÓÚÃÕÂÊÎÔÛÀÈÌÒÙÄËÏÖÜÑ]+$/",$nome)){
        echo 'o nome não pode conter caracter especial';
        return false;
    }
    //caso a pessoa deixar o campo vazio
    if(empty($nome)){
        echo "nome é obrigatório.";
        return false;
    }
    return true;

}
function fnValidarIdade($idade, $data_nasc): bool{
    /**Validar se é um numero
     * não pode ser de menor
     * não pode ter idade acima 120 anos 
     * não pode conter espaço
     */
    if(empty($idade)) {
        echo "O campo de idade não pode estar vazio.";
        return false;
    }
    if(empty($data_nasc)){
        echo "O campo de data não pode estar vazio.";
        return false;
    }
    if($idade > 120){
        // echo 'você devia estar morto XD';
        echo 'digite uma idade real';
        return false;
    }
    
    // Define o fuso horário para Português do Brasil, se necessário
    date_default_timezone_set('America/Sao_Paulo'); 
    // Obtém a data atual no formato DD/MM/YYYY
    $data_atual = date('d/m/Y');
    // Imprime a data atual
    // echo "A data de hoje é: $data_atual";
    if($idade < 18){
        echo 'você é de menor';
        return false;
    }
    
    return true;
}    




// $hoje = new DateTime();
// var_dump($hoje);

//validação se arquivo foi chamado via POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    /*validar se o nome 
    - não pode caracter especial
    - não pode estar vazio
    -não pode se número
    */
    fnValidarNomeCompleto($_POST['nome']);
    fnValidarIdade($_POST['idade'], $_POST['data_nasc']);
}








//impede que as pessoas abram o arquivo diretamente 
if($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_GET)){
    header('location:')    ;
}
