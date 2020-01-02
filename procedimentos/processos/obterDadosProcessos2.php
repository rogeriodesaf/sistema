<?php

require_once "../../classes/conexao.php";
require_once "../../classes/processos.php";

$obj = new processos2();

echo json_encode($obj->obterDados($_POST['idprocesso2'])); //a função obterDados está na url ../classes/processos na linha 24. Via método JSON os dados estão sendo enviados para view/marco.php no método adiconarDados da linha 109