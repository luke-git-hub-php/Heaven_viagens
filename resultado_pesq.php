  <head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
<?php 

   session_start();
   if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
         header("location:index_teste.php");
         exit;          
   }else{
        echo "<center><font color='black'>".'Funcionário logado!'."</font></center>";
   }
?>
	<div class="container">
<br><br>
<div class="col-lg-12">	
            <h2 class="page-header" align="center">Resultados</h2>
            </div>
			<?php	
$con=mysqli_connect('localhost','root','','viagens');
?>
<table border="1" class="table table-hover" >
      <tr>
        <th>Nome</th>
        <th>CPF</th>
                    <th>Email</th>
                                 <th>1º Viagem</th>
                                      <th>Data de Saída</th>
                                      <th>Data de volta</th>
                                      <th>Acompanhantes</th>
                                      <th>Valor da Passagem</th>
                                      
      </tr>
<?php
	@$consulta = $_POST['pesquisar'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cliente = "SELECT * FROM clientes WHERE nome LIKE '%$consulta%'  or cpf LIKE  '%$consulta%'";
	$resultado_cli = mysqli_query($con, $cliente);         
	
	if(mysqli_num_rows($resultado_cli) <= 0){
		echo "Nenhum dado encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cli)){
						?>
        <tr>
          <td class="text-info">
          <?php echo "<p></p>".utf8_encode($rows['nome']);?>
            </td>
                <td class="text-danger">
              <?php echo "<p></p>".$rows['cpf']; ?></td>
                        <td class="text-warning"><?php echo $rows['email'];
              ?></td>
                                              
                        <td class="text-warning"><?php echo " <p></p> ".$rows['historico_viagens']; ?></td>
                           <td class="text-warning"><?php echo "  <p></p> ".substr($rows['data_saida'], 8, 2) . " / ". substr($rows['data_saida'], 5, 2) . " / ". substr($rows['data_saida'], 0, 4); ?></td>
                              <td class="text-warning"><?php echo "  <p></p> ".substr($rows['data_volta'], 8, 2) . " / ". substr($rows['data_volta'], 5, 2) . " / ". substr($rows['data_volta'], 0, 4); ?></td>
                                       <td class="text-warning"><?php echo " <p></p> ".$rows['numero_acompanhantes']; ?></td>
                                           
                        <td class="text-warning"><?php echo $rows['Valor_passagem'];
              ?></td>
              
            </tr>
            
  	<?php
        }//fim do while
        }//fim do if
        mysqli_close($con);//fecha conexão
        ?>
</table>
</div>
<div id="dialog" title="Janela de Dialogo">
    <p align="center">
    
    <button id="opener" class="btn btn-warning"> <a href="index_teste_original.php">Sair</a></button>
    </p>
  </div>
<?php require("footer.php");?>
</boby>
</html>
