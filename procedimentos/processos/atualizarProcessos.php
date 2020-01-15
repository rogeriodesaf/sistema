<?php

require_once "../../classes/conexao.php";
require_once "../../classes/processos.php";

$obj = new processos();

$dados = array(
    $_POST['idprocessoU'],
    $_POST['nrofaU'],
    $_POST['consumidorU'],
    $_POST['fornecedorU'],
    $_POST['relatorU'],
    $_POST['valorU'],
    $_POST['valor_2U'],
    $_POST['dataU'],
    $_POST['anoU'],
    $_POST['recursoU'],

);

echo $obj->atualizar($dados);