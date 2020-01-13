<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

// $sql = "SELECT id_relator, nome, sobrenome, endereco, email, telefone, cpf FROM relatores";
// $result = mysqli_query($conexao, $sql);

?>


<!-- <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Relatores</label></caption>
	<tr>
			<td>Nome</td>
	 		<td>Sobrenome</td>
	 		<td>Endereço</td>
	 		<td>Email</td>
	 		<td>Telefone</td>
	 		<td>CPF</td>
	 		<td>Editar</td>
		<td>Excluir</td>
	</tr>

	<?php //while($mostrar = mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php //echo $mostrar[3]; ?></td>
		<td><?php //echo $mostrar[2]; ?></td>
		<td><?php //echo $mostrar[3]; ?></td>
		<td><?php //echo $mostrar[4]; ?></td>
		<td><?php //echo $mostrar[5]; ?></td>
		<td><?php //echo $mostrar[6]; ?></td>
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalRelatoresUpdate" onclick="adicionarDado('<?php echo $mostrar[7]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarRelator('<?php echo $mostrar[8]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>


<?php //endWhile; ?>
</table> -->
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
$sql6 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Demetrius' and MONTH(data2) = '4' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Demetrius' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>

        </td>



    </tr>
    <tr>

        <td>Edson</td>
        <td>
            <?php
$sql7 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Edson' and MONTH(data2) = '4' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Edson' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>
        </td>


    </tr>
    <tr>

        <td>Filipe</td>
        <td>
            <?php
$sql6 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Filipe' and MONTH(data2) = '4' and year(data2) = '2020'";
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
$sql5 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Filipe' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>

        </td>



    </tr>

    <td>Emannuel</td>
    <td>
        <?php
$sql23 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Emannuel' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql23);
$Qtd = 0;

while ($array23 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array23['Qtd'];
    ?>

        <?php }?>
        <?php echo $Qtd ?>

    </td>
    <td>
        <?php
$sql38 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Emannuel' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql38);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor2'];

    ?>

        <?php }?>
        R$ <?php echo $valor ?>

    </td>


    </tr>
    <tr>

        <td>Cyro</td>
        <td>
            <?php
$sql30 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Cyro' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscar = mysqli_query($conexao, $sql30);
$Qtd = 0;

while ($array30 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array30['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>

            <?php
$sql33 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Cyro' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql33);
while ($array33 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array33['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>
        </td>


    </tr>
    <tr>

        <td>Juliana</td>
        <td>
            <?php
$sql32 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Juliana' and MONTH(data2) = '4' and year(data2) = '2020'";
$Qtd = 0;

while ($array32 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array32['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql33 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Juliana' and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql33);
$valor = 0;

while ($array33 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array33['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>
        </td>


    </tr>
    <tr>

        <td>Sérgio</td>
        <td>
            <?php
$sql34 = "SELECT relator2, COUNT(relator2) AS Qtd FROM fornecedores2 where relator2='Sérgi'and MONTH(data2) = '4' and year(data2) = '2020'";

while ($array34 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array34['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>
            <?php
$sql36 = "SELECT sum(valor2) as valor2 from fornecedores2 where relator2='Sérgio'and MONTH(data2) = '4' and year(data2) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql36);
$valor = 0;

while ($array33 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array33['valor2'];

    ?>

            <?php }?>
            R$ <?php echo $valor ?>


        </td>


    </tr>

</table>

<td style="align:higth;">
    <a href="abril_segunda.php" class="btn btn-danger btn-sm">
        Voltar <span class="glyphicon glyphicon glyphicon-share-alt"></span>
    </a>
</td>