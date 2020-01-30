<?php

require_once "../../classes/conexao.php";
require_once "../../classes/processos2.php";

$obj = new processos2();

$dados = array(
    $_POST['idprocesso2U'],
    $_POST['nrofa2U'],
    $_POST['consumidor2U'],
    $_POST['fornecedor2U'],
    $_POST['relator2U'],
    limpar_texto($_POST['valor2U']),
    limpar_texto($_POST['valor_segU']),
    $_POST['data2U'],
    $_POST['ano2U'],
    $_POST['recurso2U'],

);

echo $obj->atualizar($dados);

function limpar_texto($str)
{
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $str); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banc
}