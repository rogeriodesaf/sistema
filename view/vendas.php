<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Processos</title>
	<?php require_once "menu.php"; ?>
</head>
<body>

	<div class="container">
		 <h1>Lista de Processos</h1>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<span class="btn btn-default" id="cadastrarProcessosBtn">Cadastrar Processo</span>  <!--Isto cria um botão, o btn btn-default é um classe do Bootstrap que faz o botão ficar branco. 
				 O id gera um identificador com o código JavaScript lá em baixo, e o que está entre as tags é o que vai aparecer escrito no botão. -->
		 		<span class="btn btn-default" id="listagemProcessosBtn">Lista de Processos</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="cadastrarProcessos"></div>
		 		<div id="listagemProcessos">

		 			
<?php 

	
	//require_once "vendas/vendasRelatorios.php" 

	?>

		 		</div>
		 	</div>
		 </div>
	</div>  <!-- Fechamento do container-->
</body>
</html>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cadastrarProcessosBtn').click(function(){                          //quando clicar no botão vai carregar a função esconderSessão que está na linha 59 do código, carregando a página vendas/vendasdeProdutos.php e mostrando
				esconderSessaoProcesso();
				$('#cadastrarProcessos').load('vendas/vendasDeProdutos.php');
				$('#cadastrarProcessos').show();
			});
			$('#listagemProcessosBtn').click(function(){
				esconderSessaoProcesso();
				$('#listagemProcessos').load('vendas/vendasRelatorios.php');
				$('#listagemProcessos').show();
			});
		});

		function esconderSessaoProcesso(){                            //criando a função; 
			$('#cadastrarProcessos').hide();
			$('#listagemProcessos').hide();
		}

	</script>

<?php 
	}else{
		header("location:../index.php");                      //se não for identificado um usuário volta pra index, que a página de login.
	}
 ?>