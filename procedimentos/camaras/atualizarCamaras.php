<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/camaras.php";



$obj = new camaras();



$dados=array(
	$_POST['idcamara'],
	$_POST['camaraU']

);

echo $obj->atualizarCamara($dados);

 ?>