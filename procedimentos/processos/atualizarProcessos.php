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
    limpar_texto($_POST['valorU']),
    limpar_texto($_POST['valor_2U']),
    $_POST['dataU'],
    $_POST['anoU'],
    $_POST['recursoU'],

);

echo $obj->atualizar($dados);

function limpar_texto($str)
{
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $str); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banc
}