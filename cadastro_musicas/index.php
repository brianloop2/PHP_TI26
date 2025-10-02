<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fotos de Animais</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Músicas</h1>
        <form action="upload_musica.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome_album">Nome do Album:</label>
                <input type="text" id="nome_album" name="nome_album" required>
                <label for="nome_musica">Nome da musica:</label>
                <input type="text" id="nome_musica" name="nome_musica" required>
            </div>
            <div class="form-group">
                <label for="baixa_musica">Selecione um audio:</label>
                <input type="file" id="baixa_musica" name="baixa_musica" accept="audio/*" required>
                <!-- "accept="image/*""  significa que pode aceitar qualquer tipo de arquivo 
                    exemplos que você pode mudar:
                    - audio/*  
                    - audio/mp3 
                    - video/mp4 
                    - .doc, xls, xlsx
                 -->
            </div>
            <button type="submit">Cadastrar música</button>
        </form>
    </div>
</body>
</html>