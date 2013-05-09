<?php
      if(isset($_POST['acao']) && $_POST['acao'] == 'login'):
         $login = trim($_POST['login']);
         $senha = trim($_POST['senha']);
         
         if(empty($login)):
            echo '<script>alert("Preencha o campo Username")</script>';
            echo '<script>history.back()</script>';
            exit;
         elseif(empty($senha)):
            echo '<script>alert("Preencha o campo Senha")</script>';
            echo '<script>history.back()</script>';
            exit;
         else:
            $login = (!get_magic_quotes_gpc()) ? addslashes($login) :  $login;
            $senha = (!get_magic_quotes_gpc()) ? addslashes($senha) :  $senha;
            $senha_cript = md5($senha);
            require("../mysqlconecta.php");
            
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND password = '$senha_cript'";
			$qr = mysql_query($sql) or die(mysql_error());

               if(mysql_num_rows($qr) == 0):
                  echo '<script>alert("Login e/ou Senha invalida")</script>';
                  echo '<script>history.back()</script>';
                  exit;
               else:
                  session_start();
                  $_SESSION['login'] = $login;
                  $_SESSION['senha'] = $senha;
                  header("location:painel.php");
               endif;
               
         endif;
                  
      endif;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administração - Rama</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
<script language="javascript">
	function valida()
	{
		if(document.login.login.value == ""){
			alert("O campo login não pode estar em branco");
			document.form.titulo.focus();
			return false;
		}
		
		if(document.login.senha.value == "")
		{
			alert("Digite a senha");
			document.form.conteudo.focus();
			return false;
		}
		
</script>
</head>
<body id="login-bg" onload="document.login.login.focus();"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="../img/logo.png" width="180" height="98" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    	<form action="" method="post" name="login">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text" name="login"  class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input  type="password" name="senha" value=""  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<input type="hidden" name="acao" value="login" />
		<tr>
			<th></th>
			<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>

		</table>
        </form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Forgot Password?</a>
	<a href="cadastro.html" class="cadastre-se">Cadastre-se</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>