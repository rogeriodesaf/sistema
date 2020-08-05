<?php require_once "dependencias.php"?>

<?php
session_start();
if (isset($_SESSION['usuario'])) {

    ?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php require_once "menu.php";?>
    <?php require_once "../classes/conexao.php";?>
    
    
    <style type="text/css">
    .btn-primary {
        background-color: #000000;
    }
    </style>


<body>



    <div class="container" style="margin-top: 20px;">
        <div class="page-header">
        
            <h2>Pesquisa</h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h1 style="font-size:1.8em; color:#707070">Digite o número da FA que deseja pesquisar.</h1>
                <form name="" method="post" action="" enctype="multipart/form-data">
   <input type="text" name="nrofa" value="" />
   <span class="glyphicon glyphicon-ok img-circle text-primary btn-icon"></span>
   <input class="btn btn-primary btn-custom" type="submit" name="send" value="pesquisar" >
   


  </form>
  </div>
  </div>
  <?php
if(isset($_POST['send'])){
    $nrofa = $_POST['nrofa'];
}if($nrofa == ''){
    echo "<script language='javascript'> window.alert('Por favor, digite o número da FA!');</script>";
    }else{
        $c = new conectar();
        $conexao = $c->conexao();
        $sql = "SELECT * FROM fornecedores WHERE nrofa = '$nrofa'  ";
        $result = mysqli_query($conexao, $sql);
		if(mysqli_num_rows($result) <= 0){
			echo "<br><br><br><br><h2> FA não Encontrada, verifique a informação inserida! </h2>";
			
		}else{
			while($res_1 = mysqli_fetch_assoc($result)){
                $consumidor = $res_1['consumidor'];
                $fornecedor = $res_1['fornecedor'];
                $relator = $res_1['relator'];
                
                $valor   = $res_1['valor'];
                $valor_2   = $res_1['valor_2'];
                $data   = $res_1['data'];
                $ano   = $res_1['ano'];
                $recurso  = $res_1['recurso'];
       
?>
<div class="col-sm-10">
<table  class="table table-hover table-condensed table-bordered" name="limpar" style="text-align: center;">
<tr style="background-color: SlateGrey;">
<td>Consumidor</td>
<td>Fornecedor</td>
<td>Relator</td>

<td>Valor do 1º Grau</td>
<td>Valor do 2º Grau</td>
 <td>Data</td>
<td>Ano</td>
<td>Recurso</td>
</tr>
<tr>
<td><?php echo $consumidor ?></td>
<td><?php echo $fornecedor; ?></td>
<td><?php echo $relator; ?></td>
<td><?php echo $valor; ?></td>
<td><?php echo $valor_2;?> </td>
<td><?php echo $data;?> </td>
<td><?php echo $ano;?> </td>
<td><?php echo $recurso;?> </td>


</tr>

</table>
<?php 		}	}   } ?>
</div>
            </div>
            
        
        <br>
        <div class="page-header">
            <h1 style="font-size:1.8em; color:#707070"></h1>
        </div>
        <h3><b></b></h3>
        
    </div>
    </div>
    <!--div que carrega do lado direito da página e recebe os valores digitados do lado esquerdo. Note que uma tem col-sm-4 e a outra col-sm-8, o que soma 12-->
    <div class="col-sm-8">
        <div id="tabelaProcessosLoad"></div>
    </div>
    </div>
    </div>






















</body>
<?php require_once "footer.php";?>

</html>

<?php
} else {
    header("location:../index.php");
}

?>

<script type="text/javascript">
$(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
        $('.logo').width(100);
        $('.logo').height(60);
    } else {
        $('.logo').height(100);
        $('.logo').width(150);
    }
});
</script>

});
<script type="text/javascript">
document.getElementById('limpar').reset();
  </script>