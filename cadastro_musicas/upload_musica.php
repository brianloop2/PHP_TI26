<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_musicas";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//mensagem de erro caso houver um problema com o banco de dados
if($conexao->connect_error){
    die("Falha na conexão do banco" . $conexao->connect_error);
}

//verifica se ele pego todos os dados dos input
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // "foto_animais" nome do id la no input
    // isset — Determina se uma variável está declarada e é diferente de null
    if(isset($_FILES["baixa_musica"]) && $_FILES["baixa_musica"]["error"] == 0){//verifica se o arquivo existe e se não da uma mensagem de erro
        // "nome_album" nome do id la no input
        $nome_album = $conexao->real_escape_string($_POST['nome_album']);   //transforma em uma string
        $nome_musica = $conexao->real_escape_string($_POST['nome_musica']);   //transforma em uma string
        
        $arquivo_tmp = $_FILES['baixa_musica']['tmp_name'];  
        $nome_original = $_FILES['baixa_musica']['name'];

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
            $sql = "INSERT INTO musicas (nome, nome_musica, nome_arquivo, localizacao) VALUES ('$nome_album', '$nome_musica', '$novo_nome', '$caminho_upload')";
            if($conexao->query($sql) == TRUE){
                echo "<h1>Musica cadastrada com suscesso</h1>";
                echo "<p>Nome do album: $nome_album</p>";
                echo "<p>Nome do musica: $nome_musica</p>";
                echo "<p>Nome do arquivo: $novo_nome</p>";
                echo "<a href='./index.php'>Cadastrar outra musica</a>";
            }
            else
            {
                echo "ERRO ao salvar a musica";
            }
        }
    }
    else
    {
        echo "nenhum arquivo envidao";
    }
$conexao->close();
}