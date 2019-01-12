<?php
$conexao=mysqli_connect("localhost","root","","agencia_viagens");
if(!$conexao){
	die('Erro ao conecta:' .mysqli_error());
}

$query=mysqli_query($conexao,"SELECT * FROM clientes");
while($linha=mysqli_fetch_assoc($query)){
  ?>
  <a href="editar1.php?id=<?php echo $linha['id_clientes'];?>">
  <?php echo $linha['nome']."-".$linha['email']."<br/>";?>
  </a>
  <?php
}
mysqli_close($conexao);
?>