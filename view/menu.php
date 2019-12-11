
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Begin Navbar  Menu fixo em toddas as páginas-->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/logo procon.png" alt="" width="170px" height="150px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right"> <!--deixa os ícones do menu posicionados à direita -->

            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li> <!-- a classe active deixa a parte inicio destacada -->

            
          
          <li class="dropdown" >
            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">Teste<span class="caret"></span></a>
          <ul class="dropdown-menu row">
            <li class="col-sm-4" style="min-width:460px;">
              <h4 >2019</h4>
              <a href="fevereiro.php">Janeiro</a>
              <a href="fevereiro.php">Fevereiro</a>
              <a href="março.php">Março</a>
            </li>

            <li class="col-sm-4" style="min-width:460px;">
              <h4>2020</h4>
              <a href="fevereiro.php">Janeiro</a>
              <a href="fevereiro.php">Fevereiro</a>
              <a href="março.php">Março</a>
            </li>

            <li class="col-sm-4" style="min-width:460px;">
              <h4>2021</h4>
              <a href="fevereiro.php">Janeiro</a>
              <a href="fevereiro.php">Fevereiro</a>
              <a href="março.php">Março</a>
            </li>
          </ul>
       
          <li class="dropdown">
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Processos de 1ª e 2ª Câmara <span class="caret"></span></a> -->
              
                <ul class="dropdown-menu">
                  <!-- <li><a href="clientes.php">Dados dos Relatores</a></li> -->
                  
                   
                   
                      
                  <li><a href="fevereiro.php">Janeiro</a></li>
                  <li><a href="fevereiro.php">Fevereiro</a></li>
                  <li><a href="março.php">Março</a></li>
                  <li><a href="abril.php">Abril</a></li>
                  <li><a href="maio.php">Maio</a></li>
                  <li><a href="junho.php">Junho</a></li>
                  <li><a href="julho.php">Julho</a></li>
                  <li><a href="agosto.php">Agosto</a></li>
                  <li><a href="setembro.php">Setembro</a></li>
                  <li><a href="outubro.php">Outubro</a></li>
                  <li><a href="novembro.php">Novembro</a></li>
                  <li><a href="dezembro.php">Dezembro</a></li>

                </ul>
          </li>

          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> 2019 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="clientes.php">Dados dos Relatores</a></li> -->
                
                
                <li><a href="janeiro.php">Janeiro</a></li>
                <li><a href="fevereiro.php">Fevereiro</a></li>
                <li><a href="março.php">Março</a></li>
                <li><a href="abril.php">Abril</a></li>
                <li><a href="maio.php">Maio</a></li>
                <li><a href="junho.php">Junho</a></li>
                <li><a href="julho.php">Julho</a></li>
                <li><a href="agosto.php">Agosto</a></li>
                <li><a href="setembro.php">Setembro</a></li>
                <li><a href="outubro.php">Outubro</a></li>
                <li><a href="novembro.php">Novembro</a></li>
                <li><a href="dezembro.php">Dezembro</a></li>
                </ul>

              
            </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Total por Relator <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="clientes.php">Total</a></li>
              <li><a href="clientes1.php">Janeiro</a></li>
              <li><a href="clientes2.php">Fevereiro</a></li>
              <li><a href="clientes3.php">Março</a></li>
                <li><a href="clientes4.php">Abril</a></li>
                <li><a href="clientes5.php">Maio</a></li>
                <li><a href="clientes6.php">Junho</a></li>
                <li><a href="clientes7.php">Julho</a></li>
                <li><a href="clientes8.php">Agosto</a></li>
                <li><a href="clientes9.php">Setembro</a></li>
                <li><a href="clientes10.php">Outubro</a></li>
                <li><a href="clientes11.php">Novembro</a></li>
                <li><a href="clientes12.php">Dezembro</a></li>

              
            </ul>
          </li>


         
         
          
          
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario:   <span class="caret"></span></a>
            <ul class="dropdown-menu">


              <?php if($_SESSION['usuario'] == "admin"): ?>
            <li> <a href="usuarios.php"><span class="glyphicon glyphicon-off"></span> Gestão Usuários</a></li>
          <?php endif; ?>

              <li> <a style="color: red" href="../procedimentos/sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').width(100);
      $('.logo').height(60);

    }
    else {
      $('.logo').height(100);
      $('.logo').width(150);
    }
  }
  );
</script>