<?php 

class camaras{
	public function adicionarCamara($dados){
		$c = new conectar();
		$conexao=$c->conexao();

		

		$sql = "INSERT into camara (id_usuario, nome_camara, dataCaptura) VALUES ('$dados[0]', '$dados[1]', 
		   '$dados[2]')";

		return mysqli_query($conexao, $sql);
	}


	public function atualizarCamara($dados){
		$c = new conectar();
		$conexao=$c->conexao();

		

		$sql = "UPDATE camara SET nome_camara = '$dados[1]' where id_camara = '$dados[0]'";

		echo mysqli_query($conexao, $sql);
	}


	public function excluirCamara($idcamara){
		$c = new conectar();
		$conexao=$c->conexao();
		

		$sql = "DELETE from camara where id_camara = '$idcamara' ";

		return mysqli_query($conexao, $sql);
	}

}

?>