<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();
$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor,  relator, valor, valor_2,data, ano, recurso FROM fornecedores WHERE MONTH(data) = '2' and year(data) = '2020'";
$result = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">

<img src="../../img/marca_procon.jpg" width="200" height="120">
<br>
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
//código php para somar os valores da primeira sessão se o mês for Janeiro.

$total2Grau = "SELECT sum(valor) as valor from fornecedores where  MONTH(data) = '2' and year(data) = '2020'"; //SELECT sum(valor) as valor from fornecedores where camara='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {

    $valor = $valor + $array3['valor'];

    // public static function moeda($get_valor) {

    //     $source = array('.', ',');
    //     $replace = array('', '.');
    //     $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
    //     return $valor;
    ?>

            <?php }?>

            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

    </tr>


    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <tr>
            <td style="background-color: SlateGrey;">Total 2ª Grau.</td>
        </tr>

        <tr>
            <td>

                <?php
//código php para somar os valores da segunda sessão se o mês for Janeiro.
$total2Grau = "SELECT sum(valor) as valor from fornecedores where  MONTH(data) = '2 ' and Year(data) = '2020'";
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

$sql2 = "SELECT SUM(valor + valor_2 ) as soma FROM fornecedores WHERE MONTH(data) = '2' and Year(data) = '2020'";
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

$sql2 = "SELECT SUM(valor + valor_2 ) as soma FROM fornecedores WHERE  Year(data) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {

    $valor = $valor + $array2['soma'];
    ?>




                    <?php }?>
                    R$ <?php echo number_format($valor, 2, ',', '.'); ?>
                </td>
            </tr>




            </div>

        </table>