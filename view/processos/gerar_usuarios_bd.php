<?php
$cont = 2;
while ($cont < 10000) {
    echo "SELECT id_fornecedor, nrofa, consumidor, fornecedor, relator, valor,valor_2, data, ano, recurso  FROM fornecedores  WHERE MONTH(data) = '1' and Year(data) = '2020' ";

    $cont = $cont + 1;
}