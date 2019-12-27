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
    <style type="text/css">
    .btn-primary {
        background-color: #000000;
    }
    </style>

</head>

<body>

    <!-- Begin Navbar  Menu fixo em toddas as páginas-->
    <!-- <div id="nav">
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
                        <deixa os ícones do menu posicionados à direita -->

    <!--  <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span>
                                Inicio</a>
                        </li>


                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="glyphicon glyphicon-list-alt"></span> Gestão Produtos <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="categorias.php">Categorias</a></li>
                                <li><a href="produtos.php">Produtos</a></li>
                            </ul>
                        </li> -->
    <!--  <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Registros por ano<span
                                    class="caret"></span></a>
                             o data-toggle="dropdown que permite que o dropdown funcione
                            <ul class="dropdown-menu row">
                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2020</span>
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
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2021</span>
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
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2022</span>
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
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><span
                                            class="glyphicon glyphicon-user"></span> Câmaras Recursais <span
                                            class="caret"></span></a> -->
    <!-- <ul class="dropdown-menu">
                            <li><a href="menu3.php">Clientes</a></li>
                            <li><a href="fornecedores.php">Fornecedores</a></li>
                        </ul>
                        </li>
                        <li class="active"><a href="menu3.php"><span class="glyphicon glyphicon-home"></span>
                                Câmaras recursais</a>
                        </li>


                        </li>

                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Total por Relator<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu row">
                                <li class="col-sm-4" style="min-width:460px;">
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2020</span>
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
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2021</span>
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
                                    <h4 span class="btn btn-primary " data-toggle="" data-target="#content">2022</span>
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


                            </ul> -->

    <!-- <li><a href="vendas.php"><span class="glyphicon glyphicon-usd"></span> Vendas</a>
                                </li> -->

    <!-- <li class="dropdown">
        <a href="#" style="color: red" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
            Usuario: <span class="caret"></span></a>
        <ul class="dropdown-menu">


            //<?php //if ($_SESSION['usuario'] == "admin"): ?>
            <li> <a href="usuarios.php"><span class="glyphicon glyphicon-off"></span> Gestão
                    Usuários</a></li>
            //<?php// endif;?>

            <li> <a style="color: red" href="../procedimentos/sair.php"><span class="glyphicon glyphicon-off"></span>
                    Sair</a></li>

        </ul>
    </li>
    </ul>

    </div>
    /.nav-collapse -->
    <!-- </div> -->
    <!--/.contatiner -->
    <!-- </div>
    </div>  -->




    <div class="container">
        <div class="container-fluid">
            <div class="page-header">
                <h1>Registro dos dados referentes aos processos de 1ª e 2ª Câmara</h1>
                <p>Disponibilizamos nesta sessão o acesso a inserção de dados constantes nos processos das decisões de
                    1ª e
                    2ª câmara</p>
            </div>
            <br />
            <div class="panel-group" id="accordion">
                <div class="panel panel-default" style="border-radius: 1px 0 3px 4px;">
                    <div class="panel-heading" id="headingOne" style="background-color: black; ">
                        <h4 class="panel-title" style=" text-decoration:none; color:#FFF; "><a href="#collapseOne"
                                data-toggle="collapse" data-parent="#accordion">
                                1ª
                                Câmara Recursal </a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapseOne">
                        <div class="panel-body">
                            <p>Selecione o ano e mês desejado</p>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp1C019" data-toggle="collapse"
                                            data-parent="#accordion">2020</a></h3>
                                </div>
                                <div class="panel-collapse collapse in" id="clp1C019">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link" href="janeiro.php" target="_blank"
                                                            title=""><span class="internal-link">JAN</span></a></td>
                                                    <td><a class="internal-link" href="fevereiro.php" target="_blank"
                                                            title="Link publicações 1ª Câmara / Fevereiro de 2019">FEV</a>
                                                    </td>
                                                    <td><a class="internal-link" href="março.php" target="_self"
                                                            title="">MAR</a></td>
                                                    <td><a class="internal-link" href="abril.php" target="_self"
                                                            title="">ABR</a></td>
                                                    <td><a class="internal-link" href="maio.php" target="_self"
                                                            title="">MAI</a></td>
                                                    <td><a class="internal-link" href="junho.php" target="_self"
                                                            title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link" href="julho.php" target="_self"
                                                            title="">JUL</a></td>
                                                    <td><a class="internal-link" href="agosto.php" target="_self"
                                                            title="">AGO</a></td>
                                                    <td><a class="internal-link" href="setembro.php" target="_self"
                                                            title="">SET</a></td>
                                                    <td><a class="internal-link" href="outubro.php" target="_self"
                                                            title="">OUT</a></td>
                                                    <td><a class="internal-link" href="novembro.php" target="_self"
                                                            title="">NOV</a></td>
                                                    <td><a class="internal-link" href="dezembro.php" target="_self"
                                                            title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp1C018" data-toggle="collapse"
                                            data-parent="#accordion">2021</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp1C018">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/99a8a792fa5a46cca14465cbb5f515da"
                                                            target="_blank" title=""><span
                                                                class="internal-link">JAN</span></a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f7a7f2cd179e49e19f5f8bae2e7ff52a"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f0d84aa737444d05b811e7f9053ecff1"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/8ce59342dbbb4678b54eb923190362ef"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a98dc56a3f28441c87864839cba765ad"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6738e2175cb3407eb7eb9042dcea6c12"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/29bc1e4aa2054b849efc8b17cafcb5df"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/73b55251029f4f2e80782593daf5de97"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/1f40838ba9d64162a27d6e76044c5015"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/7aee1873098142d59b828c8af13973f3"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a6699a203ee94e98892d0a9d822d0f00"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/325f502f6a754138ba6483d3a11d8990"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp1C017" data-toggle="collapse"
                                            data-parent="#accordion">2022</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp1C017">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/844df7179a2e4d77a0c8d7b0b03e4db7"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/826684a38a6b45b585012d9cb91f5288"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f9b02dc5074745b9bcd5859f9e944f18"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6a56603d92024869bf86743932ceaf08"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/43ec21dd77ba453d8d9c7ff52fb04b31"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f57a82f77429429091e5ae68b21147ef"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/674d9bfb6ff6497fa65846b49780be18"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/43c22882f4dc464298b8722054c59d76"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a9fd2c5c3bb048e78f34cbd1777ff750"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/644eab6058de4bcc92b30ba12f5fa463"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/bbdb672702074d73a258e5795e34fdbe"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/955e8cf762c04a4690ae0e1c29112669"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp1C016" data-toggle="collapse"
                                            data-parent="#accordion">2023</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp1C016">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6431035b570143c98342898022737a4a"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a46bfd36f27b431b9cb3fd9550aa975d"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/77b43d1ed8e048e98dd2892f72de87ed"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/5e5316538b7b4547900da192d41fc821"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/90895c71bd924052af2865ec3c238bc1"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/ae470eecca1d40d79afa5763cec8eda8"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/5fa3028f71f24caa9c8d79250f9951fa"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/8a11d27088d74dd991a02f586dfadb0d"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/23d485caec754811ba601ba7d82a6749"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/7fb12ad1e5eb4024a12f88de57711aa0"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a9ef93bd484641b799cd6f580cd7798f"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/8500606fe6e04db0992a96f296a725f8"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp1C015" data-toggle="collapse"
                                            data-parent="#accordion">2024</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp1C015">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/b4780b103e184ca0b1e5a33ddb733640"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/0c2941618e87408db9f456cd5576ff4a"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/d7d3f13dbfb6472f983b2f8dad016f0f"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/29199686a0a3420483ee2f142e54ecf3"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/3a52472e074d48c9b3bf3cc0e78840ba"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/b760910b2d0046a183cff1e645a57aae"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6168dab23f554fd0a65a2481ea27642c"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/7cf58816b09c495b85e80860bbbdf8f1"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/53214d92219140989d77b50de3168a0b"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/91ec31f9d5694ef38d011cc42d26f061"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/65515454cfa1426180d193fe159d57f7"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/e2caf8178cbd4c4783ab557ddc065544"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="panel panel-default">
                    <div class="panel-heading" id="headingTwo" style="background-color: black;">
                        <h3 class="panel-title" style=" text-decoration:none; color:#FFF; "><a class="collapsed"
                                href="#collapseTwo" data-toggle="collapse" data-parent="#accordion"> 2ª Câmara Recursal
                            </a></h3>
                    </div>
                    <div class="panel-collapse collapse in" id="collapseTwo">
                        <div class="panel-body">
                            <p>Selecione o ano e mês desejado</p>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp2C019" data-toggle="collapse"
                                            data-parent="#accordion">2020</a></h3>
                                </div>
                                <div class="panel-collapse collapse in" id="clp2C019">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><span class="internal-link"><a class="internal-link"
                                                                href="resolveuid/077da5c5c0d54126b43c5642f41e4e95"
                                                                target="_blank"
                                                                title="Link publicações 2ª Câmara / Fevereiro de 2019">JAN</a></span>
                                                    </td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a024b6a1e66146d282647c5f2a77edcc"
                                                            target="_blank"
                                                            title="Link publicações 2ª Câmara / Fevereiro de 2019">FEV</a>
                                                    </td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/981ff98c812844508662faeee8316d03"
                                                            target="_self" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/ebb062d9eecd4b3eaed3453b9af57fed"
                                                            target="_self" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f27b56c212754f5492a2977f82679e8b"
                                                            target="_self" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/29bcc76b592445e7af08852a8f841265"
                                                            target="_self" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/1e85123f9edb4c10ba982b89aaaf80a7"
                                                            target="_self" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/4a262a8e321b460eb82e3c73b88b0227"
                                                            target="_self" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6dcc35eee8bc4f6d87b1d021dfdc19a6"
                                                            target="_self" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/9cb492a7d12e40f8845e2376a6a54ec0"
                                                            target="_self" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/8924828a8437423ebad12dae0adad9a8"
                                                            target="_self" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/16250e4282cb4314b52b0c6e82e030a2"
                                                            target="_self" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp2C018" data-toggle="collapse"
                                            data-parent="#accordion">2021</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp2C018">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a15dc775104f4918b90462313c5d4641"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/c9c290ff8931478caf4e836492a4ae17"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/61d329a4f039415b91555dca094edcf1"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/f36efd1e49e4482b8cb07856a135f1e8"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/eff04bbc9ea54f03a8ff19afaea7149a"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/27dfb8e8103f41979e529871088e8687"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/b2e9beb901f142dc8d9889a0bfedeaf6"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/9d6f1990bdb74eb988ccee1b0a8841ea"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/9893ed00cc98481da3ee295f7e2d27e1"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/71fc6d15e864413ba1dccf96fbb50e35"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/ebe2ecb19e184d91966bf120761fca34"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6afecd1e38884a84ac27218ee84bb567"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp2C017" data-toggle="collapse"
                                            data-parent="#accordion">2022</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp2C017">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/e290c2bbb9ba4fcaabba1da6d9c5076f"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6aadaf69de864752aa65dedd312fd282"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/26000d8f8ca34a5eb0a79a24ad7fa547"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/2fa4641398e544edadba7b6a408245ae"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/865abb39b1324512895bdad812ba82bb"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/698fe24dfb5f4d43ac07f07581b93cba"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/8773719e546244408bc61644f6b445c3"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/d546efad866e47b0bcfc21d01b63fbd0"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/57da27f37a1142698148480900e0b645"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/9cc315383c414c4a8a1edac93e944d0d"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/82fa908e13cb48309ee1a717590e1ebf"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/265b2cf00b3b463d98281d42d3c39774"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp2C016" data-toggle="collapse"
                                            data-parent="#accordion">2023</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp2C016">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/226351d3aafd48d881f2bdaf8a17e422"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/d143f6aab07a455081237a83dd72f0f2"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/597ffab62f044ac8ae29b8de81c5e371"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/d646b79fd2fb4fbf8aa1c0b856aba5c6"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/b427989b16e94797be0dd554be31d4a6"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/db5a40f0f47f4478beb4b45ba9d285f1"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/efe9708dd7d94625b0c53453d63431a6"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/6c3cc6b5cb124649b39b491d38c83864"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/84d957e659b840ec84452caaf754f0fd"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/985055790adf480fb18cd26068ca652e"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/80574ab9ae054a5dbd6782ff9fc98c9d"
                                                            target="_blank" title="">NOV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/099233eaa2794e319ed1decdc7d6bbc4"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <h3 class="panel-title"><a href="#clp2C015" data-toggle="collapse"
                                            data-parent="#accordion">2024</a></h3>
                                </div>
                                <div class="panel-collapse collapse" id="clp2C015">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/7743af3665d24f4b841dbaa0835665a6"
                                                            target="_blank" title="">JAN</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/4a715fba41ea48ea9d3ade2a69447631"
                                                            target="_blank" title="">FEV</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/70465ff64e8949658247bf44f26d39f6"
                                                            target="_blank" title="">MAR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/e5477a86a8514af4948fbf308496608e"
                                                            target="_blank" title="">ABR</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/a8fc33e3f05c47339faa883f4b7a3f0d"
                                                            target="_blank" title="">MAI</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/e9b78203069f4adf890f9af0343e0fa8"
                                                            target="_blank" title="">JUN</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/4d4a8715b478443692d426e21a678b46"
                                                            target="_blank" title="">JUL</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/5f3322ebd47049d3ab95a3375439fbda"
                                                            target="_blank" title="">AGO</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/107be195294747638d715510b1f269bf"
                                                            target="_blank" title="">SET</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/b952c37b00254d9e8ad831b6d20b83fa"
                                                            target="_blank" title="">OUT</a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/03f16b16b76d4496b9077bff35dfdb47"
                                                            target="_blank" title="">N<span
                                                                class="internal-link">OV</span></a></td>
                                                    <td><a class="internal-link"
                                                            href="resolveuid/3eeca9c5c85143da9e890261c77b81ba"
                                                            target="_blank" title="">DEZ</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

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