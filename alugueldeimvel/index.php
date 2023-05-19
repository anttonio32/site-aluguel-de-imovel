<?php
include "imoveis.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>RAAE-Temporadas</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <img src="img/logo-RAAE.png" alt="Logo_RAAE" width="60px">
            </div>
            <nav>
                <a href="#" class="nav-link">Casas de Praia</a>
                <a href="#" class="nav-link">Chalé</a>
                <a href="#" class="nav-link">Apartamento</a>
                <a href="phpehtml/sobre.html" class="nav-link">Sobre Nós</a>
            </nav>
        </div>
    </header>
    <main>
    <div class="foto1">
            <img src="/alugueldeimvel/img/logo-whatsapp.png" alt="foto inicial">
    
    <h2>Tipos de imoveis</h2>
    </div>

    <div class="container">

    <?php foreach($tipos as $i => $t){   ?>

        <div class="tag">
         
        <h3>Apartamento</h3>
        <img src="img/apartamento-cidade.png" alt="imagem do aprt">
        <p>São Paulo-SP, centro da cidade, 2 suítes, diária 950 reais</p>
    
        <h3>Chalé</h3>
        <img src="img/chale-natureza.png" alt="imagem do chalé">
        <p>Lençois-BA, contato com a natureza, 3 beliches, diária 450 reais</p>
   

        <h3>Casa de Praia</h3>
        <img src="img/casa-praia.png" alt="imagem da casa de praia" width="800px">
        <p>Aracaju-SE, orla de praia, 5 suítes, diária 2500 reais</p>
        
    </div>

    <?php   } ?>
    </div>

    </main>
    <footer>


    </footer>
    <script src="js/script.js"></script>
</body>
</html>