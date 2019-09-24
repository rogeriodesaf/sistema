<?php 

class fornecedores{
	public function adicionar($dados){
		$c = new conectar();
		$conexao=$c->conexao();

		

		$sql = "INSERT into fornecedores (id_usuario, nrofa, consumidor, fornecedor, camara, relator, valor,data,ano) VALUES ('$dados[0]', '$dados[1]', 
		   '$dados[2]',
		   '$dados[3]',
			'$dados[4]',
			'$dados[5]',
			'$dados[6]',
			'$dados[7]',
			'$dados[8]')";


		return mysqli_query($conexao, $sql);
	}




	public function obterDados($id){
		$c = new conectar();
		$conexao=$c->conexao();

		$sql = "SELECT id_fornecedor, nrofa, consumidor, fornecedor, camara, relator, valor,data,ano from fornecedores where id_fornecedor='$id' ";

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
			);

			return $dados;

	}


	public function atualizar($dados){
		$c = new conectar();
		$conexao=$c->conexao();

		

$sql = "UPDATE fornecedores SET nrofa = '$dados[1]', consumidor = '$dados[2]',fornecedor = '$dados[3]',camara = '$dados[4]',relator = '$dados[5]',valor = '$dados[6]',data= '$dados[7]', ano='$dados[8]' where id_fornecedor = '$dados[0]'";


		echo mysqli_query($conexao, $sql);
	}


	public function excluir($id){
		$c = new conectar();
		$conexao=$c->conexao();
		

		$sql = "DELETE from fornecedores where id_fornecedor = '$id' ";

		return mysqli_query($conexao, $sql);
	}

}

?>