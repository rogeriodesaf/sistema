<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>relatores Agosto</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Relatores</h1>
			<div class="row">
				<!-- <div class="col-sm-4">
					<form id="frmClientes">
						<label>Nome</label>
						<input type="text" class="form-control input-sm" id="nome" name="nome">
						<label>Sobrenome</label>
						<input type="text" class="form-control input-sm" id="sobrenome" name="sobrenome">
						<label>Endereço</label>
						<input type="text" class="form-control input-sm" id="endereco" name="endereco">
						<label>Email</label>
						<input type="text" class="form-control input-sm" id="email" name="email">
						<label>Telefone</label>
						<input type="text" class="form-control input-sm" id="telefone" name="telefone">
						<label>CPF</label>
						<input type="text" class="form-control input-sm" id="cpf" name="cpf">
						<p></p>
						<span class="btn btn-primary" id="btnAdicionarCliente">Salvar</span>
					</form>
				</div> -->
				<div class="col-sm-10">
					 <div id="tabelaRelatoresLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="abremodalRelatoresUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Atualizar cliente</h4>
					</div>
					<div class="modal-body">
						<form id="frmRelatoresU">
							<input type="text" hidden="" id="idclienteU" name="idclienteU">
							<label>Nome</label>
							<input type="text" class="form-control input-sm" id="nomeU" name="nomeU">
							<label>Sobrenome</label>
							<input type="text" class="form-control input-sm" id="sobrenomeU" name="sobrenomeU">
							<label>Endereço</label>
							<input type="text" class="form-control input-sm" id="enderecoU" name="enderecoU">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="emailU" name="emailU">
							<label>Telefone</label>
							<input type="text" class="form-control input-sm" id="telefoneU" name="telefoneU">
							<label>CPF</label>
							<input type="text" class="form-control input-sm" id="cpfU" name="cpfU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAdicionarRelatorU" type="button" class="btn btn-primary" data-dismiss="modal">Atualizar</button>
						<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
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
</table>
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

	<script type="text/javascript">
		function adicionarDado(idrelator){

			$.ajax({
				type:"POST",
				data:"idcliente=" + idrelator,
				url:"../procedimentos/relatores/obterDadosRelator.php",
				success:function(r){

					dado=jQuery.parseJSON(r);


					$('#ididrelatorU').val(dado['id_relator']);
					$('#nomeU').val(dado['nome']);
					$('#sobrenomeU').val(dado['sobrenome']);
					$('#enderecoU').val(dado['endereco']);
					$('#emailU').val(dado['email']);
					$('#telefoneU').val(dado['telefone']);
					$('#cpfU').val(dado['cpf']);



				}
			});
		}

	// 	function eliminarCliente(idrelator){
	// 		alertify.confirm('Deseja Excluir este cliente?', function(){ 
	// 			$.ajax({
	// 				type:"POST",
	// 				data:"idrelator=" + idrelator,
	// 				url:"../procedimentos/relatores/eliminarRelatores.php",
	// 				success:function(r){


	// 					if(r==1){
	// 						$('#tabelaRelatoresLoad').load("relatores/tabelaRelatores2.php");
	// 						alertify.success("Excluido com sucesso!!");
	// 					}else{
	// 						alertify.error("Não foi possível excluir");
	// 					}
	// 				}
	// 			});
	// 		}, function(){ 
	// 			alertify.error('Cancelado !')
	// 		});
	// 	}
	// </script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#tabelaRelatoresLoad').load("relatores/tabelaRelatores8.php");

			// $('#btnAdicionarRelator').click(function(){

			// 	vazios=validarFormVazio('frmRelatores');

			// 	if(vazios > 0){
			// 		alertify.alert("Preencha os Campos!!");
			// 		return false;
			// 	}

			// 	dados=$('#frmRelatores').serialize();

			// 	$.ajax({
			// 		type:"POST",
			// 		data:dados,
			// 		url:"../procedimentos/relatores/adicionarRelatores.php",
			// 		success:function(r){

			// 			if(r==1){
			// 				$('#frmRelatores')[0].reset();
			// 				$('#tabelaRelatoresLoad').load("relatores/tabelaRelatores2.php");
			// 				alertify.success("Cliente Adicionado");
			// 			}else{
			// 				alertify.error("Não foi possível adicionar");
			// 			}
			// 		}
			// 	});
			// });
		});
	</script>

	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$('#btnAdicionarRelatorU').click(function(){
				dados=$('#frmRelatoresU').serialize();

				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/relatores/atualizarRelatores.php",
					success:function(r){



						if(r==1){
							$('#frmRelatores')[0].reset();
							$('#tabelaRelatoresLoad').load("relatores/tabelaRelatores2.php");
							alertify.success("Cliente atualizado com sucesso!");
						}else{
							alertify.error("Não foi possível atualizar cliente");
						}
					}
				});
			})
		})
	</script> -->


	<?php 
}else{
	header("location:../index.php");
}
?>

