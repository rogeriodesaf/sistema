<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();
<<<<<<< HEAD

$sql = "SELECT id_fornecedor2, nrofa2, consumidor2, fornecedor2, relator2, valor2,valor_seg, data2, ano2, recurso2  FROM fornecedores2  WHERE MONTH(data2) = '8' and Year(data2) = '2020' ";
=======
$sql = "SELECT id_fornecedor2, nrofa2, consumidor2, fornecedor2,  relator2, valor2, valor_seg,data2, ano2, recurso2 FROM fornecedores2 WHERE MONTH(data2) = '7' and year(data2) = '2020'";
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
$result = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">

<img src="../../img/marca_procon.jpg" width="200" height="120">
<br>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
<<<<<<< HEAD
=======
    <caption><label>Processos</label></caption>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
    <tr style="background-color: SlateGrey;">
        <td>Nro FA</td>
        <td>Consumidor</td>
        <td>Fornecedor</td>
<<<<<<< HEAD
        <td>Relator</td>
        <td>Valor do 1º Grau</td>
        <td>Valor do 2º Grau</td>
        <td>Data</td>
=======
        <td>relator</td>
        <td>valor do 1ª Grau</td>
        <td>valor do 2ª Grau</td>
        <td>data</td>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
        <td>Ano</td>
        <td>Recurso</td>





    </tr>

    <?php while ($mostrar = mysqli_fetch_row($result)): ?>

    <tr>


        <td><?php echo $mostrar[1]; ?></td>
        <td><?php echo $mostrar[2]; ?></td>
        <td><?php echo $mostrar[3]; ?></td>
        <td><?php echo $mostrar[4]; ?></td>
<<<<<<< HEAD
        <td> R$<?php echo number_format($mostrar[5], 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($mostrar[6], 2, ',', '.'); ?></td>
=======
        <td><?php echo number_format($mostrar[5], 2, ',', '.'); ?></td>
        <td><?php echo number_format($mostrar[6], 2, ',', '.'); ?></td>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
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

$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 where  MONTH(data2) = '8' and year(data2) = '2020'"; //SELECT sum(valor2) as valor2 from fornecedores2 where camara2='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2=0;
while ($array3 = mysqli_fetch_array($buscarDb)) {
<<<<<<< HEAD
    $valor = $valor + $array3['valor2'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>

=======
    $valor2 = $valor2 + $array3['valor2'];
    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
    </tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total 2ª Grau.</td>
    </tr>

    <tr>
        <td>
            <?php
<<<<<<< HEAD
$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 where  MONTH(data2) = '8' and year(data2) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2 = 0.00;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor2 = $valor2 + $array3['valor2'];
=======
$total2Grau = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where  MONTH(data2) = '8' and year(data2) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor2 = $valor2 + $array3['valor_seg'];
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>


</table>
<<<<<<< HEAD
=======

>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
<!-- <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores no mês.</td>
    </tr>

    <tr>
        <td>
            <//?php

$sql2 = "SELECT SUM(valor_seg) as soma FROM fornecedores2 WHERE MONTH(data2) = '6' and Year(data2) = '2020'";
$busca = mysqli_query($conexao, $sql2);
$valor = 0;

while ($array4 = mysqli_fetch_array($busca)) {
    $valor = $valor + $array4['soma'];

    ?>
            <//?php }?>
            R$ <//?php echo number_format($valor, 2, ',', '.'); ?>






<<<<<<< HEAD
            <//?php }?>
            R$ <//?php echo number_format($valor, 2, ',', '.'); ?>
=======
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
        </td>

    </tr> -->

<<<<<<< HEAD
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores Anual.</td>
    </tr>

=======
</table> -->

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <tr>
        <td style="background-color: SlateGrey;">Total dos valores anual.</td>
    </tr>

>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
    <tr>
        <td>
            <?php

<<<<<<< HEAD
$sql2 = "SELECT * FROM fornecedores2 where year(data2)='2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {

    $valor = $valor + $array2['valor_seg'];
    ?>

=======
$sql2 = "SELECT SUM(valor_seg) as soma FROM fornecedores2 WHERE  Year(data2) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7

    $valor = $valor + $array2['soma'];
    ?>


<<<<<<< HEAD
            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>


</table>

=======


            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>
    </tr>
</table>
<br>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total por relator</label></caption>
    <tr>
        <td style="background-color: SlateGrey;">--</td>
        <td style="background-color: SlateGrey;">Total de Processos por relator</td>
        <td style="background-color: SlateGrey;">valor por relator</td>



    </tr>
    <tr>

        <td>Demetrius</td>
        <td>
            <?php
$sql6 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Kaio' and MONTH(data2) = '8' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Kaio' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor_seg'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>



    </tr>
    <tr>

        <td>Emannuel</td>
        <td>
            <?php
$sql7 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Emannuel' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql7);
$Qtd = 0;

while ($array5 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array5['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>





        </td>
        <td>
            <?php
$sql5 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Emannuel' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor_seg'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>
    <tr>

        <td>Juliana</td>
        <td>
            <?php
$sql9 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Juliana' and MONTH(data2) = '8' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Juliana' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor_seg'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>
    <tr>

        <td>Sérgio</td>
        <td>
            <?php
$sql9 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Sérgio' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql9);
$Qtd = 0;

while ($array9 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array9['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
<<<<<<< HEAD



        </td>
        <td>
            <?php
$sql5 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Sérgio' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor_seg'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>
    <tr>
        <td>Fernando</td>
        <td>
            <?php
=======



        </td>
        <td>
            <?php
$sql5 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Sérgio' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor_seg'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
    </tr>

    </tr>

    <td>Fernando</td>
    <td>
        <?php
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
$sql10 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Fernando' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql10);
$Qtd = 0;

while ($array10 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array10['Qtd'];
    ?>

<<<<<<< HEAD
            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>

            <?php
=======
        <?php }?>
        <?php echo $Qtd ?>
    </td>
    <td>

        <?php
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
$sql11 = "SELECT sum(valor_seg) as valor_seg from fornecedores2 where relator2='Fernando' and MONTH(data2) = '8' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql11);
$valor2 = 0;

while ($array11 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array11['valor_seg'];

    ?>

<<<<<<< HEAD
            <?php }?>
            R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
        </td>
=======
        <?php }?>
        R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
    </td>
>>>>>>> f872b20a4bbbf2916b999f86eb5f344ac7b914c7
    </tr>


    </tr>


</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Total de Processos no mês.</label></caption>
    <tr>
        <td>


            <?php
$sql21 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where  MONTH(data2) = '8' and year(data2) = '2020'";
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
<br><br><br><br>
<footer class="page-footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Núcleo de Tecnologia da Informação PROCON/PB
        <p>Tel:(83)3214-1713</p>



    </div>
    <!-- Copyright -->

</footer>