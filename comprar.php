<?php 
include 'mysqlconecta.php';
$sql=mysql_query("SELECT * FROM hotel WHERE id LIKE '$_GET[hotel]'");

echo "SELECT * FROM hotel WHERE id LIKE '$_GET[hotel]'";
//$hotel =  $_GET["hotel"];
//echo  $hotel;

$destinoh = (isset($_GET['destinoh'])) ? addslashes($_GET['destinoh']) : '';
$entradah = (isset($_POST['entradah'])) ? addslashes($_POST['entradah']) : '';
$saidah   = (isset($_POST['saidah']))   ? addslashes($_POST['saidah'])   : '';
$quant    = (isset($_POST['quant']))    ? addslashes($_POST['quant'])    : '';
$adultoh  = (isset($_POST['adultoh']))  ? addslashes($_POST['adultoh'])  : '';
$criancah = (isset($_POST['criancah'])) ? addslashes($_POST['criancah']) : '';

echo $destinoh;

?>