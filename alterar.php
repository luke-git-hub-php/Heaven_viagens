<html><head>
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
  <script src="../js/jquery/jquery/jquery.ui.map.full.min.js"></script>

</head>




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
function Mascara (objeto) {
  if (objeto.value.length == 0)
    objeto.value ='('+ objeto.value;

if (objeto.value.length == 3) 
  objeto.value = objeto.value + ')';

if (objeto.value.length == 9) 
  objeto.value = objeto.value + '-';

}

</script>

</head>

<body>
<?php
include('conecta.php');
 $conexao=mysqli_connect("localhost","root","","viagens")
  or print(mysqli_error());?>

 <h2>Alterar dados do cliente! </h2>
<form name="form_alterar" method="GET" action="alterar_2.php">
<?php
  $idAlt=$_GET['id'];
 $resultado=mysqli_query($conexao, "SELECT * FROM clientes where id_cliente='".$idAlt."'");
  $resultado2=mysqli_query($conexao, "SELECT * FROM contatos where id_cliente='".$idAlt."'");
$resultado2=mysqli_fetch_assoc($resultado2);

 if($resultado){
    while($row=mysqli_fetch_assoc($resultado)){
    ?>  
    <input type="hidden" name="id" value="<?php echo $row['id_cliente']; ?>" />
 <br>

  <center>
  <table border="1">
   <tr><td>Nome:</td><td><input  class="bg-black radius" type="text"  id="nome" name="nome"  size="25" value="<?php echo $row['nome']; ?>" /></td></tr>
   <tr><td>CPF:</td><td><input  class="bg-black radius" type="text" maxlength="14" onKeypress="Mascara_cpf(this);" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>" size="25"/></td></tr>
   <tr><td>Email:</td><td><input  class="bg-black radius" type="text" id="email" value="<?php echo $row['email']; ?>" name="email"  size="25"/></td></tr>
   <tr><td>Contato1:</td><td><input  class="bg-black radius" type="text" maxlength="14" onKeypress="Mascara(this);" id="telefone" name="telefone" value="<?php echo $resultado2['telefone']; ?>" size="25"/></td></tr>
   <tr><td>Cobtato2:</td><td><input  class="bg-black radius" type="text" value="<?php echo $resultado2['celular']; ?>" id="celular" name="celular"  size="25"/></td></tr>
   <tr><td>Cidade:</td><td><input  class="bg-black radius" type="text" value="<?php echo $row['cidade']; ?>" id="cidade" name="cidade"  size="25"/></td></tr>



<tr><td>
<div class="form-group">
                                        <div class="col-xs-10">
                            <label for="nome" class="col-xs-2 control-label">Estado:</label></td><td>
                                 <select name="estado" class="control-label" size=1>
    <?php 
    $conecta=mysqli_connect("localhost","root","","cidades_e_estados")
or print(mysqli_error());
    $result=mysqli_query($conecta,  "SELECT * FROM tb_estados");
    while($linha=mysqli_fetch_assoc($result)) {
          ?>
    <option class="form-control" value="<?php echo $linha['uf']; ?>"><?php echo utf8_encode($linha['nome'])." - ".$linha['uf'];?></option>
    <?php }?>
   </select>
    <p></p>
                        
                                
                            </div>
                       </div>

</td></tr>
   <tr><td> histórico_viagens:</td><td><input  class="bg-black radius" type="text" value="<?php echo $row['historico_viagens']; ?>" id="destino" name="historico_viagens"  size="25"/></td>
   <tr><td>Data de saida:</td><td><input class="bg-black radius" type="date" value="<?php echo $row['data_saida']; ?>" id="data_saida" name="data_saida"  size="25"/></td>
   <tr><td>Data de chegada:</td><td><input  class="bg-black radius" type="date" id="data_chegada" value="<?php echo $row['data_volta']; ?>" name="data_chegada"  size="25"/></td>
   <tr><td>Valor da passagem:</td><td><input  class="bg-black radius" type="text" id="valor_passagem" name="valor_passagem" value="<?php echo $row['Valor_passagem']; ?>" size="25"/></td>
   <tr><td>Número de Acompanhantes:</td><td><input  class="bg-black radius" type="text" id="numero_acompanhantes" name="numero_acompanhantes" value="<?php echo $row['numero_acompanhantes']; ?>" size="25"/></td>
   <tr><td>Estrelas do hotel:</td><td><input  class="bg-black radius" type="number" maxlength="5" id="estrelas_hotel" name="estrelas_hotel" value="<?php echo $row['estrelas_hotel']; ?>" size="25"/></td></tr>

  </table>
  </center>

    <?php
    }
 }
?>
   <div class="text-center"><input type="submit" name="alterar"  class="btn btn-warning" value="Alterar" /></div>
</form>

<?php
mysqli_close($conexao);
?>


</body>