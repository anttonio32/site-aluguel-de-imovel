<?php
    include "phpehtml/imoveis.php";
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
            <img src="img/imagem-principal.png" alt="foto inicial">
    
    <h2>Veja nossos tipos de imoveis </h2>
    </div>

    <div class="container">

    <?php foreach($imovel as $i => $t){  ?>
    <div class="tag">
        <a href="tipos.php?i=<?=$i?>"></a>
		<img src="<?=$t["foto"]?>" alt=<?=$t["nome"]?>>
		<p>Descrição dos imoveis:<?= $t["descricao"]?></p>
    </div>

    <?php   } ?>
    </div>

    </main>
    <footer>


    </footer>
    <script src="js/script.js"></script>
</body>
</html>