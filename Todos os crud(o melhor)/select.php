		<form method="POST" action="select.php">
<select>
	<option name="media">Média Turma</option>
    <option name="ordem">Ordem Alfábetica</option>
    <option name=">7">Média que 7</option>
     <input value="Consultar" type="submit">
</select>
</form>
<?php
$conexao=mysqli_connect("localhost","root","","escola");
if(!$conexao){
	die('Error ao conectar:'. mysqli_error());
}
mysqli_select_db($conexao,"escola");
$media_t=['media'];
$ordem_alf=['ordem'];
$media_que7=['>7'];
if($media_t){
  $query1=mysqli_query($conexao,"SELECT AVG(nota)FROM notas");
  $linha=mysqli_fetch_assoc($query1);
  
}else if($ordem_alf){
   $query2=mysqli_query($conexao,"SELECT nome FROM alunos ORDER BY nome ASC");
   $linha2=mysqli_fetch_assoc($query2);
 echo $linha2;
}else if($media_que7){
    $query3=mysqli_query($conexao,"SELECT disciplinas,AVG(nota)FROM notas GROUP BY disciplinas HAVING AVG(nota) > 7");
  echo $query3;
}
?>