<?php
$conexao=mysqli_connect("localhost","root","","agencia_viagens");
if(!$conexao){
	die('Erro ao conecta:' .mysqli_error());
}
mysqli_select_db($conexao,"agencia_viagens");
$id=$_GET['id_cliente'];
$query=mysqli_query($conexao,"DELETE FROM clientes where id_cliente='$id'");
mysqli_close($conexao);
?>