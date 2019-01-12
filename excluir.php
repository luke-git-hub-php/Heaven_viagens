<?php

include('header.php');

$conexao=mysqli_connect("localhost","root","","viagens") or die(mysqli_error());

$id=$_GET['id'];

$query1=mysqli_query($conexao,"delete from contatos where id_cliente='".$id."'");
$query2=mysqli_query($conexao,"delete from clientes where id_cliente='".$id."'");
echo '<meta charset=UTF-8>
<script> alert("Registro excluído")</script>';
echo "<script>
window.location=\"admin.php\"
</script>
";

include('footer.php');
?>