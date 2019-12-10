<?php require_once("dados.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<style type="text/css">
@import url("format.css");
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body id="text">
<div>
  <form id="form1" name="form1" method="post" action="pag2.php">
	  <table width="596" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="3"><input type="button" name="button3" id="button3" value="+">
        NOVO CONTRATO</td>
    </tr>
    <tr>
      <td width="95">&nbsp;</td>
      <td width="491" id="table"><select name="locador" id="locador">
		  <option>Selecione Locador</option>
		  <?php
		  while($linha=mysqli_fetch_array($consulta))
		  {
			  echo'<option id=op>'.$linha['nome'].'</option>';
		  }?>
        
      </select>
        <input type="submit" name="button" id="button" value="Buscar Contratos"></td>
     
    </tr>
   
  </tbody>
</table>

	<div align="right">
	  
	      <a href="telacadLocador.php">+ NOVO LOCADOR</a>
	</div>


</body>
</html>