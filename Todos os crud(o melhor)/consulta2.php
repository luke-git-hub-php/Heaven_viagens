<?php
include 'conecta.php';
$conexao=mysqli_connect("localhost","root","","agencia_viagens");
if(!$conexao){
	die('Erro ao conectar:'. mysqli_error());
}
$query=("SELECT * FROM clientes");
$con=mysqli_query($conexao,$query);
while($linha=mysqli_fetch_array($con)){
	 echo "<br />";
echo $linha['nome'],"<br />";
echo $linha['cpf'],"<br />";
echo $linha['email'],"<br />";
echo "<br />";
}
mysqli_close($conexao);
?>