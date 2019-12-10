<?php require_once("conec.php"); ?>
<?php
#Selecionar locatários

$sql="Select nome from locador";

$consulta=mysqli_query($con,$sql);




/*
while($linha=mysqli_fetch_array($consulta1))
{
	echo'<p>'.$linha['nome'].'</p>';
	
}
*/
?>
