<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/processos.php";

$id = $_POST['idfornecedor'];

$obj = new processos();
echo $obj->excluir($id);

?>