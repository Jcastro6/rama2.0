<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/rama.css" />
<link rel="stylesheet" href="./css/p_geral.css" />
<link rel="shortcut icon" href="favicon.ico" />
<title>Rama Viagens</title>
</head>

<body text="#000000" class="body">
<div id="bar_h">
<?php include 'bar_h.php';?>
</div>

<div id="center">
	<div id="contato">
    <form action="enviar.php" method="POST">		  
		<table class="t_contato" width="42%" border="1" align="" cellspacing="0" cellpadding="0">
		  <tr> 
			<td>
			<h3><label>Fale conosco</label></h3>
			<p>Deixe sua mensagem aqui, ou escolha um de nossos canais de atendimento ao lado.</p></td>
		  </tr>
		  <tr> 
			<td><label>Nome:</label><input type="text" size="30" name="nome" value=""></td>
		  </tr>
		  <tr> 
			<td><label>E-mail:</label><input type="text" size="30" name="email" value=""></td>
		  </tr>
		  <tr> 
			<td><label>Telefone/ Celular:</label><input type="text" size="30" name="fone" value=""></td>
		  </tr>
		  <tr> 
			<td><label>Assunto:</label><input type="text" size="30" name="assunto" value=""></td>
		  </tr>
		  <tr> 
			<td><label>Mensagem:</label><br>
			  <textarea cols="58" rows="7" name="mensagem"></textarea> 
			</td>
		  </tr>
		  <tr> 
			<td> <input id="submit_contato" name="submit" type="submit" value=" Enviar "> 
			  &nbsp; <input id="reset_contato" name="reset" type="reset" value=" Limpar "></td>
		  </tr>
		</table>                                
	</form>
</div>
<div id="redes_sociais">
	<p> ............R a m a Viagens nas redes!</p><br />
     <a href="https://www.facebook.com/RamaViagensTurismo" target="blank_" alt="Rama"><img src="img/logo_facebook.jpg" hspace="15" /></a>
</div> 
</div>
<div id="info_left">
	<?php include 'PostSlide/PostsSlideOuts.php'; ?>
</div>
</body>
</html>