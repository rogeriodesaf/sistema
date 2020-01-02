<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT id_relator, nome, sobrenome, endereco, email, telefone, cpf FROM relatores";
$result = mysqli_query($conexao, $sql);

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
		<td><?php //echo $mostrar[1]; ?></td>
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
			<span class="btn btn-danger btn-xs" onclick="eliminarRelator('<?php echo $mostrar[11]; ?>')">
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
$sql6 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Demetrius' and MONTH(data) = '11' and year(data) = '2020'";
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
$sql5 = "SELECT sum(valor) as valor from fornecedores where relator='Demetrius' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>




    <tr>

        <td>Edson</td>
        <td>
            <?php
$sql7 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Edson' and MONTH(data) = '11' and year(data) = '2020'";
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
$sql5 = "SELECT sum(valor) as valor from fornecedores where relator='Edson' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>




    </tr>
    <tr>

        <td>Filipe</td>
        <td>
            <?php
$sql11 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Filipe' and MONTH(data) = '11' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql11);
$Qtd = 0;

while ($array11 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array11['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>



        </td>
        <td>
            <?php
$sql5 = "SELECT sum(valor) as valor from fornecedores where relator='Filipe' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql5);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>
    <tr>


        <td>Emannuel</td>
        <td>
            <?php
$sql21 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Emannuel' and MONTH(data) = '11' and year(data) = '2020'";
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
$sql111 = "SELECT sum(valor) as valor from fornecedores where relator='Emannuel' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql111);
$valor = 0;

while ($array3 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array3['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>




    </tr>
    <tr>

        <td>Cyro</td>
        <td>
            <?php
$sql11 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Cyro' and MONTH(data) = '11' and year(data) = '2020'";
$buscar = mysqli_query($conexao, $sql11);
$Qtd = 0;

while ($array11 = mysqli_fetch_array($buscar)) {
    $Qtd = $Qtd + $array11['Qtd'];
    ?>

            <?php }?>
            <?php echo $Qtd ?>
        </td>
        <td>

            <?php
$sql11 = "SELECT sum(valor) as valor from fornecedores where relator='Cyro' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql11);
$valor = 0;

while ($array11 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array11['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>



    <tr>

        <td>Juliana</td>
        <td>
            <?php
$sql12 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Juliana' and MONTH(data) = '11' and year(data) = '2020'";
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
$sql11 = "SELECT sum(valor) as valor from fornecedores where relator='Juliana' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql11);
$valor = 0;

while ($array13 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array13['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>




    </tr>
    <tr>

        <td>Sérgio</td>
        <td>
            <?php
$sql14 = "SELECT relator, COUNT(relator) AS Qtd FROM fornecedores where relator='Sérgio' and MONTH(data) = '11' and year(data) = '2020'";
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
$sql16 = "SELECT sum(valor) as valor from fornecedores where relator='Sérgio' and MONTH(data) = '11' and year(data) = '2020'";
$buscarrelator = mysqli_query($conexao, $sql16);
$valor = 0;

while ($array13 = mysqli_fetch_array($buscarrelator)) {
    $valor = $valor + $array13['valor'];

    ?>

            <?php }?>
            R$ <?php echo number_format($valor, 2, ',', '.'); ?>
        </td>

    </tr>




</table>

<td style="align:higth;">
    <a href="novembro.php" class="btn btn-danger btn-sm">
        Voltar <span class="glyphicon glyphicon glyphicon-share-alt"></span>
    </a>
</td>