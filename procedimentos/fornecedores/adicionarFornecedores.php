<?php 

session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";




$idusuario = $_SESSION['iduser'];



$obj = new fornecedores();



$dados=array(
	$idusuario,
	$_POST['nrofa'],
	$_POST['consumidor'],
	$_POST['fornecedor'],
	$_POST['camara'],
	$_POST['relator'],
	$_POST['valor'],
	$_POST['data'],
	$_POST['ano']

);

echo $obj->adicionar($dados);

 ?>