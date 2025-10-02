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
        <h1>Cadastro de Fotos de Animais</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome_animal">Nome do Animal:</label>
                <input type="text" id="nome_animal" name="nome_animal" required>
            </div>
            <div class="form-group">
                <label for="foto_animal">Selecione uma foto:</label>
                <input type="file" id="foto_animal" name="foto_animal" accept="image/*" required>
                <!-- "accept="image/*""  significa que pode aceitar qualquer tipo de arquivo 
                    exemplos que você pode mudar:
                    - audio/*  
                    - audio/mp3 
                    - video/mp4 
                    - .doc, xls, xlsx
                 -->
            </div>
            <button type="submit">Cadastrar Foto</button>
        </form>
    </div>
</body>
</html>