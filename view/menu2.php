<?php require_once "dependencias.php"?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
    .btn-primary {
        background-color: #000000;
    }
    </style>

</head>

<body>


    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
            aria-expanded="false" aria-controls="multiCollapseExample1">2020</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
            aria-expanded="false" aria-controls="multiCollapseExample2">2021</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse"
            aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">2022</button>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <li class="col-sm-4" style="min-width:460px;">
                        <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                            </span>
                            <div class="" id="content">

                                <a style=" text-decoration:none; color:#FFF; " href="janeiro.php">Janeiro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="fevereiro.php">Fevereiro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="marco.php">Março
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="setembro.php">Setembro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="outubro.php">Outubro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF;" href="novembro.php">Novembro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF;" href="dezembro.php">Dezembro
                                    |</a>

                            </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- <li class="col-sm-4" style="min-width:460px;">
                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                        2022</span>
                        <div class="" id="content">
                            <div>
                                <a style=" text-decoration:none; color:#FFF; " href="janeiro.php">Janeiro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="fevereiro.php">Fevereiro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="março.php">Março
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="setembro.php">Setembro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF; " href="outubro.php">Outubro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF;" href="novembro.php">Novembro
                                    |</a>
                                <a style=" text-decoration:none; color:#FFF;" href="dezembro.php">Dezembro
                                    |</a>
                            </div>
                        </div>
                        </ul>
                </li> -->
    </div>
    </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <li class="col-sm-4" style="min-width:460px;">
                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                        </span>
                        <div class="" id="content">

                            <a style=" text-decoration:none; color:#FFF; " href="janeiro.php">Janeiro
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="fevereiro.php">Fevereiro
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="marco.php">Março
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="setembro.php">Setembro
                                |</a>
                            <a style=" text-decoration:none; color:#FFF; " href="outubro.php">Outubro
                                |</a>
                            <a style=" text-decoration:none; color:#FFF;" href="novembro.php">Novembro
                                |</a>
                            <a style=" text-decoration:none; color:#FFF;" href="dezembro.php">Dezembro
                                |</a>

                        </div>
                </li>
            </div>
        </div>
    </div>
    </div>
    <!-- Begin Navbar  Menu fixo em toddas as páginas-->
    <div id="nav">
        <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail"
                            src="../img/logo procon.png" alt="" width="170px" height="150px"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!--deixa os ícones do menu posicionados à direita -->

                        <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span>
                                Inicio</a>
                        </li>


                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="glyphicon glyphicon-list-alt"></span> Gestão Produtos <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="categorias.php">Categorias</a></li>
                                <li><a href="produtos.php">Produtos</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Registros por ano<span
                                    class="caret"></span></a>
                            <!-- o data-toggle="dropdown que permite que o dropdown funcione -->
                            <ul class="dropdown-menu row">
                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2020</span>
                                        <div class="" id="content">

                                            <a style=" text-decoration:none; color:#FFF; " href="janeiro.php">Janeiro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; "
                                                href="fevereiro.php">Fevereiro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="marco.php">Março
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="setembro.php">Setembro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="outubro.php">Outubro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF;" href="novembro.php">Novembro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF;" href="dezembro.php">Dezembro
                                                |</a>

                                        </div>
                                </li>

                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2021</span>
                                        <div class="" id="content">

                                            <a style=" text-decoration:none; color:#FFF; " href="janeiro.php">Janeiro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; "
                                                href="fevereiro.php">Fevereiro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="marco.php">Março
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="setembro.php">Setembro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF; " href="outubro.php">Outubro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF;" href="novembro.php">Novembro
                                                |</a>
                                            <a style=" text-decoration:none; color:#FFF;" href="dezembro.php">Dezembro
                                                |</a>

                                        </div>
                                </li>
                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2022</span>
                                        <div class="" id="content">
                                            <div>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="janeiro.php">Janeiro
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="fevereiro.php">Fevereiro |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="março.php">Março
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="abril.php">Abril
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="maio.php">Maio
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="junho.php">Junho
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="julho.php">Julho
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; " href="agosto.php">Agosto
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="setembro.php">Setembro
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="outubro.php">Outubro
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="novembro.php">Novembro
                                                    |</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="dezembro.php">Dezembro
                                                    |</a>
                                            </div>
                                        </div>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><span
                                            class="glyphicon glyphicon-user"></span> Pessoas <span
                                            class="caret"></span></a> -->
                            <ul class="dropdown-menu">
                                <li><a href="clientes.php">Clientes</a></li>
                                <li><a href="fornecedores.php">Fornecedores</a></li>
                            </ul>
                        </li>



                        </li>

                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Total por Relator<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu row">
                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2020</span>
                                        <div class="" id="content">
                                            <div>

                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes1.php">Janeiro</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes2.php">Fevereiro</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes3.php">Março</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes4.php">Abril</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes5.php">Maio</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes6.php">Junho</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes7.php">Julho</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes8.php">Agosto</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes9.php">Setembro</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes10.php">Outubro</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes11.php">Novembro</a>
                                                <a style=" text-decoration:none; color:#FFF;"
                                                    href="clientes12.php">Dezembro</a>
                                            </div>
                                        </div>
                                </li>

                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2021</span>
                                        <div class="" id="content">
                                            <div>


                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes1.php">Janeiro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes2.php">Fevereiro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes3.php">Março</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes4.php">Abril</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes5.php">Maio</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes6.php">Junho</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes7.php">Julho</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes8.php">Agosto</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes9.php">Setembro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes10.php">Outubro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes11.php">Novembro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes12.php">Dezembro</a>
                                            </div>
                                        </div>
                                </li>

                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">
                                        2022</span>
                                        <div class="" id="content">
                                            <div>


                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes1.php">Janeiro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes2.php">Fevereiro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes3.php">Março</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes4.php">Abril</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes5.php">Maio</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes6.php">Junho</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes7.php">Julho</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes8.php">Agosto</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes9.php">Setembro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes10.php">Outubro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes11.php">Novembro</a>
                                                <a style=" text-decoration:none; color:#FFF; "
                                                    href="clientes12.php">Dezembro</a>
                                            </div>
                                        </div>


                            </ul>

                            <!-- <li><a href="vendas.php"><span class="glyphicon glyphicon-usd"></span> Vendas</a>
                                </li> -->

                        <li class="dropdown">
                            <a href="#" style="color: red" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="glyphicon glyphicon-user"></span>
                                Usuario: <span class="caret"></span></a>
                            <ul class="dropdown-menu">


                                <?php if ($_SESSION['usuario'] == "admin"): ?>
                                <li> <a href="usuarios.php"><span class="glyphicon glyphicon-off"></span> Gestão
                                        Usuários</a></li>
                                <?php endif;?>

                                <li> <a style="color: red" href="../procedimentos/sair.php"><span
                                            class="glyphicon glyphicon-off"></span> Sair</a></li>

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
    } else {
        $('.logo').height(100);
        $('.logo').width(150);
    }
});
</script>