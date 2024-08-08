<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Álbum de fotos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Jacquard+12+Charted&family=Jacquard+24+Charted&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>
<style>
    .galery {
        display: flex;
        flex-wrap: wrap;
        text-align: center;
    }
    .galery img {
        width: 19%;
        margin: 1%;
        transition: transform 0.2s;
        border-radius: 10px;
        max-width: 300px;
        max-height: 250px;

    }

    .galery img:hover {
        transform: scale(1.1);
    }

</style>

<body>
    <h2>⭑☆ Galeria ☆⭑</h2>>
    <form action="upload.php" method="post" enctype="multipart/from-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit">Enviar imagem</button>
    </form>
    <div class="galery">
        <?php 
        $files = glob("uploads/*.*");
        foreach($files as $file) {
            echo '<img src="' . $file . '" alt="imagem">';
        }
        ?>
    </div>
   
</body>
</html>