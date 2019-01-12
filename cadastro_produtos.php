  
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
	<div>
  <h3 class="text-center">Painel Administrativo</h3>  
  <ul class="nav nav-tabs">
  <li class="active"><a href="#first-tab" data-toggle="tab" >Cadastro de Clientes</a></li>
  <li><a href="#second-tab" data-toggle="tab" >Consulta</a></li>
</ul>

   

  <div class="tab-pane active in" id="first-tab">
            <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
<form class="form-horizontal"  method="POST" onSubmit="return ( verifica() )  action="cadastro_produtos.php">
  <div class="form-group">
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Nome Completo: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                                
                            </div>
                       </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">CPF: </label>
                            <div class="col-xs-10">
                                   <input type="text" class="form-control"  name="cpf" id="nome" maxlength="14" placeholder="CPF" onKeypress="Mascara_cpf (this);" type="text" required>
                                <span class="help-block">Texto de ajuda para o campo cpf. Por exemplo: xxx.xxx.xxx-xx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Contato 1: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Telefone" maxlength="13" onKeypress="Mascara(this);"" name="telefone" >
                                <span class="help-block">Texto de ajuda para o campo . Por exemplo: (xx) xxxx-xxxx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Contato 2: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Celular" onKeypress="Mascara(this);" maxlength="14" name="celular">
                                <span class="help-block">Texto de ajuda para o campo . Por exemplo: (xx) xxxx-xxxx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Cidade onde resida: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Cidade" name="cidade">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Estado onde reside: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Estado" name="estado">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número da acompanhantes: </label>
                            <div class="col-xs-10">
                                <input type="number" class="form-control" id="nome" placeholder="número" name="numero_acompanhantes">
                                
                            </div>
                       </div>
                       
                       
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">E-mail: </label>
                            <div class="col-xs-10">
                                <input type="email" class="form-control" id="nome" placeholder="E-mail" name="email">
                                
                            </div></div>
<div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Destino: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Destino" name="destino">
                                
                            </div></div>

                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data da saída: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="cidade" placeholder="Data de  saida" name="data_saida">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data da Volta: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="estado" placeholder="Data de chagada" name="data_chegada" >
                                
                            </div>
                           </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Valor da Das Passangens: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Valor da Das Passangens" name="vl_passangens" >
                                
                            </div></div>
                               <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Histórico de Viagens: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Lugares já visitados" name="hist_viagens" >
                                
                            </div></div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número de Estrelas dadas ao Hotel visitado: </label>
          <select name="select">  
     <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
   
   </div>
                        </div>
  <br>
</form>
</select>
<br>
              </div>
                       <div class="form-group">
                           <br><div class="col-xs-offset-2 col-xs-10">
                               <input type="submit" value="Cadastrar">
                           </div>
                       </div>
                   </form>
                    </div>
                    </div>

    <div class="tab-pane" id="second-tab">
     <h1 class="text-center">Listando dados da Tabela</h1>
  <table class="table" >
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
               <th>Hkistórico</th>
         <th>Email</th>
                <th>Alterar</th> 
                <th>Excluir</th>
      </tr>
    </thead>
<?php
 $resultado=mysqli_query($con, "SELECT * FROM cliente");
  if($resultado){
   while($row = mysqli_fetch_assoc($resultado)){
        ?>
    <tbody>
        <tr>
          <td>
          <?php echo "<p></p>".utf8_encode($row['nome']);?>
            </td>
                <td>
              <?php echo "<p></p>".$row['cpf']; ?></td>
                 <td>
              <?php echo "<p></p>".$row['historico']; ?></td>
              <td><?php echo $row['email'];
              ?></td>
               <td><a href="alterar.php?id=<?php echo $row['id_cliente']; ?>">Alterar</a></td>
               <td><a href="excluir.php?id=<?php echo $row['id_cliente']; ?>"><p>X</p></a></td>
            </tr>
            </tbody>
            <?php
        }//fim do while
        }//fim do if
        mysqli_close($conexao);//fecha conexão
        ?>
  </table>
</div>
 <div id="dialog" title="Janela de Dialogo">
    <p align="center">
    
    <button id="opener" class="btn-danger"> <a href="index_teste.php">Sair</a></button>
    </p>
  </div>
</body>
</html>