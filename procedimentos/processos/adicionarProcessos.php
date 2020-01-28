<?php

session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/processos.php";

$idusuario = $_SESSION['iduser'];

$obj = new processos();

$dados = array(
    $idusuario,
    $_POST['nrofa'],
    $_POST['consumidor'],
    $_POST['fornecedor'],

    $_POST['relator'],
    limpar_texto($_POST['valor']),
    limpar_texto($_POST['valor_2']),
    $_POST['data'],
    $_POST['ano'],
    $_POST['recurso'],

);

echo $obj->adicionar($dados);

function limpar_texto($str)
{
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $str); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banco

}