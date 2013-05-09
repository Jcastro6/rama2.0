<?php
      session_start();
      if(isset($_GET['acao']) && $_GET['acao'] == 'sair'):
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            session_destroy();
      endif;
      
         if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])):
		 header("location:index.php");
		 echo "
		 	<script language=\"javascript\">
				alert(\"Acesso Negado!\");
			</script>
		 ";
      endif;
?>