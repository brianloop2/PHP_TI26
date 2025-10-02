<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_animais";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//mensagem de erro caso houver um problema com o banco de dados
if($conexao->connect_error){
    die("Falha na conexão do banco" . $conexao->connect_error);
}

//verifica se ele pego todos os dados dos input
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // "foto_animais" nome do id la no input
    // isset — Determina se uma variável está declarada e é diferente de null
    if(isset($_FILES["foto_animal"]) && $_FILES["foto_animal"]["error"] == 0){//verifica se o arquivo existe e se não da uma mensagem de erro
        // "nome_animal" nome do id la no input
        $nome_animal = $conexao->real_escape_string($_POST['nome_animal']);   //transforma em uma string
        $arquivo_tmp = $_FILES['foto_animal']['tmp_name'];  
        $nome_original = $_FILES['foto_animal']['name'];

        $extensao = pathinfo($nome_original, PATHINFO_EXTENSION);//captura qualquer extensao q estou usando
        
        //uniqid — Gera um identificador baseado em horário
        // ex:
        //fotoPet3.png = nome do arquivo 
        //O "." é para separar quando der o nome do arquivo
        //"png" = $extensao
        
        $novo_nome = uniqid() . "." . $extensao;

        //define o caminho q o arquivo vai ser levado "./uploads/
        //"$novo_nome" seria o nome aleatoria q nos esta criando 
        $caminho_upload = "./uploads/" . $novo_nome;

        if(move_uploaded_file($arquivo_tmp, $caminho_upload)){
            $sql = "INSERT INTO fotos (nome, nome_arquivo, localizacao) VALUES ('$nome_animal', '$novo_nome', '$caminho_upload')";
            if($conexao->query($sql) == TRUE){
                echo "<h1>Foto cadastrada com suscesso</h1>";
                echo "<p>Nome do Animal: $nome_animal</p>";
                echo "<p>Nome do arquivo: $novo_nome</p>";
                echo "<a href='./index.php'>Cadastrar outra foto</a>";
            }
            else
            {
                echo "ERRO ao salvar a foto";
            }
        }
    }
    else
    {
        echo "nenhum arquivo envidao";
    }
$conexao->close();
}