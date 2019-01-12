<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery/jquery-ui.js"></script>
	<link href="js/jquery/jquery-ui.css" rel="stylesheet">


<script type="text/javascript">
	$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
});
</script>
</head>
<body>

<div class="form-group">
<label for="nome" class="col-xs-2 control-label">Data da saída: </label>
<div class="col-xs-10">
<input type="text" class="form-control" id="datepicker" placeholder="Data de  saida" />
                                
                            </div>
                       </div><br>


                       Telefone:<input type="datetime-local" name="telefone">

</body>