## Upload de arquivos - 22/09/25
###### Aula 4 - PHP

Aprendemos a criar e utilizar classes no PHP 
Exemplo de criação com a **conexão de banco:**
```PHP
class Animais{
    public function __construct(){
        $dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
        $usuario = 'root';
        $senha = '';
        $this->conn = new PDO($dsn, $usuario, $senha);
        //$this = "em mim mesmo"
    }
}
```
Essa classe utilizamos da seguinte forma:








