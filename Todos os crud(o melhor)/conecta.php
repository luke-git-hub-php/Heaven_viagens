<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  $conexao=mysqli_connect("localhost","root","","agencia_viagens")
  or print(mysqli_error());

  mysqli_close($conexao);

?>