<?php        

require "imoveis.php";
if(isset($_GET["i"])){
    header("location: index.php");
    die;
}
$indice = $_GET["i"];
$t = $tipos[$indice];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Tipos de Imoveis</title>
	<link rel="stylesheet" type="text/css" href="funcionarios.css">
</head>
<body>
    <header>
        <h1>Listagem dos imoveis</h1>
    </header>
	<div class="container-del">
		
		
		<div class="cad">
			<img src="<?= $t["foto"]?>" alt="<?= $t["nome"]?>">
			<h3><?=$t["nome"]?></h3>
			<h4><?=$t["cidade"]?></h4>
            <h5><?=$t["estado"]?></h5>
            <h6><?=$t["quartos"]?></h6>
			<p>valor: R$ <?=$t["valor"]?> </p>
			<p><?=$t["complemento"]?> </p>
			<a href="index.php" class="link">Voltar</a>
		</div>
			
		
	</div>
</body>
</html>