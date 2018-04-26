<?php 
	include("conexao.php");
	include("header.php"); 
	include("produto-bd.php");
	

	$id = $_GET["id"];
	if(removerProduto($conexao, $id)){
		header("Location:produtos-listar.php?removido=true");

	}
	else{
		$msg = mysqli_error($conexao);
		echo "Erro ao remover produto<br>";
		echo $msg;
	}