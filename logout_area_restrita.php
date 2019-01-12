<?php include ('header.php');?>
<br><br><br>
<br><br><br>
<br><br><br>
<br>
<?php
session_start();
session_destroy();
header("location:index_teste_original.php");
?>
<?php include ('footer.php');?>