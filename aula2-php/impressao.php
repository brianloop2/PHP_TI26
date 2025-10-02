<?php 
include './template/header.php';
?>

    <?php
    $id = $_GET['idConsulta'];

//conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
//=======================================================
    
    $resultadoConsulta = " SELECT * FROM tb_form_itens where id = :$id ";  
    $scriptConsulta = $conn->query($resultadoConsulta)->fetch();    //fech puxa dado de um / fechAll puxa todos


    // echo '<pre>';            //quebra linha pra ser legivel*/
    // var_dump($resultadoConsulta);
    ?>
<body>
    <section class="impressao">
        <main class="grupo">
            <h1>Impressão</h1>
            <h4>Nome</h4>
            <p><?= $scriptConsulta ['nome'] ?></p>
            <div></div>
            <h4>Telefone</h4>
            <p><?= $scriptConsulta ['telefone'] ?></p>
            <div></div>
            <h4>Usuario</h4>
            <p><?= $scriptConsulta ['usuario'] ?></p>
            <div></div>
            <h4>Senha</h4>
            <p><?= $scriptConsulta ['senha'] ?></p>
            <div></div>
        </main>
    </section>
    
    
    <?php 
include './template/footer.php'
?>
<!-- </body>
</html> -->