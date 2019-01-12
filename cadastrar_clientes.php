
<html>
    <head>
    <title>Passagem para Rio de janeiro</title>
  
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <!-- adicionar CSS Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="css/estilo.css" rel="stylesheet" media="all">
        
    </head>

    <body> 
    
        <div class="page-header">
        
        <h1><center>Cliente Cadastro com Sucesso!!!</center></h1>
        </div>

<?php
   $nome=$_POST['nome'];
                  $cpf=$_POST['cpf'];
                  $estado=$_POST['estado'];
                  $telefone=$_POST['telefone'];
                  $celular=$_POST['celular'];
                  $cidade=$_POST['cidade'];
                  $email=$_POST['email'];
                  $h=$_POST['hist_viagens'];

                     $numero_acompanhantes=$_POST['numero_acompanhantes'];
                         $data_saida=$_POST['data_saida'];
                  $data_chegada=$_POST['data_chegada'];
                  $valor_passagem=$_POST['vl_passangens'];
                     
$hotel_estrelas=$_POST['select'];

 $con=mysqli_connect('localhost','root','',"viagens") or die(mysqli_error());
//if($nome=="" || $numero_acompanhantes==""  || $cpf=="" ||  $data_chegada=="" || $data_saida==""  || $estado=="" ||  $telefone=="" || $cidade==""  || $email==""  || $h=="" ||  $valor_passagem=="" || $cidade_destino=="" || $hotel_estrelas==""){
// echo "<h1 class='alert-danger' >"."Preencha todos os campos !!!"."</h1>";
// echo "<script type='text/javascript'>alert('Erro. Por favor tente novamente!');window.location.href = 'admin.php';</script>";
// }else{

$query=mysqli_query($con,  "insert into clientes values('','$nome','$cpf','$email','$cidade','$estado','$data_saida','$data_chegada','$valor_passagem','$h','$hotel_estrelas','$numero_acompanhantes')");

$busca=mysqli_query($con,"select * from clientes where cpf='$cpf'");
$resultado=mysqli_fetch_assoc($busca);
$id_telefone=$resultado['id_cliente'];

$query=mysqli_query($con, "insert into contatos values('','$id_telefone','$telefone','$celular')");


 echo "<h1 class='alert-success' >"."Cadastro Realizado !!!"."</h1>";
 echo "<script type='text/javascript'>alert('Cadastro Realizado com Sucesso!');window.location.href = 'admin.php';</script>";
                   // }
                   ?>           
                   </body>
                   </html>