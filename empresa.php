<!DOCTYPE html>
<html LANG="pt-br" DIR="ltr">
<head>
	<meta HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<title>Rama Viagens</title>
	<meta name="CREATED" content="0;0">
	<meta name="CHANGED" content="20121026;23400000">
        <link rel="stylesheet" href="css/rama.css" />
        <link rel="stylesheet" href="css/p_geral.css" />
        <link rel="shortcut icon" href="favicon.ico" />
        
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <script src="jsp/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="jsp/scripts.js"></script>
		<script type="text/javascript" src="jsp/jquery.validate.js"></script>
        
<body text="#000000" class="body">
<div id="acessAdmin" style="position:absolute; top:20%; width:20px; height:150px; ">
	<a href="Admin/index.php"><img src="img/btao_rama.jpg" /></a>
</div>
<!--sua janela modal aqui -->
<?php include 'promocoes/promo1.php'?>
<!--fim sua janela modal aqui -->
<div id="bar_h">
<?php   include 'bar_h.php'; ?>
</div>
<div id="center">
    <div id="show_passagens">
        <table width="100%" align="center">
            <tr id="td_passagem" align="center">
                <td><h2>Quem somos</h2></td>
            </tr>
        </table>
        <div id="text_rama">
            <p class="text_rama">
                RAMA Viagens e Turismo ltda é uma empresa familiar que preza pelo conforto e bem estar de seus clientes e funcionarios,
                    uma empresa com a finalidade de venda de passagens aereas e hospedagem em alguns dos melhores hoteis do Mundo. Buscamos sempre oferecer o melhor 
                    desde nossa cede que fica em Angola até aqui no Brazil, sem deixar nenhum de nossos clientes sem os devidos cuidados e tratamentos que todos procuram.
                    Somos sua agencia de viagens online e concreta, somos RAMA VIAGENS.
                
            </p>
            <p class="text_rama">&nbsp;</p>
            <div id="img_logo"><img src="img/logo.png" width="175" height="100" /></div>
        </div>
    <div id="show_passagens2">
        <table width="100%" align="left">
            <tr id="td_passagem" align="center">
                <td><h2>Galeria</h2></td>
            </tr>
        </table>
    </div>
  </div>
</div>
<div id="info_left">
	<?php include 'PostSlide/PostsSlideOuts.php'; ?>
</div>
</body>
</html>
