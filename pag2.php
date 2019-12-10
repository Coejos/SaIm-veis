<?php require_once("conec.php"); ?>
<?php include_once('pag1.php'); ?>

	  <?php
       $nome_locador=$_POST['locador'];

       $sql_locatario="select nome from locatarios where id_locador=(select id from locador where nome='$nome_locador')";
       $consulta1=mysqli_query($con,$sql_locatario);
	  ?>
    
		  
      <?php
      
      while($li2=mysqli_fetch_array($consulta1))
	  {
		 echo('<p align="center">'.$li2['nome'].'</p>');
			
	  }
	       
	 ?>
      