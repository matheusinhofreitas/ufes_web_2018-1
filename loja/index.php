<?php include("header.php") ?>

<form action="/loja/produtos-insere.php" method="POST">
  Nome:<br>
  <input type="text" name="nome" >
  <br>
  preço<br>
  <input type="number" name="preco" >
  <br><br>
  <input type="submit" value="Submit">
</form> 

<?php include("footer.php") ?>