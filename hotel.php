<?php
require 'pesquisarhotel.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html LANG="pt-br" DIR="ltr">
<head>
	<meta HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<title>Rama Viagens</title>
	<meta name="CREATED" content="0;0">
	<meta name="CHANGED" content="20121026;23400000">
        <link rel="stylesheet" href="css/rama.css" />
        <link rel="stylesheet" href="css/p_geral.css" />
        <link rel="shortcut icon" href="favicon.ico" />

<body text="#000000" class="body">
<div id="acessAdmin" style="position:absolute; top:20%; width:20px; height:150px; ">
	<a href="Admin/index.php"><img src="img/btao_rama.jpg" /></a>
</div>
<!--sua janela modal aqui -->
	<?php include 'promocoes/promo1.php'?>
<!--fim sua janela modal aqui -->		
<div id="bar_h">
<?php
    include 'bar_h.php';
?>
</div>

<div id="center">
    <div id="show_passagens">
        <table class="table_hotel" width="100%" align="center">
            <tr class="tr_hotel" id="td_passagem" align="center" height="20px">
                <td>Destino</td>                
                <td>Endereço</td>
                <td>Entrada</td>
                <td>Saida</td>
                <td>Valor</td>
                <td>Comprar</td>
            </tr>
            <?php while($hotel = mysql_fetch_array($sql)) {?>
            <tr class="td_hotel" align="center">
                <td><?php echo $hotel['destinoh']; ?></td>
                <td><?php echo $hotel['Endereco']; ?></td>
                <td><?php echo "".$hotel['entradah']."<br />";?></td>
                <td><?php echo $hotel['saidah']; ?></td>
                <td><?php echo $hotel['valor'].",00"; ?></td>
            	<td><a href="comprar.php?hotel=<?php echo $hotel['id']; ?>" title="Clique para comprar">Comprar</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
</div>
<div id="info_left">
	<?php include 'PostSlide/PostsSlideOuts.php'; ?>
</div>
</body>
</html>
