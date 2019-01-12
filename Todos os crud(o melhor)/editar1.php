<?php
$conexao=mysqli_connect("localhost","root","","agencia_viagens");
if(!$conexao){
  die('Erro ao conecta:' .mysqli_error());
}
mysqli_select_db($conexao,"agencia_viagens");
$id=$_GET['id_cliente'];
$query=mysqli_query($conexao,"SELECT * FROM clientes WHERE id_cliente='$id'");
while($linha=mysqli_fetch_assoc($query)){
  ?>
   <form method="POST" action="editar2.php">
  <input  type="hidden" name="id" value="<?php echo $linha['id_cliente'];?>">
  <input  type="text" name="nome" value="<?php echo $linha['nome'];?>">
  <input  type="text" name="email" value="<?php echo $linha['email'];?>">
  <input  type="submit" value="Editar">
  </form>
  <?php
}
mysqli_close($conexao);
?>