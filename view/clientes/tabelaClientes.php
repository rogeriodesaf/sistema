
<?php 


require_once "../../classes/conexao.php";
	$c = new conectar();
		$conexao=$c->conexao();

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

	<?php while($mostrar = mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php echo $mostrar[1]; ?></td>
		<td><?php echo $mostrar[2]; ?></td>
		<td><?php echo $mostrar[3]; ?></td>
		<td><?php echo $mostrar[4]; ?></td>
		<td><?php echo $mostrar[5]; ?></td>
		<td><?php echo $mostrar[6]; ?></td>
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalRelatoresUpdate" onclick="adicionarDado('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarRelator('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>


<?php endWhile; ?> -->
</table>
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
			 
			 </td>
	 		<td>
			 <?php 
					$sql5="SELECT sum(valor) as valor from fornecedores where relator='Demetrius'";
					$buscarrelator = mysqli_query($conexao, $sql5);
					$valor=0;

					while ($array3 = mysqli_fetch_array( $buscarrelator)) {
					$valor = $valor + $array3 ['valor'];

					?>
				
				<?php } ?>
		 R$ <?php echo $valor?>
			 
			 </td>
	 		
			
			
	</tr>
	<tr>
			
	 		<td>Edson</td>
	 		<td></td>
	 		<td></td>
			
			
	</tr>
	<tr>
			
	 		<td>Filipe</td>
	 		<td></td>
	 		<td></td>
			
	</tr>
	<tr>
			
	 		
	 		<td>Meriene</td>
	 		<td></td>
	 		<td></td>
			
			
	</tr>
	<tr>
			
	 		<td>Cyro</td>
	 		<td></td>
	 		<td></td>
			
			
	</tr>
	<tr>
			
	 		<td>Juliana</td>
	 		<td></td>
	 		<td></td>
			
			
	</tr>
	<tr>
			
	 		<td>Sérgio</td>
			 <td></td>
	 		<td></td>
			
			
	</tr>
	
</table>