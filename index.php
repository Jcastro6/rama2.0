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
        <script src="jsp/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>
<body text="#000000" class="body">
<div id="acessAdmin" style="position:absolute; top:20%; width:20px; height:150px; ">
	<a href="Admin/index.php"><img src="img/btao_rama.jpg" /></a>
</div>
<!--sua janela modal aqui -->
	<?php include 'promocoes/promo1.php'?>
<!--fim sua janela modal aqui -->
<div id="paginaIndex">
<!--INSERÇAO DA BARRA HORIZONTAL DE NAVEGAÇÃO -->
<div id="bar_h">
	<?php include 'bar_h.php'; ?>
</div>

    <!--FIM DA INSERÇAO /BARRA HORIZONTAL DE NAVEGAÇÃO -->
    <!--INICIO DO CENTRO DA PAGINA -->

    <div id="center">
      <div id="p_principal">
                <?php  include 'painel.php';?>     
                    
                <?php include 'form2.php'; ?>
                        
                <?php include 'form3.php';  ?>  
      </div>
    </div>
<!--Final de painel-->
<!--final DO CENTRO DA PAGINA -->
<script type="text/javascript" src="jsp/scripts.js"></script>
<script type="text/javascript" src="jsp/jquery.validate.js"></script>
</div>
<!--<div style=" z-index:5; position:absolute; float:right; left:58%; right:2%; top:2%; width:41%; height:95%; background-color:red;">
	<div style="width:448px; background-color:yellow">teste</div>
</div>-->
<div id="info_left" style="z-index:9">
	<?php include 'PostSlide/PostsSlideOuts.php'; ?>
</div>
</body>
</html>