<?php
$login = $_POST['login'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = MD5($_POST['senha']);
require("../mysqlconecta.php");
$db = mysql_select_db('ramaTurismo');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
        }else{
            if($logarray == $login){ 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='cadastro.html';</script>";
                die(mysql_error("mensagem")); 
            }else{
                $query = "INSERT INTO usuarios (login,nome,sobrenome,password) VALUES ('$login','$nome','$sobrenome','$senha')";
                $insert = mysql_query($query) or die(mysql_error());
				
				
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='painel.php'</script>";
                }else{
					echo "cheguei";
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                }
            }
        }
?>

