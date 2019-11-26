<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/camaras.php";

$id = $_POST['idcamara'];

$obj = new camaras();
echo $obj->excluirCamara($id);

?>