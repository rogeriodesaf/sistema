<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Câmaras</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>

		<div class="container">
			<h1>Câmaras</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmCamara">
						<label>Câmaras</label>
						<input type="text" class="form-control input-sm" name="camara" id="camara">
						<p></p>
						<span class="btn btn-primary" id="btnAdicionarCamara">Adicionar</span>
					</form>
				</div>
				<div class="col-sm-6">
					<div id="tabelaCamaraLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="atualizaCamara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Atualizar Câmara</h4>
					</div>
					<div class="modal-body">
						<form id="frmCamaraU">
							<input type="text" hidden="" id="idcamara" name="idcamara">
							<label>Camaras</label>
							<input type="text" id="camaraU" name="camaraU" class="form-control input-sm">
						</form>


					</div>
					<div class="modal-footer">
						<button type="button" id="btnAtualizaCamara" class="btn btn-warning" data-dismiss="modal">Salvar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#tabelaCamaraLoad').load("camaras/tabelaCamaras.php");

			$('#btnAdicionarCamara').click(function(){

				vazios=validarFormVazio('frmCamaras');

				if(vazios > 0){
					alertify.alert("Preencha os Campos!!");
					return false;
				}

				dados=$('#frmCamaras').serialize();
				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/camaras/adicionarCamaras.php",
					success:function(r){
						
						if(r==1){
					//limpar formulário
					$('#frmCamaras')[0].reset();

					$('#tabelaCamaraLoad').load("camaras/tabelaCamaras.php");
					alertify.success("Câmara adicionada com sucesso!");
				}else{
					alertify.error("Não foi possível adicionar a Câmara");
				}
			}
		});
			});
		});
	</script>




	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnAtualizaCamara').click(function(){

				dados=$('#frmCamaraU').serialize();
				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/camaras/atualizarCamaras.php",
					success:function(r){
						if(r==1){
							$('#tabelaCamaraLoad').load("camaras/tabelaCamras.php");
							alertify.success("Atualizado com Sucesso :)");
						}else{
							alertify.error("Não foi possível atualizar :(");
						}
					}
				});
			});
		});
	</script>



	<script type="text/javascript">

		function adicionarDado(idcamara,camara){
			$('#idcamara').val(idcamara);
			$('#camaraU').val(camara);
		}


		function eliminaCamara(idcamara){
			alertify.confirm('Deseja excluir esta câmra?', function(){ 
				$.ajax({
					type:"POST",
					data:"idcamara=" + idcamara,
					url:"../procedimentos/camaras/eliminarCamaras.php",
					success:function(r){
						if(r==1){
							$('#tabelaCamaraLoad').load("camaras/tabelaCamras.php");
							alertify.success("Excluido com sucesso!!");
						}else{
							alertify.error("Não Excluido");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelado !')
			});
		}

	</script>




<?php 
}else{
	header("location:../index.php");
}
?>