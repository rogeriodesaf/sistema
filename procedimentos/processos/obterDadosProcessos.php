<?php 

require_once "../../classes/conexao.php";
require_once "../../classes/processos.php";


$obj = new processos();

echo json_encode($obj->obterDados($_POST['idprocesso']));


 ?>

