<?php
$conexao=mysqli_connect("localhost","root","","agencia_viagens");
if(!$conexao){
  die('Erro ao conecta:' .mysqli_error());
}
mysqli_select_db($conexao,"agencia_viagens");
$id=$_POST["id_cliente"];
$nome=$_POST['nome'];
$email=$_POST['email'];
$query=mysqli_query($conexao,"UPDATE clientes SET nome='$nome', email='$email' 
	WHERE id_cliente='$id'");
mysqli_close($conexao);
?>