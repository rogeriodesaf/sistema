
<?php 


require_once "../../classes/conexao.php";
	$c = new conectar();
		$conexao=$c->conexao();

	$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, camara, relator, valor, data, ano FROM fornecedores";
	$result = mysqli_query($conexao, $sql);

?>


<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Processos</label></caption>
	<tr>
			<td>Nro FA</td>
	 		<td>Consumidor</td>
	 		<td>Fornecedor</td>
	 		<td>Câmara</td>
	 		<td>Relator</td>
	 		<td>Valor</td>
	 		<td>Data</td>
			<td>Ano</td>
			
			
			<td>Adicionar</td>
			<td>Excluir</td>
			
	</tr>
	
	<?php

	$total = 0;
	?>

	<?php while($mostrar = mysqli_fetch_row($result)): ?>

	<tr>

	

		<td><?php echo $mostrar[1]; ?></td>
		<td><?php echo $mostrar[2]; ?></td>
		<td><?php echo $mostrar[3]; ?></td>
		<td><?php echo $mostrar[4]; ?></td>
		<td><?php echo $mostrar[5]; ?></td>
		<td><?php echo $mostrar[6]; ?></td>
		<td><?php echo $mostrar[7]; ?></td>
		<td><?php echo $mostrar[8]; ?></td>

		
	
		
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalFornecedoresUpdate" onclick="adicionarDado('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminar('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
		
	</tr>


<?php endWhile; ?>


</table>


<table class="table table-hover table-condensed table-bordered" style="text-align: center;" >
<tr>
<td style="background-color: SlateGrey;">Total dos valores.</td>
</tr>

<tr>
<td>
<?php

$sql2 = "SELECT * FROM fornecedores";
$buscar2 = mysqli_query($conexao, $sql2);
$valor=0;
while ($array2 = mysqli_fetch_array($buscar2)) {
	$id_fornecedor  = $array2['id_fornecedor'];
	$valor = $valor + $array2 ['valor'];
	?>
	

	
	
	<?php } ?>
	 R$ <?php echo $valor?>

</tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;" >
<tr>
<td style="background-color: SlateGrey;">Total 1ª Grau.</td>
</tr>

<tr>
<td>
<?php

$sql2 = "SELECT * FROM fornecedores";
$buscar2 = mysqli_query($conexao, $sql2);
$valor=0;
while ($array2 = mysqli_fetch_array($buscar2)) {
	$id_fornecedor  = $array2['id_fornecedor'];
	$valor = $valor + $array2 ['valor'];
	?>
	

	
	
	<?php } ?>
	 R$ <?php echo $valor?>

</tr>


</table>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;" >
<tr >
<td style="background-color: SlateGrey;" >Total 2ª Grau.</td>
</tr>

<tr>
<td>
<?php

$sql2 = "SELECT * FROM fornecedores";
$buscar2 = mysqli_query($conexao, $sql2);
$valor=0;
while ($array2 = mysqli_fetch_array($buscar2)) {
	$id_fornecedor  = $array2['id_fornecedor'];
	$valor = $valor + $array2 ['valor'];
	?>
	

	
	
	<?php } ?>
	 R$ <?php echo $valor?>

</tr>


</table>

<!-- <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
<caption><label>Total por Relator</label></caption>
<tr>
			<td>Demetrius</td>
	 		<td>Edson</td>
	 		<td>Filipe</td>
	 		<td>Meriene</td>
	 		<td>Cyro</td>
	 		<td>Juliana</td>
	 		<td>Sérgio</td>
			<td>Fernando</td>
			<td>Rogério</td>
			<td>Cláudio</td>
			
			
	</tr>
</table> -->
</div>