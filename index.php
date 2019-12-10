<?php require_once ('conec.php') ?>


<?php 
	
	
	if ($con) {
		echo "<h1> Banco de Dados Conectado! </h1>";
	} else {
		echo "<h1> ERRO: Não foi possível Conectar! </h1>";
	}
?>