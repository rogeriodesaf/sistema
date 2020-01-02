<?php

class processos2
{ //class fornecedores{
    public function adicionar($dados)
    { // ver adicionarProcessos.php na linha 31
        $c = new conectar();
        $conexao = $c->conexao();

        // insira na tabela de fornecedores... esses dados estão indo para a linha 18 de adicionarProcessos. Note que lá a ordem é a mesma e a quantidade de campos também.

        $sql = "INSERT into fornecedores2 (id_usuario, nrofa, consumidor, fornecedor, camara, relator, valor,data,ano,recurso) VALUES ('$dados[0]', '$dados[1]',
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

//função que irá atualizar os dados da janela modal.
    public function obterDados($id)
    { //esse $id tem que ser igual ao da linha 28.
        $c = new conectar();
        $conexao = $c->conexao();

        $sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, camara, relator, valor,data,ano,recurso from fornecedores2 where id_fornecedor='$id' ";

        $result = mysqli_query($conexao, $sql);
        $mostrar = mysqli_fetch_row($result);

        $dados = array(
            'id_fornecedor' => $mostrar[0],
            'nrofa' => $mostrar[1],
            'consumidor' => $mostrar[2],
            'fornecedor' => $mostrar[3],
            'camara' => $mostrar[4],
            'relator' => $mostrar[5],
            'valor' => $mostrar[6],
            'data' => $mostrar[7],
            'ano' => $mostrar[8],
            'recurso' => $mostrar[9],
        );

        return $dados;

    }

//função para atualizar dados no modal.
    public function atualizar($dados)
    {
        $c = new conectar();
        $conexao = $c->conexao();

//o comando UPDATE atualiza os dados.

        $sql = "UPDATE fornecedores2 SET nrofa = '$dados[1]', consumidor = '$dados[2]',fornecedor = '$dados[3]',camara = '$dados[4]',relator = '$dados[5]',valor = '$dados[6]',data= '$dados[7]', ano='$dados[8]' , recurso='$dados[9]'where id_fornecedor = '$dados[0]'";

        echo mysqli_query($conexao, $sql);
    }

    public function excluir($id)
    {
        $c = new conectar();
        $conexao = $c->conexao();

        $sql = "DELETE from fornecedores2 where id_fornecedor = '$id' ";

        return mysqli_query($conexao, $sql);
    }

}