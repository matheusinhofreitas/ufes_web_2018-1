<?php 
	include("conexao.php");
	include("header.php"); 
	include("produto-bd.php");
	
	if(isset($_GET['removido']) && $_GET['removido'] == true){
		echo "Produto excluido";
	}

	$produtos = listarProdutos($conexao);
	
echo "<table>";
	foreach ($produtos as $produto) {
?>
	<tr>
		<td><?=$produto['nome'];?></td>
		<td><?=$produto['preco'];?> </td>
		<td><a href="produtos-remover.php?id=<?=$produto['id'];?>">exluir </td>
	</tr>	


<?php
	}
	echo "</table>";

?>


<?php include("footer.php") ?>