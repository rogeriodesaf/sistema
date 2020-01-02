<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, camara, relator, valor, data, ano, recurso  FROM fornecedores  WHERE MONTH(data) = '1' and Year(data) = '2020'";
$result = mysqli_query($conexao, $sql);

?>


<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Processos</label></caption>
    <tr style="background-color: SlateGrey;">
        <td>Nro FA</td>
        <td>Consumidor</td>
        <td>Fornecedor</td>
        <td>Câmara</td>
        <td>Relator</td>
        <td>Valor</td>
        <td>Data</td>
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
        <td><?php echo $mostrar[5]; ?></td>
        <td><?php echo $mostrar[6]; ?></td>
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
//código php para somar os valores da primeira sessão se o mês for Janeiro.

$total2Grau = "SELECT sum(valor) as valor from fornecedores where camara='1' and MONTH(data) = '1' and Year(data) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
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
//código php para somar os valores da segunda sessão se o mês for Janeiro.
$total2Grau = "SELECT sum(valor) as valor from fornecedores where camara='2' and MONTH(data) = '1 ' and Year(data) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor = $valor + $array3['valor'];
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

$sql2 = "SELECT * FROM fornecedores WHERE MONTH(data) = '1' and Year(data) = '2020'";
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
            <td style="background-color: SlateGrey;">Total dos valores.</td>
        </tr>

        <tr>
            <td>
                <?php
//código php para somar o total dos valores .

$sql2 = "SELECT * FROM fornecedores";
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




        </div>

    </table>
    <td style="align:center;">
        <a href="../procedimentos/pdf/criarRelatorioJaneiroPdf.php?idprocesso=<" class="btn btn-danger btn-sm">
            Imprimir <span class="glyphicon glyphicon-print"></span>
        </a>
    </td>
    <br>
    <br>
    </div>


    <table style="text-align: center;
     height: 100px ;">

        <tr>
            <td style=" text-decoration:none color:#FFF;"><a href="relatores1.php">Total
                    <!--target="_blank-->
                    de
                    valores por relator no mês de janeiro.</a></td>
        </tr>




    </table>