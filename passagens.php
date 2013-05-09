<?php
require 'pesquisar_psgem.php';
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
</div>
<div id="center">
    <div id="show_passagens">
        <table  class="table_passagem" width="100%" align="center" border="1">
            <tr class="tr_passagem" align="center" height="20px">
                <td>Origem do voo</td>
                <td>Destino</td>
                <td>Data da ida</td>
                <td>Data da volta</td>
                <td>Adultos</td>
                <td>Crian&ccedil;as</td>
                <td>Hora partida</td>
                <td>Hora de chegada</td>
                <td>Escala</td>
                <td>Classe</td>
                <td>Valor da passagem</td>
                <td>Cia aerea</td>
                <td>Comprar</td>
            </tr>
            <?php while($dados = mysql_fetch_array($sql)) {?>
            <tr class="td_passagem" align="center">              
                <td><?php echo $dados['origem']; ?></td>
                <td><?php echo $dados['destino']; ?></td>
                <td><?php echo $dados['data1']; ?></td>
                <td><?php echo $dados['data2']; ?></td>
                <td><?php echo $dados['selectAdultosP']; ?></td>
                <td><?php echo $dados['selectCriancaP']; ?></td>
                <td><?php echo $dados['h_partida']; ?></td>
                <td><?php echo $dados['h_chegada']; ?></td>
                <td><?php echo $dados['escala']; ?></td>
                <td><?php echo $dados['c_bilhete'];?></td>
                <td><?php echo $dados['valor'].",00";?></td>
                <td><?php echo "".$dados['cia_aerea']."<br />";?></td>
                <td><a href="comprar.php?dados=<?php echo $dados['id']; ?>" title="Clique para comprar">Comprar</a></td>
            </tr>
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