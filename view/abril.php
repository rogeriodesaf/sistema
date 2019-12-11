<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>fornecedores</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Processos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmFornecedores">
						<label>N° FA</label>
						<input type="number" class="form-control input-sm" id="nrofa" name="nrofa">
						<label>Consumidor</label>
						<input type="text" class="form-control input-sm" id="consumidor" name="consumidor">
						<label>Fornecedor</label>
						<input type="text" class="form-control input-sm" id="fornecedor" name="fornecedor">
						<label>Grau da Sessão</label>
        				<select class="form-control input-sm" id="camara" name="camara">
						<option >1 sessão </option>
						<option> 2 sessão </option>
        				</select>
						<label>Relatores</label>
						<select class="form-control input-sm" id="relator" name="relator">
						
						
						<option>-----</option>
						<option>Demetrius</option>
						<option>Edson</option>
						<option>Filipe</option>
						<option>Meriene</option>
						<option>Cyro</option>
						<option>Juliana</option>
						<option>Sérgio</option>
						<option>Fernando</option>
						<option>Rogério</option>
						<option>Cláudio</option>
						</select>
				

						<label>Valor</label>
						<input type="number" class="form-control input-sm" id="valor" name="valor">
						<label>Data De Julgamento</label>
						<input type="date" class="form-control input-sm" id="data" name="data">
						<label>Ano</label>
						<input type="number" class="form-control input-sm" id="data" name="ano">
						<p></p>
						<span class="btn btn-primary" id="btnAdicionarFornecedores">Salvar</span>   <!-- btnAcidionarFornecedores é o botão entrar que ao ser clicado carregará a div tabelaFornecedores na linha 138 -->
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tabelaFornecedoresLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="abremodalFornecedoresUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Atualizar Fornecedor</h4>
					</div>
					<div class="modal-body">
						<form id="frmFornecedoresU">
							<input type="text" hidden="" id="idfornecedorU" name="idfornecedorU">
							<label>nroFA</label>
							<input type="number" class="form-control input-sm" id="nrofaU" name="nrofaU">
							<label>Consumidor</label>
							<input type="text" class="form-control input-sm" id="consumidorU" name="consumidorU">
							<label>Fornecedor</label>
							<input type="text" class="form-control input-sm" id="fornecedorU" name="fornecedorU">
							<label>Câmara</label>
							<input type="text" class="form-control input-sm" id="camaraU" name="camaraU">
							<label>Relator</label>
							<input type="text" class="form-control input-sm" id="relatorU" name="relatorU">
							<label>Valor</label>
							<input type="number" class="form-control input-sm" id="valorU" name="valorU">
							<label>Data De julgamento</label>
							<input type="date" class="form-control input-sm" id="dataU" name="dataU">
							<label>Ano</label>
							<input type="number" class="form-control input-sm" id="anoU" name="anoU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAdicionarFornecedorU" type="button" class="btn btn-primary" data-dismiss="modal">Atualizar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>
<!-- Adicionar dados -->
	<script type="text/javascript">
		function adicionarDado(idfornecedor){

			$.ajax({
				type:"POST",
				data:"idfornecedor=" + idfornecedor,
				url:"../procedimentos/processos/obterDadosFornecedores.php",
				success:function(r){



					dado=jQuery.parseJSON(r);


					$('#idfornecedorU').val(dado['id_fornecedor']);
					$('#nrofaU').val(dado['nrofa']);
					$('#consumidorU').val(dado['consumidor']);
					$('#forneceodorU').val(dado['fornecedor']);
					$('#camaraU').val(dado['camara']);
					$('#relatorU').val(dado['relator']);
					$('#valorU').val(dado['valor']);
					$('#dataU').val(dado['data']);
					$('#anoU').val(dado['ano']);



				}
			});
		}
// Eliminar fornecedores
		function eliminar(idfornecedor){
			alertify.confirm('Deseja Excluir este registro?', function(){ 
				$.ajax({
					type:"POST",
					data:"idfornecedor=" + idfornecedor,
					url:"../procedimentos/processos/eliminarFornecedores.php",
					success:function(r){



						if(r==1){
							$('#tabelaFornecedoresLoad').load("processos/tabelaFornecedores.php");
							alertify.success("Excluido com sucesso!!");
						}else{
							alertify.error("Não foi possível excluir");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelado !')
			});
		}
	</script>
 <!-- Código que está na div tabelaFornecedores -->
	<script type="text/javascript">
		$(document).ready(function(){

			$('#tabelaFornecedoresLoad').load("processos/tabelaFornecedores.php");

			$('#btnAdicionarFornecedores').click(function(){

				vazios=validarFormVazio('frmFornecedores');

				if(vazios > 0){
					alertify.alert("Preencha os Campos!!");   //Se todos os campos da div class container não forem preenchidos chama a função alerta "Preeencha os campos
					return false;
				}

				dados=$('#frmFornecedores').serialize();

				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/processos/adicionarFornecedores.php",
					success:function(r){

						if(r==1){
							$('#frmFornecedores')[0].reset();
							$('#tabelaFornecedoresLoad').load("processos/tabelaFornecedores.php");
							alertify.success("Registro Adicionado");
						}else{
							alertify.error("Não foi possível adicionar");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		// $(document).ready(function(){
		// 	$('#btnAdicionarFornecedorU').click(function(){
		// 		dados=$('#frmFornecedoresU').serialize();

		// 		$.ajax({
		// 			type:"POST",
		// 			data:dados,
		// 			url:"../procedimentos/fornecedores/atualizarFornecedores.php",
		// 			success:function(r){

						
		// 				if(r==1){
		// 					$('#frmFornecedores')[0].reset();
		// 					$('#tabelaFornecedoresLoad').load("fornecedores/tabelaFornecedores.php");
		// 					alertify.success("Fornecedor atualizado com sucesso!");
		// 				}else{
		// 					alertify.error("Não foi possível atualizar fornecedor");
		// 				}
		// 			}
		// 		});
		// 	})
		// })
	</script>


	<?php 
}else{
	header("location:../index.php");
}
?>