<?php require_once("dados.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<style type="text/css">
@import url("format.css");
</style>
</head>

<body>
<table width="595" height="81" border="1" align="center">
  <tbody>
    <tr>
      <th width="470" scope="col"><div id="text">
        <form id="form1" name="form1" method="post">
          <table width="400" border="1" align="center">
            <tbody>
              <tr>
                <th scope="col">locador
                  <select name="locador" id="locador">
		  <option>Selecione Locador</option>
		  <?php
		  while($linha=mysqli_fetch_array($consulta))
		  {
			  echo'<option id=op>'.$linha['nome'].'</option>';
		  }?>
        
      </select></th>
                <th scope="col"><input type="submit" name="submit" id="submit" value="Buscar Imóveis"></th>
              </tr>
            </tbody>
          </table>
        </form>
      </div></th>
    </tr>
  </tbody>
</table>
</body>
</html>