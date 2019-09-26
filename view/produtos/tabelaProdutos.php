
<?php 
	require_once "../../classes/conexao.php";
	$c= new conectar();
	$conexao=$c->conexao();
	$sql="SELECT pro.nome,
					pro.descricao,
					pro.quantidade,
					pro.preco,
					img.url,
					cat.nome_categoria,
					pro.id_produto
		  from produtos as pro 
		  inner join imagens as img
		  on pro.id_imagem=img.id_imagem
		  inner join categorias as cat
		  on pro.id_categoria=cat.id_categoria";
	$result=mysqli_query($conexao,$sql);

	

 ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Cadastro das Câmaras</label></caption>
	<tr>
		<td> Sessão</td>
		
		
		
		
		<td>Categoria</td>
		<td>Editar</td>
		<td>Excluir</td>
	</tr>

	<?php while($mostrar=mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php echo $mostrar[0]; ?></td>
		
		
		
		
		<td><?php echo $mostrar[5]; ?></td>
		<td>
			<span  data-toggle="modal" data-target="#abremodalUpdateProduto" class="btn btn-warning btn-xs" onclick="addDadosProduto('<?php echo $mostrar[6] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarProduto('<?php echo $mostrar[6] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>