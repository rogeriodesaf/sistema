<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";



$obj = new fornecedores();



$dados=array(
	$_POST['idfornecedorU'],
	$_POST['nrofaU'],
	$_POST['consumidorU'],
	$_POST['fornecedorU'],
	$_POST['camaraU'],
	$_POST['relatorU'],
	$_POST['valorU'],
	$_POST['dataU'],
	$_POST['anoU']
	

);

echo $obj->atualizar($dados);

 ?>