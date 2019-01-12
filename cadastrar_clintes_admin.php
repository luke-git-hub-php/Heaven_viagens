<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
  
function loginsuccessfully(){
  setTimeout("window.location='index_teste.php#tour'",3000);
}

function loginfailed(){
  setTimeout("window.location='index_teste.php#cads'",3000);
}

</script>



<?php 
include("conecta.php");
?></head>
<body>
  

<?php
 $conexao=mysqli_connect("localhost","root","","agencia_viagens")
  or print(mysqli_error());
$fild_nome=$_POST['usuario'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$senha=$_POST['senha'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];
//Enviar uma query

if($fild_nome=="" || $cpf==""  || $cidade=="" || $cidade=="" || $estado==""  || $tel==""  ){
echo "<h1 class='alert-danger' >"."Preencha todos os campos !!!"."</h1>";
echo "<script>loginfailed()</script>";
    /*echo "<script language='javascript' type='text/javascript'>
   window.location.href='cadastro_produtos.php';
  </script>";*/
}else{

 $cadastraimg=mysqli_query($conexao,  "INSERT INTO clientes VALUES ('','$fild_nome','$cpf','$email','$cidade','$estado','$senha')"); 
       $select = mysqli_query($conexao, "SELECT * from clientes where cpf='$cpf'");
    while($linha = mysqli_fetch_assoc($select)){
        $id = $linha['id_cliente'];
        $cadastro_tel=mysqli_query($conexao, "INSERT INTO contatos VALUES ('','$id','$tel','$cel')");
      }
   echo "<h1 class='alert-success' >"."Cadastro realizado com sucesso !!!"."</h1>";
   echo "<script>loginsuccessfully()</script>";
   /*echo "<script language='javascript' type='text/javascript'>
    alert('Cliente CADASTRADO COM SUCESSO');window.location.href='cadastro_produtos.php';
  </script>";*/

 }
mysqli_close($conexao);?>

</body>
</html>