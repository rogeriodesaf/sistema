<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Processos Março</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Processos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmProcessos">
						<label>N° FA</label>
						<input type="number" class="form-control input-sm" id="nrofa" name="nrofa">
						<label>Consumidor</label>
						<input type="text" class="form-control input-sm" id="consumidor" name="consumidor">
						<label>Fornecedor</label>
						<input type="text" class="form-control input-sm" id="fornecedor" name="fornecedor">
						<label>Grau da Sessão</label>
        				<select class="form-control input-sm" id="camara" name="camara">
						<option >1 </option>
						<option> 2  </option>
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
						<span class="btn btn-primary" id="btnAdicionarProcessos">Salvar</span>   <!-- btnAcidionarFornecedores é o botão entrar que ao ser clicado carregará a div tabelaFornecedores na linha 138 -->
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tabelaProcessosLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="abremodalProcessosUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Atualizar Registro</h4>
					</div>
					<div class="modal-body">
						<form id="frmProcessosU">
							<input type="text" hidden="" id="idprocessoU" name="idprocessoU">
							<label>nroFA</label>
							<input type="number" class="form-control input-sm" id="nrofaU" name="nrofaU">
							<label>Consumidor</label>
							<input type="text" class="form-control input-sm" id="consumidorU" name="consumidorU">
							<label>Fornecedor</label>
							<input type="text" class="form-control input-sm" id="fornecedorU" name="fornecedorU">
							<label>Sessão</label>
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
						<button id="btnAdicionarProcessoU" type="button" class="btn btn-primary" data-dismiss="modal">Atualizar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>
<!-- Adicionar dados -->
	<script type="text/javascript">
		function adicionarDado(idprocesso){    //ver linha 9 de obterDadosProcessos.

			$.ajax({
				type:"POST",   // ver a linha 9 de obterDadosProcessos. As informações estão vindo via método POST.
				data:"idprocesso=" + idprocesso,      // esse idprocesso está referenciando o id que está em obterDadosProcessos.php na linha 9. O CAMPO idprocesso É PASSADO TODA VEZ QUE EU CLICAR NO BOTÃO QUE 
				//ESTÁ EM tabelaProcessosMarco.php na linha 57 EU PASSO O CAMPO ['0'] QUE É O id_fornecedor na linha 9 de tabelaProcessosMarco.php. O FORMULÁRIO PASSA PARA ObterDadosProcessos
				url:"../procedimentos/processos/obterDadosProcessos.php",
				success:function(r){   //FUNÇÃO QUE FAZ UMA CONSULTA NOS DADOS 



					dado=jQuery.parseJSON(r); //OS DADOS QUE ESTÃO NOS CAMPOS 'id_fornecedor','nrofa',etc... ESTÃO SENDO PASSADOS VIA JSON


					$('#idprocessoU').val(dado['id_fornecedor']);
					$('#nrofaU').val(dado['nrofa']);
					$('#consumidorU').val(dado['consumidor']);
					$('#fornecedorU').val(dado['fornecedor']);
					$('#camaraU').val(dado['camara']);
					$('#relatorU').val(dado['relator']);
					$('#valorU').val(dado['valor']);
					$('#dataU').val(dado['data']);
					$('#anoU').val(dado['ano']);



				}
			});
		}
// Eliminar fornecedores
function eliminar(idprocesso){   //tabelaProcessosMarco na linha 62 está a função de eliminar 
			alertify.confirm('Deseja Excluir este registro?', function(){ 
				$.ajax({
					type:"POST",
					data:"idprocesso=" + idprocesso,
					url:"../procedimentos/processos/eliminarProcessos.php",
					success:function(r){



						if(r==1){
							$('#tabelaProcessosLoad').load("processos/tabelaProcessosMarco.php");
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
 <!-- Código que está na div tabelaFornecedores na linha 60-->
	<script type="text/javascript">
		$(document).ready(function(){    //ao ler o documento ...

			$('#tabelaProcessosLoad').load("processos/tabelaProcessosMarco.php"); //...carregue tabelaProcessosMarco.php

			$('#btnAdicionarProcessos').click(function(){   //ao clicar no botão da linha 56 ele vai...

				vazios=validarFormVazio('frmProcessos'); //verificar se existem campos vazios no formulário da linha 19...

				if(vazios > 0){   // se tiver campo vazio manda uma mensagem
					alertify.alert("Preencha os Campos!!");   
					return false;
				}

				dados=$('#frmProcessos').serialize(); // aqui vamos pegar os dados recebidos do formulário da linha 19 e serializar via JSON  e passadas para a url da linha 182

				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/processos/adicionarProcessos.php", // bem aqui
					success:function(r){

						if(r==1){  // ver classes/processos a função adicionar. Ela gera por padrão o valor de 1. 
							$('#frmProcessos')[0].reset(); // após adicionar vai dar um reset nos campos limpando eles dentro do formulário. 
							$('#tabelaProcessosLoad').load("processos/tabelaProcessosMarco.php"); // isso faz com que a tabela seja carregada e mostrada ao lado direito da tela.
							alertify.success("Registro Adicionado");
						}else{
							alertify.error("Não foi possível adicionar");
						}
					}
				});
			});
		});
	</script>
<!--/modal-->
	<script type="text/javascript">
		 $(document).ready(function(){
		 	$('#btnAdicionarProcessoU').click(function(){
		 		dados=$('#frmProcessosU').serialize();

	 		$.ajax({
		 			type:"POST",
					data:dados,
					url:"../procedimentos/processos/atualizarProcessos.php",
					success:function(r){

			
					if(r==1){
		$('#frmProcessos')[0].reset();
		 					$('#tabelaProcessosLoad').load("processos/tabelaProcessosMarco.php");
							alertify.success("Registro atualizado com sucesso!");
						}else{
							alertify.error("Não foi possível atualizar registro");
				}
					}
	 		});
	 	})
	 })
	</script>


	<?php 
}else{
	header("location:../index.php");
}
?>