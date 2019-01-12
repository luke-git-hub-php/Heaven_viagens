<?php
$conexao = mysqli_connect("localhost","root","","agencia_viagens") or die(mysql_error());
$nome=$_POST["nome"];
$email=$_POST["email"];
$query = mysqli_query($conexao,"SELECT  nome,email from clientes where nome = '$nome' and email ='$email'")or die(mysql_error());
$numrow = mysqli_num_rows($query);
if($numrow > 0)
{
 while($row=mysqli_fetch_array($query))
 {
    if($row['nome'] == $nome || $row['email']==$email)
    { 
       echo"<script>alert('Nome e E-mail encontrados');</script>";
        echo "<br />";
echo $nome,"<br />";
echo $email,"<br />";
echo "<br />";
    }
 }
}
else
{
    echo "<script>alert('cliente não cadastrado!!!');</script>";
}
mysqli_close($conexao);
?>