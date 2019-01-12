<?php

$conexao=mysqli_connect("localhost","root","","viagens") or die(mysqli_error());

$id=$_GET['id'];
$nome=$_GET['nome'];
$cpf=$_GET['cpf'];
$email=$_GET['email'];
$cidade=$_GET['cidade'];
$estado=$_GET['estado'];
$h=$_GET['historico_viagens'];
$data_saida=$_GET['data_saida'];
$data_chegada=$_GET['data_chegada'];
$valor_passagem=$_GET['valor_passagem'];
$num_a=$_GET['numero_acompanhantes'];
$estrelas_hotel=$_GET['estrelas_hotel'];
$telefone=$_GET['telefone'];
$celular=$_GET['celular'];



$query=mysqli_query($conexao, "UPDATE clientes set nome='$nome', cpf='$cpf', email='$email', cidade='$cidade', estado='$estado', data_saida='$data_saida', data_volta='$data_chegada',Valor_passagem='$valor_passagem', historico_viagens='$h' ,   estrelas_hotel='$estrelas_hotel' , numero_acompanhantes='$num_a' where id_cliente='$id'");

$query=mysqli_query($conexao, "update contatos set telefone='$telefone', celular='$celular' where id_cliente='$id'");
echo "<script language='javascript' type='text/javascript'>
 	  alert('Alterada as  informções do Cliente com SUCESSO!!!');window.location.href='admin.php';
 	</script>";

?>