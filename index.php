<!DOCTYPE html>
<html LANG="pt-br" DIR="ltr">
<head>
	<meta HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<title>Rama Viagens</title>
	<meta name="CREATED" content="0;0">
	<meta name="CHANGED" content="20121026;23400000">
    	<link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="css/rama.css" />
        <link rel="stylesheet" href="css/p_geral.css" />        
        <link rel="stylesheet" type="text/css" href="shadowbox-3.0.3/shadowbox.css" />
        <script src="jsp/jquery-1.8.2.min.js" type="text/javascript"></script>
	    <script type="text/javascript" src="shadowbox-3.0.3/shadowbox.js"></script>
</head>

<body text="#000000" class="body">
<div id="paginaIndex">
<!--INSERÇAO DA BARRA HORIZONTAL DE NAVEGAÇÃO -->
<div id="bar_h">
<?php
    include 'bar_h.php';
?>
</div>
<!--FIM DA INSERÇAO /BARRA HORIZONTAL DE NAVEGAÇÃO -->
<!--INICIO DO CENTRO DA PAGINA -->
<div id="center">
  <div id="p_principal">
            <?php include 'painel.php';?>     
                <!--segundo block de formulario-->
            <?php include 'form2.php'; ?>
                    <!--terceiro block de formulario-->
            <?php include 'form3.php'; ?>  
  </div> 
</div>
    <div id="info_left" style=" display:block; position: absolute; top: 156px; background-color: red; width: 150px; height: 410px;">
    <p>teste</p>
    <p>vamos testar </p>
    <p>testar </p>
    <p>testar</p>
    <p>testar</p>
    <p>testar</p>
    </div>
<!--Final de painel-->
<!--final DO CENTRO DA PAGINA -->

<!--<style>
#info_left{ float:right;  background-color:red;}
</style>
<div id="info_left">
</div> -->

   	<script type="text/javascript" src="jsp/scripts.js"></script>
<script type="text/javascript" src="jsp/jquery.validate.js"></script>
</div>
</body>
</html>