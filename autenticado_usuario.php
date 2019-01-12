<?php
include("conecta.php");
include("header.php");
?>
<html>
<head>
	<title>Autenticando Funcionário</title>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
	    function loginsuccessfully(){
	    	setTimeout("window.location='admin.php'",5000);
	    }
	  function loginfailed() {
            setTimeout("window.location='index_teste_original.php'",5000);
	  }
	</script>
	
	
</head>
<body>
<div class="container" >
<div  class="alert-info">
<?php
 $conexao=mysqli_connect("localhost","root","","viagens")
  or print(mysqli_error());
$user=$_POST['usuario'];
$senha=$_POST['senha'];

  
$sql=mysqli_query($conexao,"SELECT * FROM admin WHERE login='$user' and  senha='$senha'");
$linha=mysqli_num_rows($sql);

if($linha > 0){
  session_start();
  $_SESSION['user']=$_POST['usuario'];
  $_SESSION['senha']=$_POST['senha'];
  echo "<h1 class='text-success'>";
  echo "<div class='text-center'><i><center><b>Você foi autenticado com sucesso! Aguarde um instante.</b></center></i></div>";
  echo "<script>loginsuccessfully()</script>"."</h1>";;
}else{ 
	  echo "<h1 class='text-danger'>";
	echo "<center><h1><b>Nome do usuário ou senha inválidos! Aguarde um instante para tentar novamente.</h1></b></center>";
	echo "<script>loginfailed()</script>".  "</h1>";;
}
?></div>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<?php include('footer.php');?>
</body>
</html>