<?php        

require "imoveis.php";
if(isset($_GET["i"])){
    header("location: index.php");
    die;
}
$indice = $_GET["i"];
$t = $imovel[$indice];

?>

<!DOCTYPE html>
<html>
<head>
	<title>  tipos de Imoveis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Listagem dos imoveis</h1>
    </header>
	<div class="container-del">
		
		
		<div class="cad">
			<img src="<?= $t["foto"]?>" alt="<?= $t["nome"]?>">
			<h3><?=$t["nome"]?></h3>
			<h4><?=$t["descricao"]?></h4>
			<a href="index.php" class="link">Voltar</a>
		</div>
			
		
	</div>
</body>
</html>