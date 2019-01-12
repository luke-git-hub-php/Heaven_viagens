<?php
$nome=$_POST['nome'];
$idade=$_POST['cpf'];
$email=$_POST['email'];

	@$query="INSERT INTO alunos (id_cliente,nome,cpf,email) VALUES ('','$nome','$cpf','$email')";
    @$insert=mysqli_query($conexao,$query);
		 if($insert){
		  	echo "<script language='javascript' type='text/javascript'>
 	  alert('Usuário cadastro com sucesso!');window.location.href='cadastro.php';
 	</script>";
	}else{
	echo "<script language='javascript' type='text/javascript'>
 	  alert('Não foi possível cadastrar esse usuário!');window.location.href='cadastro.php';
 	</script>";	
	}
	}
  }
?>