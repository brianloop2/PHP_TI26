<?php 
include './template/header.php';

//isset -> valida se exite
//empty -> valida se é vazio

//isset — Determina se uma variável está declarada e é diferente de null(valida se existe ou nao)

if (isset($_GET['erro']) && $_GET['erro'] == 'sim') {
    echo '<h1>A senha que você digitou esta errado</h1>';
}

$nome = '';
$telefone = '';
$usuario = '';

$titiloFormulario = 'atualizar usuario';
$actionFormulario = './form-atualizar.php';

//isset — Determina se uma variável está declarada e é diferente de null(valida se existe ou nao)
//se ele exite eu executo e se nao, nao!
if (isset($_GET['id']) && ! empty($_GET['id'])){

    $id = $_GET['id'];

    //conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
    //=======================================================
    
    $scriptSelect = "SELECT * FROM tb_form_itens where id = $id";
    $dadosSelect = $conn->query($scriptSelect)->fetch();

    $nome = $dadosSelect['nome'];
    $telefone = $dadosSelect['telefone'];
    $usuario = $dadosSelect['usuario'];
}




?>

    <section class="formulario">
        <form action="<?= $actionFormulario ?>" method="post" class="preencher" required>
            <h1><?= $titiloFormulario ?></h1>
            <input value="<?= $id ?>" type="hidden" name="id"> <!--input invisivel (id)-->
            <label for="" class="label1">Nome</label>
            <input value="<?= $nome ?>" type="text" name="text-nome" class="input1" required>
            <label for="" class="label1">Telefone</label>
            <input value="<?= $telefone ?>" type="number" class="telefone" name="text-telefone" required>
            <label for="" class="label1">Usúario</label>
            <input value="<?= $usuario ?>"type="text" name="text-usuario" class="input1" required>

            <label for="text-senha" class="label1">Senha</label>
            <input type="password" class="senha" name="text-senha" required>
            <label for="" class="label1">Confirmar senha</label>
            <input type="password" class="senha" name="text-senha" required>

            <button type="submit">Enviar</button>
        </form>
    </section>
        
<?php 
include './template/footer.php'
?>