<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Havean</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<link rel="stylesheet"  href="../jquery/jquery/jquery.mobile-1.4.5.css">
	<!--Folha de estilo utilizada-->
<script src="../js/jquery/jquery-1.12.3.min.js"></script>
	<script src="../js/jquery/jquery.mobile-1.4.5.min.js"></script>
	<!--Scripts Jquery e JqueryMobile-->
	<script src="js/jquery/jquery-ui.js"></script>
	<link href="js/jquery/jquery-ui.css" rel="stylesheet">
<script>
$(function() {
  $( "#tabs" ).tabs();
});
</script>
<script type="text/javascript">
function Mascara (objeto) {
  if (objeto.value.length == 0)
    objeto.value ='('+ objeto.value;

if (objeto.value.length == 3) 
  objeto.value = objeto.value + ')';

if (objeto.value.length == 9) 
  objeto.value = objeto.value + '-';

}

</script>
<script type="text/javascript">
function Mascara_cpf(objeto){

           if(objeto.value.length==0)
              objeto.value='' +objeto.value;

                if(objeto.value.length==3)
                  objeto.value= objeto.value +'.';
                   if(objeto.value.length==7)
                  objeto.value= objeto.value +'.';
                    

                   if(objeto.value.length==11)
                       objeto.value=objeto.value +'-';     
        }  </script>

<script type="text/javascript">
  function verifica() { //verifica se o que o usuarios digitou no campo é veridico
    if (document.forms[0].email.value.length == 0) {
    alert('Por favor, informe o seu EMAIL.');
    document.frmEnvia.email.focus();
    return false;
    }
    return true;
  }
   
  function checarEmail(){
  if( document.forms[0].email.value=="" 
     || document.forms[0].email.value.indexOf('@')==-1 
     || document.forms[0].email.value.indexOf('.')==-1 )
    {
       alert( "Por favor, informe um E-MAIL válido!" );
       return false;  
    }else {//a cornfirmaçao de que o email é valido
      alert("E-mail valido")
    }
  }
</script>	<script src="../js/jquery/jquery/jquery.ui.map.full.min.js"></script>

<script type="text/javascript">
  
function loginsuccessfully(){
  setTimeout("window.location='index_teste.php#myPage'",3000);
}

function loginfailed(){
  setTimeout("window.location='index_teste.php#tour'",3000);
}

</script>


</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="100">

<div  class="container text-center">
<div><img src="imagens/logo.png" alt="New York" style="width: 500px; height:300px;"></div>
</div> 

<?php

$conexao=mysqli_connect('localhost','root','','agencia_viagens') or die(mysqli_error());

$email=$_POST['email'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];


$query=mysqli_query($conexao,"SELECT * FROM clientes WHERE cpf='$cpf'");
$query_tel=mysqli_query($conexao,"SELECT * FROM contatos");
$linha=mysqli_fetch_assoc($query);
$linha2=mysqli_fetch_assoc($query_tel);

$rows=mysqli_num_rows($query);

if($rows>0){

if($linha['email']==$email && $linha2['telefone']==$telefone){

echo "<h1 class='alert-success' >"."<center>Compra realizado com sucesso, boa viagem.</center>"."</h1>";
echo "<script>loginsuccessfully()</script>";

}else{echo "<h1 class='alert'>"."<center>Email ou telefone não existente!!!</center>"."</h1>";
echo "<script>loginfailed()</script>";
}

}else{echo "<h1 class='alert'>"."<center>CPF não existente!!!</center>"."</h1>";
echo "<script>loginfailed()</script>";
}


?>

</body>
</html>
