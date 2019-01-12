<?php
$nome=$_POST['nome'];
$idade=$_POST['idade'];
$email=$_POST['email'];
$conexao=mysqli_connect("localhost","root","","escola2");
$query=mysqli_query($conexao,"INSERT INTO alunos(matricula,nome,idade,email) VALUES('','$nome','$idade','$email')");
if($query){
  echo '<script>alert("CADASTRO REALIZADO COM SUCESSO!")</script>';
}
mysqli_close($conexao);
?>