<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 - de php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <?php
        //echo "<h1>aqui um comando echo";
        $nome = "Paulo";
        $lancamento = 2025;
        $valor = 345.55;
        $ehOnline = false;

        //echo $ehOnline;
        //echo $nome;

        //essa é a forma de fazer uma concatenação no php
        //echo "o nome do jogo é {$nome}, foi lançado em {$lancamento}, com o valor {$valor}";
        //Matriz
        $matriz = [
            ['Yaya', 'nivel 4', 'companheiro'],
            ['Ubuki', 'nivel 4', 'companheiro'],
            ['Oni-yuri', 'nivel 4', 'companheiro'],
            ['Gennojo', 'nivel 10', 'vilao'],
            ['Yagoro', 'nivel 10', 'vilao'],
            ['Katsuhime', 'nivel 10', 'vilao'],
            ['Rufino', 'nivel 10', 'companheiro'],
            ['Naoe', 'nivel 3','companheiro'],
            ['Yasuke', 'nivel 3','companheiro']
        ];
    ?>
    <h1>Pokemon</h1>
    <section class="group-img">
        <figure>
            <img src="./img/pikachu.png" alt="">
            <figcaption>Pikachu</figcaption>
        </figure>
        <figure>
            <img src="./img/bulbassauro.jpg" alt="">
            <figcaption>Bulbassauro</figcaption>
        </figure>
        <figure>
            <img src="./img/charizard.jpg" alt="">
            <figcaption>Charizard</figcaption>
        </figure>
    </section>
    <p>Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Per aumento de cachacis, eu reclamis. <span>Paisis, filhis, espiritis santis. Cevadis im ampula pa arma uma pindureta.</span>Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Per aumento de cachacis, eu reclamis. Paisis, filhis, espiritis santis. Cevadis im ampula pa arma uma pindureta.</p>
    <div class="group-ul">
        <ul>
            <h3>ITENS</h3>
            <!--?php
            for ($i=0;$i < count($matriz) ; $i++) {
                echo "<li>{$matriz[$i]}</li>";
                var_dump($matriz[$i]);
            }
            ?>
            -->
        </ul>
    </div>
    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>NIVEL</th>
                <th>TIPO</th>
                <thead></thead>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($matriz); $i++){ ?>
                <tr>
                    <th><?= $matriz[$i][0]?></th>
                    <th><?= $matriz[$i][1]?></th>
                    <th><?= $matriz[$i][2]?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        
</body>
</html>