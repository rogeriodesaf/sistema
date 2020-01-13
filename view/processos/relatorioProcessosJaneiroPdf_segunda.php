 <?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();
$sql = "SELECT id_fornecedor2, nrofa2, consumidor2, fornecedor2, camara2, relator2, valor2, data2, ano2, recurso2 FROM fornecedores2  WHERE MONTH(data2) = '1' and year(data2) = '2020'";
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
         <td>data2</td>
         <td>Ano</td>
         <td>Recurso</td>





     </tr>

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

$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 where camara2='1' and MONTH(data2) = '1' and year(data2) = '2020'"; //SELECT sum(valor2) as valor2 from fornecedores2 where camara2='1'"
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor2 = $valor2 + $array3['valor2'];
    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
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
$total2Grau = "SELECT sum(valor2) as valor2 from fornecedores2 where camara2='2' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarDb = mysqli_query($conexao, $total2Grau);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarDb)) {
    $valor2 = $valor2 + $array3['valor2'];
    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
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

$sql2 = "SELECT * FROM fornecedores2 WHERE MONTH(data2) = '1' and year(data2) = '2020'";
$buscar2 = mysqli_query($conexao, $sql2);
$valor2 = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor2 = $array2['id_fornecedor2'];
    $valor2 = $valor2 + $array2['valor2'];
    ?>




             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
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

$sql2 = "SELECT * FROM fornecedores2 WHERE YEAR(data2) = '2020' ";
$buscar2 = mysqli_query($conexao, $sql2);
$valor2 = 0;
while ($array2 = mysqli_fetch_array($buscar2)) {
    $id_fornecedor2 = $array2['id_fornecedor2'];
    $valor2 = $valor2 + $array2['valor2'];
    ?>




             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
         </td>
     </tr>


 </table>




 </table>

 <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
     <caption><label>Total por relator</label></caption>
     <tr>
         <td>--</td>
         <td>Total de Processos por relator</td>
         <td>valor por relator</td>



     </tr>
     <tr>

         <td>Demetrius</td>
         <td>
             <?php
$sql6 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Demetrius' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Demetrius' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor2'];

    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
         </td>
     </tr>



     </tr>
     <tr>

         <td>Edson</td>
         <td>
             <?php
$sql7 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Edson' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Edson' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor2'];

    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
         </td>
     </tr>

     </tr>
     <tr>

         <td>Filipe</td>
         <td>
             <?php
$sql9 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Filipe' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Filipe' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql5);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor2'];

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
$sql21 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Emannuel' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql18 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Emannuel' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql18);
$valor2 = 0;

while ($array3 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array3['valor2'];

    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
         </td>
     </tr>


     </tr>
     <tr>

         <td>Cyro</td>
         <td>
             <?php
$sql10 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Cyro' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql11 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Cyro' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql11);
$valor2 = 0;

while ($array11 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array11['valor2'];

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
$sql12 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Juliana' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql12);
$Qtd = 0;

while ($array12 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array12['Qtd'];
    ?>

             <?php }?>
             <?php echo $Qtd ?>
         </td>
         <td>
             <?php
$sql11 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Juliana'  and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql11);
$valor2 = 0;

while ($array13 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array13['valor2'];

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
$sql14 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Sérgio' and MONTH(data2) = '1' and year(data2) = '2020'";
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
$sql16 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Sérgio' and MONTH(data2) = '1' and year(data2) = '2020'";
$buscarrelator2 = mysqli_query($conexao, $sql16);
$valor2 = 0;

while ($array13 = mysqli_fetch_array($buscarrelator2)) {
    $valor2 = $valor2 + $array13['valor2'];

    ?>

             <?php }?>
             R$ <?php echo number_format($valor2, 2, ',', '.'); ?>
         </td>
     </tr>


     </tr>

 </table>