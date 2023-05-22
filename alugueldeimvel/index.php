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
                <a href="#Casa de Praia" class="nav-link">Casas de Praia</a>
                <a href="#Chalé" class="nav-link">Chalé</a>
                <a href="#Apartamento" class="nav-link">Apartamento</a>
                <a href="phpehtml/sobre.html" class="nav-link">Sobre Nós</a>
            </nav>
        </div>
    </header>

    <main>
    <div class="foto1">
        <img src="img/casas-modernas.png" alt="foto inicial">
    </div>
    <h2>VEJA OS TIPOS DE IMÓVEIS MAIS PROCURADOS</h2>
    <div class = "container" >
    <?php foreach($imovel as $i => $t){  ?>
        <a href="tipos.php?i=<?=$i?>"></a>
        <a name="<?=$t["nome"]?>"></a>
        <ul>
            <li>
                <h3><?= $t["nome"]?></h3>
                <img src="<?=$t["foto"]?>" alt= "<?=$t["nome"]?>" >
                <p>Descrição dos imoveis:<?= $t["descricao"]?></p>
            </li>
        </ul>
    <?php } ?>
    </div>
    </main>

    <footer>


    </footer>
    <script src="js/script.js"></script>
</body>
</html>