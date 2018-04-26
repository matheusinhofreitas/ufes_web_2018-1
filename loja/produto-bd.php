<?php 
	function removerProduto($conexao, $id){
		$query = "delete from produtos where id={$id}";
		return mysqli_query($conexao, $query);

	}

	function listarProdutos($conexao){
		$produtos = array();
		$query = "select * from produtos";
		$res = mysqli_query($conexao, $query);
		while($produto = mysqli_fetch_assoc($res)){
			array_push($produtos, $produto);
		}
		return $produtos;
	}

	function insereProduto($conexao, $nome, $preco){
		$query = "insert into produtos (nome, preco) value ('{$nome}', '{$preco}')";
		return mysqli_query($conexao, $query);
	}	



 ?>