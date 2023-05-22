<?php        

	include "imoveis.php";

	$metodo = $_SERVER["REQUEST_METHOD"];

	if($metodo == "POST"){
		$loc = $_POST["localizacao"] ?? "1";
		$checkin = $_POST["checkin"] ?? "";
		$checkout = $_POST["checkout"] ?? "";
		$numHos = $_POST["hospedes"] ?? "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tipos de Imoveis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Listagem dos imoveis</h1>
    </header>
	<div class="container-del">
		
		
		<div class="cad">
			<?php 
				$tipos = $imovel_detalhe[$loc];
			?>
			<img src=" <?= $tipos["foto"] ?> " alt=" <?= $tipos["nome"]?> ">
			<h3> <?=$tipos["nome"]?> </h3>
			<p> <?=$tipos["descricao"]?> </p>
			<a href="../index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>