<?php 
$conexao=mysqli_connect("localhost","root","","escola2");
mysqli_close($conexao);
?>
<form method="POST" action="consultando.php">
	<label>Digite o nome para consultar:</label>
	<input type="text" name="nome">
	<input type="submit" value="Consultar">
</form>