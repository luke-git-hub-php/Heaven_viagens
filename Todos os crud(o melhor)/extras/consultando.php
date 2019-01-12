<?php
$conexao=mysqli_connect("localhost","root","","escola2");
$consulta=$_POST['nome'];
$query=mysqli_query($conexao,"SELECT * FROM alunos where nome='$consulta' ");
if($query){
	 while($linha=mysqli_fetch_assoc($query)){
		 echo $linha['nome'];
	 }
}
mysqli_close($conexao);
?>	