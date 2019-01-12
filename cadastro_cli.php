  <?php include("header.php");?>
  <div id="sair">
<?php 

   session_start();
   if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
         header("location:index_teste.php");
         exit;          
   }else{
        echo "<center><font color='red'>".'Funcionário logado!'."</font></center>";
   }
?>
</div>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Cadastro de Produtos</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
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
   
  function checarEmail(){//so ira confirma como valido os emails que estiverem de acordo com o que é pedito (no caso "." e " @ ")
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
</script>
	<script src="js/jquery/jquery-1.11.2.min.js"></script>
	<script src="/js/jquery/jquery-ui.js"></script>
	<link href="/js/jquery/jquery-ui.css" rel="stylesheet">
	<script>
	//Aplica o padrão da animação e velocidade para exibição do efeito
	$.fx.speeds._default =1000;
	$($function() {
		$("#dialog" ).dialog({
           autoOpen: false,
           show: "blind",
           hide: "explode"
		});
		$( "#opener" ).click(function() {
            $( "#dialog" ).dialog( "open" );
            return false;
		});
	});
	</script>
	</script>
	 
	
<?php include("conecta.php");
 $conexao=mysqli_connect("localhost","root","","agencia_viagens")
  or print(mysqli_error());
?>

</head>
<body>
	
<div class="col-md-8 form-group" >

<h1 class="text-center">Formulário de cadastro de Clientes</h1>
<form method="POST" action="cadastrar_clintes_admin.php" onSubmit="return ( verifica() ) class="form-horizontal"> 
      <div class="row">

        <div class="col-sm-8 form-group">
          <input class="form-control" id="name" name="usuario" placeholder="nome" type="text" required><br>
            <input class="form-control" id="name" name="cpf" maxlength="14" placeholder="CPF"  onKeypress="Mascara_cpf (this);" type="text" required>
            <br>
            <input class="form-control" id="name" name="email" placeholder="E-mail" type="email" onblur="checarEmail();" required>
        </div><br>
        <div class="col-sm-8 form-group">
      
            <input class="form-control" id="name" name="cidade" placeholder="Cidade" type="text" required>
            <br>
            <input class="form-control" id="name" name="estado" placeholder="Estado" type="text" required><br>
              <input class="form-control" id="name" name="tel" maxlength="14" placeholder="Telefone" type="text"  onKeypress="Mascara(this);" required><br>
               <input class="form-control" id="name" name="cel" maxlength="14" placeholder="Telefone 2" type="text"  onKeypress="Mascara(this);" required><br>
          <input class="form-control" id="email" maxlength="8" name="senha" placeholder="senha" type="password" required><br>
        </div>
     
      <br><br>
      <div class="row">
        <div class="col-md-8 form-group">
          <button class="btn pull-right" type="submit">Entrar</button>
        </div>
      </div>
    </div>
     </form>
  </div>
  <br><br>

<div class="table-hover">
<h1 class="text-center">Listando dados da Tabela</h1>
	<table class="table table-striped table-bordered table-condensed table-hover" >
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
        <th>historico</th>
                <th>Alterar</th> 
                <th>Excluir</th>
			</tr>
		</thead>
<?php
 $resultado=mysqli_query($conexao, "SELECT * FROM clientes");
  if($resultado){
   while($row = mysqli_fetch_assoc($resultado)){
      	?>
   	<tbody>
      	<tr>
       		<td>
       		<?php echo "<p></p>".utf8_encode($row['nome']);?>?>
      			</td>
          			<td>
       				<?php echo "<p></p>".utf8_encode($row['cpf']);?></td>
       				<td><?php echo '<a href="historico.php">'."Historico".'</a>';
       				?></td>
               <td><a href="alterar.php?id=<?php echo $row['id_cliente'];?>">Alterar</a></td>
               <td><a href="excluir.php?id=<?php echo $row['id_cliente'];?>"><p>X</p></a></td>
          	</tr>
            </tbody>
            <?php
        }//fim do while
        }//fim do if
        mysqli_close($conexao);//fecha conexão
        ?>
	</table>
</div>

<div>

 <div id="dialog" title="Janela de Dialogo">
    <p align="center">
    
    <button id="opener" class="btn-cadastrar"> <a href="logout_area_restrita.php">Sair</a></button>
    </p>
  </div>
	<?php include("footer.php");?>
</body>
</html>