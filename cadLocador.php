<?php require_once("conec.php"); ?>
<?php include_once('telacadLocador.php'); ?>
<?php

$nomeLocador=$_POST['nomeLocador'];


$sql_cadLocador="insert into locador (nome) values('$nomeLocador')";

//$cadLocador=mysqli_query($con,$sql_cadLocador);

if(mysqli_query($con,$sql_cadLocador))
{
	echo($nomeLocador." Adicionado com sucesso ");
} else{
	echo(mysqli_error("Erro na inserção"));
}

?>