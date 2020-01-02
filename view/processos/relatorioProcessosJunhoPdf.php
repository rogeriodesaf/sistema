<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, camara, relator, valor, data, ano, recurso FROM fornecedores  WHERE MONTH(data) = '6' and year(data) = '2020'";
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
        <td>Relator</td>
        <td>Valor</td>
        <td>Data</td>
        <td>Ano</td>
        <td>Recurso</td>




    </tr>

    <?php while ($mostrar = mysqli_fetch_row($result)): ?>

    <tr>



        <td><?php echo $mostrar[1]; ?></td>
        <td><?php echo $mostrar[2]; ?></td>
        <td><?php echo $mostrar[3]; ?></td>
        <td><?php echo $mostrar[4]; ?></td>
        <td><?php echo $mostrar[6]; ?></td>
        <td><?php echo $mostrar[6]; ?></td>
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

$total2Grau = "SELECT sum(valor) as valor from fornecedores where camara='1' and MONTH(data) = ' 6' and year(data) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor'];
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
$total2Grau = "SELECT sum(valor) as valor from fornecedores where camara='2' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores no mês.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql2 = "SELECT * FROM fornecedores WHERE MONTH(data) = ' 6' and year(data) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor = $array2['id_fornecedor'];
    $valor = $valor + $array2['valor'];
    ?>




            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>


</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores anual.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql2 = "SELECT * FROM fornecedores WHERE YEAR(data) = '2020' ";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor = $array2['id_fornecedor'];
    $valor = $valor + $array2['valor'];
    ?>




            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total por Relator</label></caption>
    <tr>
        <td>--</td>
        <td>Total de Processos por relator</td>
        <td>Valor por Relator</td>



    </tr>
    <tr>

        <td>Demetrius</td>
        <td>
            <?php
$sql6 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Demetrius' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql6);
$Qtd = 0;

while ($array4 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array4['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>








        </td>
        <td>
            <?php
$sql6 = "SELECT sum(valor) as valor from fornecedores where relator='Demetrius' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql6);
$valor = 0;

while ($array4 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array4['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>




    <tr>

        <td>Edson</td>
        <td>
            <?php
$sql7 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Edson' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql7);
$Qtd = 0;

while ($array6 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array6['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>





        </td>
        <td>
            <?php
$sql6 = "SELECT sum(valor) as valor from fornecedores where relator='Edson' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql6);
$valor = 0;

while ($array4 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array4['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>
    <tr>

        <td>Filipe</td>
        <td>
            <?php
$sql9 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Filipe' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql9);
$Qtd = 0;

while ($array9 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array9['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>



        </td>
        <td>
            <?php
$sql6 = "SELECT sum(valor) as valor from fornecedores where relator='Filipe' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql6);
$valor = 0;

while ($array4 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array4['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>
    <tr>


        <td>Emannuel</td>
        <td>
            <?php
$sql24 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Emannuel' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql24);
$Qtd = 0;

while ($array24 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array24['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>

        </td>
        <td>
            <?php
$sql48 = "SELECT sum(valor) as valor from fornecedores where relator='Emannuel' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql48);
$valor = 0;

while ($array4 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array4['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


    </tr>
    <tr>

        <td>Cyro</td>
        <td>
            <?php
$sql40 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Cyro' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql40);
$Qtd = 0;

while ($array40 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array40['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>

            <?php
$sql44 = "SELECT sum(valor) as valor from fornecedores where relator='Cyro' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql44);
$valor = 0;

while ($array44 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array44['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


    </tr>
    <tr>

        <td>Juliana</td>
        <td>
            <?php
$sql42 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Juliana' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql42);
$Qtd = 0;

while ($array42 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array42['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql44 = "SELECT sum(valor) as valor from fornecedores where relator='Juliana'  and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql44);
$valor = 0;

while ($array44 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array44['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


    </tr>
    <tr>

        <td>Sérgio</td>
        <td>
            <?php
$sql44 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Sérgio' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql44);
$Qtd = 0;

while ($array44 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array44['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql46 = "SELECT sum(valor) as valor from fornecedores where relator='Sérgio' and MONTH(data) = ' 6' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql46);
$valor = 0;

while ($array44 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array44['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


    </tr>

</table>
<br><br>
<p> Núcleo de Tecnologia da Infomação PROCON/PB</p>