<?php 
include './template/header.php';
?>

<?php
//conexção com o banco de dados==========================
    $dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"
    $conn = new PDO($dsn, $usuario, $senha); //pega informacoes de fora (banco e dados)
//=======================================================

    $scriptConsulta = 'SELECT * FROM tb_form_itens';
    $resultadoConsulta = $conn->query($scriptConsulta)->fetchAll();    //fech puxa dado de um / fechAll puxa todos
    /*echo '<pre>';            //quebra linha pra ser legivel*/
    //var_dump($resultadoConsulta);
?>
<body>

    <section class="group-table">

        <table border="1" class="tabela">
            <caption><h1>Tabela de clientes</h1></caption>
            <thead>
                <tr>
                    <th scope="col" class="th">#</th>
                    <th scope="col" class="th"><h3 class="h3">Nome</h3></th>
                    <th scope="col" class="th"><h3 class="h3">Usuario</h3></th>
                    <th scope="col" class="th"><h3 class="h3">Telefone</h3></th>
                    <th scope="col" class="th"><h3 class="h3">Senha</h3></th>    
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultadoConsulta as $linha) { ?> <!--//[1]inicio-->
                <tr>
                    <th scope="row" class="th"><?= $linha['id'] ?></th>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['usuario'] ?></td>
                    <td><?= $linha['telefone'] ?></td>
                    <td><?= $linha['senha'] ?></td>
                    <!--<a href="./index2.php?idConsulta=<//?= $linha['id'] ?>" class="links">Abrir</a> requisicao da coluna id no meu banco de dados-->
                    
                    <!--botões-->
                    <td class="sem-border"><a href="./impressao.php?idConsulta=<?= $linha['id'] ?>" class="links"><button class="verde">Abrir</button></a></td>

                    <td class="sem-border"><a href="./formulario.php?id=<?= $linha['id'] ?>"><button class="amarelo">Editar</button></a></td>

                    <td class="sem-border"><a href="./form-delete.php?idDelete=<?= $linha['id'] ?>"><button class="vermelho">Fechar</button></a></td>
                </tr>
            <?php } ?>  <!--//[1]fim-->
            
        </tbody>
    </table>
</section>
    
    <?php 
include './template/footer.php'
?>