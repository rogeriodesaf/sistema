<?php 

session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/categorias.php";



$data = date("Y-m-d");
$idusuario = $_SESSION['iduser'];
$camara = $_POST['camara'];


$obj = new camaras();



$dados=array(
	$idusuario,
	$camara,
	$data

);

echo $obj->adicionarCamara($dados);

 ?>