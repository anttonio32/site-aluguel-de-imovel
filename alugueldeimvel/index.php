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
                <img src="img/logo-RAAE.png" alt="Logo_RAAE">
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
    <div class="chekin">
       <h3>Encontre lugares para ficar: </h3>
       <h6>Descubra espacos inteiros e  quartos privativos ideiais para todas suas viagens.</h6>
        <a name="checkin">
            <form action="phpehtml/tiposdeimovel.php" method="post">
                <div class="loc">
                    <label>Localização:
                    <select name="localizacao">
                        <option value="0">São Paulo-SP</option>
                        <option value="1">Lençóis-BA</option>
                        <option value="2">Aracaju-SE</option>
                    </select>
                    </label>
                </div>
                <div class="check">
                    <label>Check-in
                        <input type="date" name="checkin">
                    </label>
                    <label>Check-out
                        <input type="date" name="checkout">
                    </label>
                </div>
                <div class="hospedes">
                    <label>Número de hospedes:
                        <input type="number" name="hospedes">
                    </label>
                </div>
                <div class="button">
                    <button>Buscar</button>
                </div>
            </form>
        </a>
    </div>
    <h2>VEJA OS TIPOS DE IMÓVEIS MAIS PROCURADOS</h2>
    <div class = "container" >
    <?php foreach($imovel as $i => $t){  ?>
        <a name="<?=$t["nome"]?>"></a>
        <ul>
            <li>
                <h3><?= $t["nome"]?></h3>
                <a href="#checkin">
                    <img src="<?=$t["foto"]?>" alt= "<?=$t["nome"]?>">
                </a>
                <p>Descrição dos imoveis:<?= $t["descricao"]?></p>
            </li>
        </ul>
    <?php } ?>
    </div>
    </main>

    <footer>
       <div class="footer">
       <div class="logo">
             <img src="img/logo-RAAE.png" alt="Logo_RAAE">
        </div>
        <div class="icones">
        <img src="img/logo-facebook.png" alt="Logo_facebook">
        <img src="img/logo-instagram.png" alt="Logo_instagram">
        <img src="img/logo-whatsapp.png" alt="Logo_whatsapp">
        </div>
    </div>
    </footer>
</body>
</html>