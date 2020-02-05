<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, relator, valor, valor_2, data, ano, recurso FROM fornecedores  WHERE MONTH(data) = '9' and year(data) = '2020'";
$result = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">

<img src="../../img/images.png" width="200" height="120">
<br>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Processos</label></caption>
    <tr style="background-color: SlateGrey;">
        <td>Nro FA</td>
        <td>Consumidor</td>
        <td>Fornecedor</td>
        <td>Relator</td>
        <td>Valor do 1º Grau</td>
        <td>Valor do 2º Grau</td>
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
        <td> R$<?php echo number_format($mostrar[5], 3, ',', '.'); ?></td>
        <td>R$<?php echo number_format($mostrar[6], 3, ',', '.'); ?></td>
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

$total3Grau = "SELECT sum(valor) as valor from fornecedores where  MONTH(data) = '9' and year(data) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
$buscarDb = mysqli_query($conexao, $total3Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 2ª Grau.</td>
    </tr>

    <tr>
        <td>
            <?php
$total3Grau = "SELECT sum(valor_2) as valor_2 from fornecedores where  MONTH(data) = '9' and year(data) = '2020'";
$buscarDb = mysqli_query($conexao, $total3Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor_2'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>


</table>

<!-- <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores no mês.</td>
    </tr>

    <tr>
        <td>
            <//?php

$sql3 = "SELECT sum(valor+valor_2) as soma   FROM fornecedores WHERE MONTH(data) = '3' and year(data) = '2020'";
$buscar3 = mysqli_query($conexao, $sql3);
$valor = 0;
while ($array3 = mysqli_fetch_array($buscar3)) {

    $valor = $valor + $array3['soma'];
    ?>




            <//?php }?>
            R$ <//?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


</table> -->
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores anual.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql3 = "SELECT sum(valor_2) as soma FROM fornecedores WHERE YEAR(data) = '2020' ";
$buscar3 = mysqli_query($conexao, $sql3);
$valor = 0;
while ($array3 = mysqli_fetch_array($buscar3)) {

    $valor = $valor + $array3['soma'];
    ?>




            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total por Relator</label></caption>
    <tr style="background-color: SlateGrey;">
        <td>--</td>
        <td>Total de Processos por relator</td>
        <td>Valor por Relator</td>



    </tr>
    <tr>

        <td>Demetrius</td>
        <td>
            <?php
$sql6 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Demetrius' and MONTH(data) = '9'and year(data) = '2020'";
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
$sql5 = "SELECT sum(valor_2) as valor_2 from fornecedores where relator='Demetrius' and MONTH(data) = '9'and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor_2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

        </td>



    </tr>

    <tr>

        <td>Filipe</td>
        <td>
            <?php
$sql9 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Filipe' and MONTH(data) = '9'and year(data) = '2020'";
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
$sql5 = "SELECT sum(valor_2) as valor_2 from fornecedores where relator='Filipe' and MONTH(data) = '9'and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor_2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>

    <tr>

        <td>Cyro</td>
        <td>
            <?php
$sql10 = "SELECT  relator, COUNT(relator) as Qtd from fornecedores where relator='Cyro' and MONTH(data) = '9'and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql10);
$Qtd = 0;

while ($array10 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array10['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>

            <?php
$sql11 = "SELECT sum(valor_2) as valor_2 from fornecedores where relator='Cyro' and MONTH(data) = '9'and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql11);
$valor = 0;

while ($array11 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array11['valor_2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>


    </tr>

    <tr>

        <td>Fábio</td>
        <td>
            <?php
$sql14 = "SELECT  relator, COUNT(relator) as Qtd from fornecedores where relator='Fábio' and MONTH(data) = '9'and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql14);
$Qtd = 0;

while ($array14 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array14['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql16 = "SELECT sum(valor_2) as valor_2 from fornecedores where relator='Fábio' and MONTH(data) = '9'and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql16);
$valor = 0;

while ($array13 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array13['valor_2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>


        </td>


    </tr>


</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total de Processos no mês.</label></caption>
    <tr>
        <td>


            <?php
$sql21 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where  MONTH(data) = '9' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql21);
$Qtd = 0;

while ($array21 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array21['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?> processo(s).


        </td>



</table>
</tr>
<footer class="page-footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Núcleo de Tecnologia da Informação PROCON/PB
        <p>Tel:(83)3214-1713</p>



    </div>
    <!-- Copyright -->

</footer>