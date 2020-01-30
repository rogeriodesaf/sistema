<?php

class processos2
{ //class fornecedores{
    public function adicionar($dados)
    { // ver adicionarProcessos.php na linha 31
        $c = new conectar();
        $conexao = $c->conexao();

        // insira na tabela de fornecedores... esses dados estão indo para a linha 18 de adicionarProcessos. Note que lá a ordem é a mesma e a quantidade de campos também.

        $sql = "INSERT into fornecedores2 (id_usuario, nrofa2, consumidor2, fornecedor2,  relator2, valor2,valor_seg,data2,ano2,recurso2) VALUES ('$dados[0]', '$dados[1]',
        '$dados[2]',
        '$dados[3]',
         '$dados[4]',
         '$dados[5]',
         '$dados[6]',
         '$dados[7]',
         '$dados[8]',

         '$dados[9]')";

        return mysqli_query($conexao, $sql);
        // isso gera por padrão o valor 1. Lá nas páginas dos meses se a função for 1 é porque os dados foram adicionados.
    }
    public function limpar_texto($str)
    {
        return preg_replace("/[^0-9]/", "", $str);}
//função que irá atualizar os dados da janela modal.
    public function obterDados($id)
    { //esse $id tem que ser igual ao da linha 28.
        $c = new conectar();
        $conexao = $c->conexao();

        $sql = "SELECT id_fornecedor2, nrofa2, consumidor2, fornecedor2, relator2, valor2, valor_seg, data2,ano2,recurso2 from fornecedores2 where id_fornecedor2='$id' ";

        $result = mysqli_query($conexao, $sql);
        $mostrar = mysqli_fetch_row($result);

        $dados = array(
            'id_fornecedor2' => $mostrar[0],
            'nrofa2' => $mostrar[1],
            'consumidor2' => $mostrar[2],
            'fornecedor2' => $mostrar[3],
            'relator2' => $mostrar[4],
            'valor2' => $mostrar[5],
            'valor_seg' => $mostrar[6],
            'data2' => $mostrar[7],
            'ano2' => $mostrar[8],
            'recurso2' => $mostrar[9],
        );

        return $dados;

    }

//função para atualizar dados no modal.
    public function atualizar($dados)
    {
        $c = new conectar();
        $conexao = $c->conexao();

//o comando UPDATE atualiza os dados.

        $sql = "UPDATE fornecedores2 SET nrofa2 = '$dados[1]', consumidor2 = '$dados[2]',fornecedor2 = '$dados[3]',relator2 = '$dados[4]',valor2 = '$dados[5]',valor_seg = '$dados[6]',data2= '$dados[7]', ano2='$dados[8]' , recurso2='$dados[9]'where id_fornecedor2 = '$dados[0]'";

        echo mysqli_query($conexao, $sql);
    }

    public function excluir($id)
    {
        $c = new conectar();
        $conexao = $c->conexao();

        $sql = "DELETE from fornecedores2 where id_fornecedor2 = '$id' ";

        return mysqli_query($conexao, $sql);
    }

}