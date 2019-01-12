  
  <div id="sair">
<?php 

   session_start();
   if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
         header("location:index_teste.php");
         exit;          
   }else{
        echo "<center><p style='color:black;  font-size:24px; margin-top:50px;'>".'Funcionário logado!'."</font></center>";
   }
?>
</div>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery/jquery-ui.js"></script>
	<link href="js/jquery/jquery-ui.css" rel="stylesheet">


<script type="text/javascript">
function Mascara (objeto) {
  if (objeto.value.length == 0)
    objeto.value ='('+ objeto.value;

if (objeto.value.length == 3) 
  objeto.value = objeto.value + ')';

if (objeto.value.length == 9) 
  objeto.value = objeto.value + '-';

}

function Mascara_cpf(objeto){

           if(objeto.value.length==0)
              objeto.value='' +objeto.value;

                if(objeto.value.length==3)
                  objeto.value= objeto.value +'.';
                   if(objeto.value.length==7)
                  objeto.value= objeto.value +'.';
                    

                   if(objeto.value.length==11)
                       objeto.value=objeto.value +'-';     
        }

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
	
	 
	
<?php
 $conexao=mysqli_connect("localhost","root","","viagens")
  or die(mysqli_error());
$conecta=mysqli_connect("localhost","root","","cidades_e_estados")
or print(mysqli_error());
?>

</head>

<style type="text/css">
  body{
    background: url(imagens/aviao.jpg);
    background-size: cover;
}
</style>

<body>
<font color="white">
	<div>
  <h1 class="text-center">Painel Administrativo</h1>  
            <div class="container">
                    <div class="row">
                    <h3 class="text-center">Cadastro de Clientes</h3>  
                        <div class="col-xs-12">
<form class="form-horizontal"  method="POST" onSubmit="return ( verifica() )"  action="cadastrar_clientes.php">
  <div class="form-group">
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Nome Completo: * </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
                                
                            </div>
                       </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">CPF:  *</label>
                            <div class="col-xs-10">
                                   <input type="text" class="form-control"  name="cpf" id="nome" maxlength="14" placeholder="CPF" onKeypress="Mascara_cpf (this);" type="text" required>
                                <span class="help-block" style="color: black;" >Texto de ajuda para o campo cpf. Por exemplo: xxx.xxx.xxx-xx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Contato 1: * </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="1º contato" maxlength="14" onKeypress="Mascara(this);"" name="telefone" required>
                                <span class="help-block" style="color: black">Texto de ajuda para o campo . Por exemplo: (xx) xxxx-xxxx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Contato 2: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="2º contato" onKeypress="Mascara(this);" maxlength="14" name="celular">
                                <span class="help-block" style="color: black">Texto de ajuda para o campo . Por exemplo: (xx) xxxx-xxxx</span> 
                            </div>
                       </div>
                         </font>
                            <div class="form-group">
                                        <div class="col-xs-10">
                            <label for="nome" class="col-xs-2 control-label"><font color="white">Estado onde reside: </font></label>
                                 <select name="estado" class="control-label">
    <?php 
    $result=mysqli_query($conecta,  "SELECT * FROM tb_estados");
    while($linha=mysqli_fetch_assoc($result)) {
          ?>
    <option class="form-control" value="<?php echo $linha['uf']; ?>"><?php echo utf8_encode($linha['nome'])." - ".$linha['uf'];?></option>
    <?php }?>
   </select>
    <p></p>
                        
                                
                            </div>
                       </div>
                       </div>
                   <font color="white">
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Cidade onde resida: *</label>
                            <div class="col-xs-10" >
                                <input type="text" class="form-control" id="nome" placeholder="Cidade" name="cidade" required>
                                
                            </div>
                       </div>                 
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">E-mail: *</label>
                            <div class="col-xs-10">
                                <input type="email" class="form-control" id="nome" placeholder="E-mail" name="email" onblur="checarEmail();" required>
                                
                            </div></div>
  <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Viagens: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Lugares já visitados" name="hist_viagens" >
                                
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
                                <input type="date" class="form-control" id="data_chegada" placeholder="Data de chagada" name="data_chegada" >
                                
                            </div>
                           </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número da acompanhantes: </label>
                            <div class="col-xs-10">
                                <input type="number" class="form-control" id="nome" placeholder="número" name="numero_acompanhantes">
                                
                            </div>
                       </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Valor das Passangens: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Valor da Das Passangens" name="vl_passangens" >
                                
                            </div></div>
                           <!-- <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">2º Viagem: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Lugares já visitados" name="hist_viagens2" >
                                
                            </div></div>

                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data da saída: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="cidade" placeholder="Data de  saida" name="data_saida2">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data da Volta: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="data_chegada" placeholder="Data de chagada" name="data_chegada2" >
                                
                            </div>
                           </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número da acompanhantes: </label>
                            <div class="col-xs-10">
                                <input type="number" class="form-control" id="nome" placeholder="número" name="numero_acompanhantes2">
                                
                            </div>
                       </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Valor das Passangens: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="estado" placeholder="Valor das Passangens" name="vl_passangens2" >
                                
                            </div></div>-->
                             </font>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label"><font color="white">Número de Estrelas dadas ao Hotéis visitado: </font></label>
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
<font color="white">
<br>
              </div>
                       <div class="form-group">
                           <br><div class="col-xs-offset-2 col-xs-10">
                           <div class="text-center">
                             <input type="submit" class="btn btn-success" value="Cadastrar">
                           </div>
                              </div>
                       </div>
                   </form>
                    </div>
                    </div>
                    <hr class="alert-danger">
 <form class="navbar-form navbar-left" action="resultado_pesq.php" method="POST">
        <div class="form-group">
        <label >Filtro  de Pesquisa</label>
          <input type="text" class="form-control" name="pesquisar" placeholder="Clientes">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
     <h1 class="text-center">Listando dados da Tabela</h1>
  <table class="table" >
    <thead class="list-group-item-heading">
      <tr class="text-lowercase">
        <th>Nome</th>
        <th>CPF</th>
                    <th>Email</th>
                <th>Alterar</th> 
                <th>Excluir</th>
      </tr>
    </thead>
<?php
 $resultado=mysqli_query($conexao,  "SELECT * FROM clientes");
  if($resultado){
   while($row = mysqli_fetch_assoc($resultado)){
        ?>
    <tbody class="alert-success">
        <tr>
          <td class="text-info">
          <?php echo "<p></p>".utf8_encode($row['nome']);?>
            </td>
                <td class="text-danger">
              <?php echo "<p></p>".$row['cpf']; ?></td>
                        <td class="text-warning"><?php echo $row['email'];
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
    
    <button id="opener" class="btn btn-warning"> <a href="index_teste_original.php">Sair</a></button>
    </p>
  </div>
</font>
</body>
</html>