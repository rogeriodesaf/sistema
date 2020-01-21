<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_fornecedor2, nrofa2, consumidor2, fornecedor2,  relator2, valor2, valor_seg,data2, ano2, recurso2 FROM fornecedores2 WHERE MONTH(data2) = '2' and year(data2) = '2020'";
$result = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">

<img src="../../img/marca_procon.jpg" width="200" height="120">
<br>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Processos</label></caption>
    <tr>
        <td>Nro FA</td>
        <td>Consumidor</td>
        <td>Fornecedor</td>
        <td>Sessão</td>
        <td>relator</td>
        <td>valor</td>
        <td>data</td>
        <td>Ano</td>
        <td>Recurso</td>




    </tr>

    <?php while ($mostrar = mysqli_fetch_row($result)): ?>

    <tr>



        <td><?php echo $mostrar[1]; ?></td>
        <td><?php echo $mostrar[2]; ?></td>
        <td><?php echo $mostrar[3]; ?></td>
        <td><?php echo $mostrar[4]; ?></td>
        <td> R$<?php echo number_format($mostrar[5], 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($mostrar[6], 2, ',', '.'); ?></td>
        <td><?php echo date("d/m/Y", strtotime($mostrar[7])) ?></td>
        <td><?php echo $mostrar[8]; ?></td>
        <td><?php echo $mostrar[9]; ?></td>






    </tr>


    <?php endwhile;?>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 1ª Grau.</td>
    </tr>

    <tr>
        <td>
            <?php

$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 MONTH(data2) = '3' and year(data2) = '2020'"; //SELECT sum(valor2) as valor2 from fornecedores2 where camara2='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array2 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array2['valor2'];
    ?>

            <?php }?>
            R$ <?php echo $valor ?>

    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 2ª Grau.</td>
    </tr>

    <tr>
        <td>
            <?php
$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 where  MONTH(data2) = '3' and year(data2) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2 = 0;

while ($array2 = mysqli_fetch_array($buscarDb)) {
    $valor2 = $valor2 + $array2['valor2'];
    ?>

            <?php }?>
            R$ <?php echo $valor2 ?>
        </td>
    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valor2es no mês.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql2 = "SELECT * FROM fornecedores2 WHERE MONTH(data2) = '3' and year(data2) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor2 = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor2 = $array2['id_fornecedor2'];
    $valor2 = $valor2 + $array2['valor2'];
    ?>




            <?php }?>
            R$ <?php echo $valor2 ?>

    </tr>


</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores anual.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql2 = "SELECT * FROM fornecedores2 WHERE YEAR(data2) = '2020' ";
$buscar2 = mysqli_query($conexao, $sql2);
$valor2 = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor2 = $array2['id_fornecedor2'];
    $valor2 = $valor2 + $array2['valor2'];
    ?>




            <?php }?>
            R$ <?php echo $valor2 ?>

    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 1ª Grau.</td>
    </tr>

    <tr>
        <td>
            <?php
//código php para somar os valores da primeira sessão se o mês for Janeiro.

$total2Grau = "SELECT sum(valor2) as valor_seg from fornecedores2 where  MONTH(data2) = '3' and Year(data2) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor_seg'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>



</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 2ª Grau.</td>
    </tr>

    <tr>
        <td>

            <?php
//código php para somar os valores da segunda sessão se o mês for Janeiro.
$total2Grau = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where  MONTH(data2) = '3 ' and Year(data2) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor_seg'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

        </td>
    </tr>

    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <tr>
            <td style="background-color: SlateGrey;">Total dos valores no mês.</td>
        </tr>

        <tr>
            <td>
                <?php

$sql2 = "SELECT SUM(valor2 + valor_seg ) as soma FROM fornecedores2 WHERE MONTH(data2) = '3' and Year(data2) = '2020'";
$busca = mysqli_query($conexao, $sql2);
$valor = 0;

while ($array4 = mysqli_fetch_array($busca)) {
    $valor = $valor + $array4['soma'];

    ?>
                <?php }?>
                R$ <?php echo number_format($valor, 2, ',', '.'); ?>






            </td>

        </tr>

    </table>

    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <tr>
            <td style="background-color: SlateGrey;">Total dos valores no ano de 2020.</td>
        </tr>

        <tr>
            <td>
                <?php
//código php para somar o total dos valores .

$sql2 = "SELECT SUM(valor2 + valor_seg ) as soma FROM fornecedores2 WHERE  Year(data2) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {

    $valor = $valor + $array2['soma'];
    ?>




                <?php }?>
                R$ <?php echo number_format($valor, 2, ',', '.'); ?>
            </td>
        </tr>
    </table>