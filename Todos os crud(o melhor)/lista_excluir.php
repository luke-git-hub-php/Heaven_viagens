 <?php
$conexao=mysqli_connect("localhost","root","","agencia_viagens");

$query=mysqli_query($conexao,"SELECT * FROM clientes");
while($linha=mysqli_fetch_assoc($query)){
?>
<a href="deletar.php?id=<?php echo $linha['id_cliente'];?>">
<?php echo $linha['nome']."-".$linha['cpf']."-".$linha['email']."<br/>";?>
</a>
<?php
}
mysqli_close($conexao);
?>