<?php
session_start();
if (isset($_SESSION['usuario'])) {

    ?>
<!--verificação para saber se existe usuário logado-->


<!DOCTYPE html>
<html>

<head>
    <title>Processos Março</title>
    <?php require_once "menu.php";?>
</head>

<div class="container">
    <h1>Processos</h1>
    <div class="row">
        <div class="col-sm-4">
            <form id="frmProcessos2">
                <label>N° FA</label>
                <input type="number" class="form-control input-sm" id="nrofa2" name="nrofa2">
                <label>Consumidor</label>
                <input type="text" class="form-control input-sm" id="consumidor2" name="consumidor2">
                <label>Fornecedor</label>
                <input type="text" class="form-control input-sm" id="fornecedor2" name="fornecedor2">
                <label>Grau da Sessão</label>
                <select class="form-control input-sm" id="camara2" name="camara2">
                    <option>1 </option>
                    <option> 2 </option>
                </select>
                <label>Recurso</label>
                <select class="form-control input-sm" id="recurso2" name="recurso2">
                    <option>Tempestivo </option>
                    <option> Intempestivo </option>
                </select>
                <label>Relatores</label>
                <select class="form-control input-sm" id="relator2" name="relator2">


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
                <input type="number" class="form-control input-sm" id="valor2" name="valor2">
                <label>Data De Julgamento</label>
                <input type="date" class="form-control input-sm" id="data2" name="data2">
                <label>Ano</label>
                <input type="number" class="form-control input-sm" id="data2" name="ano2">
                <p></p>
                <span class="btn btn-primary" id="btnAdicionarProcessos2">Salvar</span>
                <!-- btnAcidionarFornecedores é o botão entrar que ao ser clicado carregará a div tabelaFornecedores na linha 138 -->
            </form>
        </div>
        <div class="col-sm-8">
            <div id="tabelaProcessosLoad2"></div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="abremodalProcessosUpdate2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Atualizar Processo</h4>
            </div>
            <div class="modal-body">
                <form id="frmProcessos2U">
                    <input type="text" hidden="" id="idprocesso2U" name="idprocesso2U">
                    <label>nroFA</label>
                    <input type="number" class="form-control input-sm" id="nrofa2U" name="nrofa2U">
                    <label>Consumidor</label>
                    <input type="text" class="form-control input-sm" id="consumidor2U" name="consumidor2U">
                    <label>Fornecedor</label>
                    <input type="text" class="form-control input-sm" id="fornecedor2U" name="fornecedor2U">
                    <label>Câmara</label>
                    <input type="text" class="form-control input-sm" id="camara2U" name="camara2U">
                    <label>Relator</label>
                    <input type="text" class="form-control input-sm" id="relator2U" name="relator2U">
                    <label>Recurso</label>
                    <select class="form-control input-sm" id="recurso2U" name="recurso2U">
                        <option>Tempestivo </option>
                        <option> Intempestivo </option>
                    </select>
                    <label>Valor</label>
                    <input type="number" class="form-control input-sm" id="valor2U" name="valor2U">
                    <label>Data De julgamento</label>
                    <input type="date" class="form-control input-sm" id="data2U" name="data2U">
                    <label>Ano</label>
                    <input type="number" class="form-control input-sm" id="ano2U" name="ano2U">
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnAdicionarProcesso2U" type="button" class="btn btn-primary"
                    data-dismiss="modal">Atualizar</button>

            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php";?>
</body>

</html>
<!-- Adicionar dados -->
<script type="text/javascript">
function adicionarDado(idprocesso2) {

    $.ajax({
        type: "POST",
        data: "idprocesso2=" + idprocesso2,
        url: "../procedimentos/processos/obterDadosProcessos2.php",
        success: function(r) {



            dado = jQuery.parseJSON(r);


            $('#idprocesso2U').val(dado['id_fornecedor2']);
            $('#nrofa2U').val(dado['nrofa2']);
            $('#consumidor2U').val(dado['consumidor2']);
            $('#fornecedor2U').val(dado['fornecedor2']);
            $('#camara2U').val(dado['camara2']);
            $('#relator2U').val(dado['relator2']);
            $('#valor2U').val(dado['valor2']);
            $('#data2U').val(dado['data2']);
            $('#ano2U').val(dado['ano2']);
            $('#recurso2U').val(dado['recurso2']);



        }
    });
}
// Eliminar fornecedores
function eliminar(idprocesso2) {
    alertify.confirm('Deseja Excluir este registro?', function() {
        $.ajax({
            type: "POST",
            data: "idprocesso2=" + idprocesso2,
            url: "../procedimentos/processos/eliminarProcessos2.php",
            success: function(r) {



                if (r == 1) {
                    $('#tabelaProcessosLoad2').load(
                        "processos/tabelaProcessosMarco_segunda.php");
                    alertify.success("Excluido com sucesso!!");
                } else {
                    alertify.error("Não foi possível excluir");
                }
            }
        });
    }, function() {
        alertify.error('Cancelado !')
    });
}
</script>
<!-- Código que está na div tabelaFornecedores -->
<script type="text/javascript">
$(document).ready(function() {

    $('#tabelaProcessosLoad2').load("processos/tabelaProcessosMarco_segunda.php");

    $('#btnAdicionarProcessos2').click(function() {

        vazios = validarFormVazio('frmProcessos2');

        if (vazios > 0) {
            alertify.alert(
                "Preencha os Campos!!"
            ); //Se todos os campos da div class container não forem preenchidos chama a função alerta "Preeencha os campos
            return false;
        }

        dados = $('#frmProcessos2').serialize();

        $.ajax({
            type: "POST",
            data: dados,
            url: "../procedimentos/processos/adicionarProcessos2.php",
            success: function(r) {

                if (r == 1) {
                    $('#frmProcessos2')[0].reset();
                    $('#tabelaProcessosLoad2').load(
                        "processos/tabelaProcessosMarco_segunda.php");
                    alertify.success("Registro Adicionado");
                } else {
                    alertify.error("Não foi possível adicionar");
                }
            }
        });
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#btnAdicionarProcesso2U').click(function() {
        dados = $('#frmProcessos2U').serialize();

        $.ajax({
            type: "POST",
            data: dados,
            url: "../procedimentos/processos/atualizarProcessos2.php",
            success: function(r) {


                if (r == 1) {
                    $('#frmProcessos2')[0].reset();
                    $('#tabelaProcessosLoad2').load(
                        "processos/tabelaProcessosMarco_segunda.php");
                    alertify.success("Registro atualizado com sucesso!");
                } else {
                    alertify.error("Não foi possível atualizar registro");
                }
            }
        });
    })
})
</script>


<?php
} else {
    header("location:../index.php");
}
?>