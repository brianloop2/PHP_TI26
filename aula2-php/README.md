##### PHP - COMANDOS

Codigo que inicializa nossa conexão de nosso banco de dados para o arquivo PHP

```php
<?php
    $host = 'mysql:dbname=db_formulario;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';    //aspas sem nada significa "vazio(nada)"

    $conexcaoBanco = new PDO($host, $usuario, $senha); //pega informacoes de fora (banco e dados)
    $scriptConsulta = 'SELECT * FROM tb_form_itens';
    $resultadoConsulta = $conexcaoBanco->query($scriptConsulta)->fetchAll();    //fech puxa dado de um / fechAll puxa todos
    /*echo '<pre>';            //quebra linha pra ser legivel*/
    //var_dump($resultadoConsulta);
?>

```
get = para consulatar as informacoes