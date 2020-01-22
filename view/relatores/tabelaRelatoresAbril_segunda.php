<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

// $sql = "SELECT id_relator, nome, sobrenome, endereco, email, telefone, cpf FROM relatores";
// $result = mysqli_query($conexao, $sql);

?>











<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total por Relator</label></caption>
    <tr>
        <td>--</td>
        <td>Total de Processos por relator</td>
        <td>Valor por Relator</td>



    </tr>
    <tr>

        <td>Kaio</td>
        <td>
            <?php
$sql6 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Kaio' and MONTH(data2) = '4' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Kaio' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

        </td>



    </tr>






    </tr>

    <td>Emannuel</td>
    <td>
        <?php
$sql21 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Emannuel' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql21);
$Qtd = 0;

while ($array21 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array21['Qtd'];
    ?>

        <?php }?>
        <?php echo $Qtd ?>

    </td>
    <td>
        <?php
$sql18 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Emannuel' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql18);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

        <?php }?>
        R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </td>


    </tr>
    <tr>

        <!-- <td>Cyro</td>
        <td>
             <//?php
$sql10 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Cyro' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql10);
$Qtd = 0;

while ($array10 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array10['Qtd'];
    ?>

            <//?php }?>
            <//?php echo $Qtd ?>
        </td>
        <td>

            <//?php
$sql11 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Cyro' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql11);
while ($array11 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array11['valor2'];

    ?>

            <//?php }?>
            R$ <//?php echo $valor ?>
        </td>


    </tr> -->
    <tr>

        <td>Juliana</td>
        <td>
            <?php
$sql12 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Juliana' and MONTH(data2) = '4' and year(data2) = '2020'";
$Qtd = 0;

while ($array12 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array12['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql11 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Juliana' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql11);
$valor = 0;

while ($array13 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array13['valor2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>


    </tr>
    <tr>

        <td>Sérgio</td>
        <td>
            <?php
$sql14 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Sérgio'and MONTH(data2) = '4' and year(data2) = '2020'";
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
$sql16 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Sérgio'and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql16);
$valor = 0;

while ($array13 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array13['valor2'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>


        </td>


    </tr>
    <td>Fernando</td>
    <td>
        <?php
$sql21 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Fernando' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql21);
$Qtd = 0;

while ($array21 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array21['Qtd'];
    ?>

        <?php }?>
        <?php echo $Qtd ?>

    </td>
    <td>
        <?php
$sql18 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Fernando' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql18);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

        <?php }?>
        R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </td>


    </tr>

</table>

<td style="align:higth;">
    <a href="abril_segunda.php" class="btn btn-danger btn-sm">
        Voltar <span class="glyphicon glyphicon glyphicon-share-alt"></span>
    </a>
</td>