<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor,  relator, valor,valor_2, data, ano, recurso FROM fornecedores  WHERE MONTH(data) = '4' and year(data) = '2020'";
$result = mysqli_query($conexao, $sql);

?>


<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Processos</label></caption>
    <tr style="background-color: SlateGrey;">
        <td>Nro FA</td>
        <td>Consumidor</td>
        <td>Fornecedor</td>
        <td>relator</td>
        <td>valor do 1ª Grau</td>
        <td>valor do 2ª Grau</td>
        <td>data</td>
        <td>Ano</td>
        <td>Recurso</td>



        <td>Adicionar</td>
        <td>Excluir</td>

    </tr>

    <?php

$total = 0;
?>

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





        <td>
            <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalProcessosUpdate"
                onclick="adicionarDado('<?php echo $mostrar[0]; ?>')">
                <span class="glyphicon glyphicon-pencil"></span>
            </span>
        </td>
        <td>
            <span class="btn btn-danger btn-xs" onclick="eliminar('<?php echo $mostrar[0]; ?>')">
                <span class="glyphicon glyphicon-remove"></span>
            </span>
        </td>

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

$total2Grau = "SELECT sum(valor) as valor from fornecedores where  MONTH(data) = '4' and year(data) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
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
$total2Grau = "SELECT sum(valor_2) as valor_2 from fornecedores where  MONTH(data) = '4' and year(data) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0.00;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor_2'];
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

$sql2 = "SELECT SUM(valor + valor_2) as soma FROM fornecedores WHERE MONTH(data) = '4' and year(data) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {

    $valor = $valor + $array2['soma'];
    ?>




            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores no ano de 2020.</td>
    </tr>

    <tr>
        <td>
            <?php

$sql2 = "SELECT sum(valor + valor_2) as soma  FROM fornecedores WHERE YEAR(data) = '2020' ";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {

    $valor = $valor + $array2['soma'];
    ?>




            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


</table>




<td style="align:center;">
    <a href="../procedimentos/pdf/criarRelatorioAbrilPdf.php?idprocesso=<" class="btn btn-danger btn-sm">
        Imprimir <span class="glyphicon glyphicon-print"></span>
    </a>
</td>



</div>

<table style="text-align: center;
     height: 100px ;">

    <tr>
        <td style=" text-decoration:none color:#FFF;"><a href="relatores4.php">Total
                <!--target="_blank" -->
                de
                valores por relator no mês de Abril.</a></td>
    </tr>




</table>