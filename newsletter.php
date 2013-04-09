<?php

include("mysqlconecta.php");
mysql_connect($server,$usuario,$password);
mysql_select_db($dbname);

$email = $_POST['newsletter'];
if(empty($email)){
	$retorno = '<span>Informe seu e-mail</span>';
}else{
	$sql = "INSERT INTO newsletter_table VALUES(NULL,'$email')";
}

if(mysql_query($sql)){
echo "<script>alert('Seu email foi cadastrado com sucesso!');location='../rama2.0/index.php';</script>";
}else{
echo "<script>alert('Falha ao efetuar cadastro!');location='../rama2.0/index.php';</script>";
}

?>