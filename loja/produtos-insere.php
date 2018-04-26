<?php 
	include("header.php"); 
	include("conexao.php");
	include("produto-bd.php");
	

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];

	
	
	if(insereProduto($conexao, $nome ,$preco)){
		echo "O produto: {$nome},{$preco} foi adicionado";
	}
	else{
		$msg = mysqli_error($conexao);
		echo "Erro ao inserir produto<br>";
		echo $msg;
	}
	
?>


<?php include("footer.php") ?>
