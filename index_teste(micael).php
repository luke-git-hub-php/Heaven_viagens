<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Havean</title>
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
   
  function checarEmail(){
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
</script>	<script src="../js/jquery/jquery/jquery.ui.map.full.min.js"></script>

</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="100">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Home</a></li>
        <li><a href="#band">Lugares</a></li>
        <li><a href="#tour">Passagens</a></li>
         <li><a href="#contact">Contato</a></li>
          <li><a href="#admin">Administrador</a></li>
           <li><a href="#cads">Cadastro de Clientes</a></li>
       
       
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="destinos">
        </div>
        <button type="submit" class="btn btn-default">pesquisar</button>
      </form>
       <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      </ul>
    </div>
  </div>
</nav>
<div  class="container text-center">
<div><img src="imagens/logo-havenviagens.gif" alt="New York" style="width: 500px; height: 300px;"></div>
</div> 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagens/300px-Colosseum_in_Rome-April_2007-1-_copie_2B.jpg" alt="Coliseu" style="width: 1000px; height: 500px;">
      <div class="carousel-caption">
        <h3>Coliseu</h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="imagens/Cientistas-encontram-misteriosas-anomalias-nas-Pirâmides-do-Egito.jpg" alt="Pirâmides" style="width: 1000px; height: 500px;">
      <div class="carousel-caption">
        <h3>Pirâmides do Egito</h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="imagens/foz-do-iguacu.jpg" alt="Ffoz-do-iguacu" style="width: 1000px; height: 500px;">
      <div class="carousel-caption">
        <h3>Foz-do-iguacu</h3>
        <p></p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3></h3>
  <p><em><h2>Litomeraay Viagens</h2></em></p><br>
  <p><h3>Pontos turísticos mais visitados!!! </h3></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Rio de Janeiro</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="imagens/foz-do-iguacu.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
  <p>Local :"Foz-do-iguaçu " <br>Cidade: Rio Grande do sul <br> País:Brasil</p>
  <p>Ponto turistico:Copacabana</p>
        <p>Preço: R$400,00</p><p>Passagens:Terrestre</p>
        <p>Hotel Radical:3 estrelas</p><p>Validade:30/08/2017</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Dubai</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="imagens/hotel-Dubai.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Local :"Dubai " <br>Cidade: Dubai <br> País:Emirados Árabes</p>
        <p>Preço:R$ 800,00</p>
        <p>Passagens:Aéria</p>
        <p>Hotel Dangaranba: 5 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Rio de Janeiro</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="imagens/Praia_de_Copacabana_-_Rio_de_Janeiro,_Brasil.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Local :"Praia de Copacabana " <br>Cidade: Rio_de_Janeiro <br> País:Brasil</p>
        <p>Preço:R$: 450,00</p>
        <p>Passagens:Aéria</p>
        <p>Hotel Copnort: 5 estrelas</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Beberibe</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="imagens/beberibe.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Local :"Morro Branco " <br>Cidade: Beberibe <br> País:Brasil</p>
        <p>Passagens:Terrestre</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel CasalNobre: 5 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>França</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="imagens/mar.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Local :"Champ de Mars" <br>Cidade: França <br> País:Paris</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Bonju: 5 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Huairou</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="imagens/muralha.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p>Local :"Gobi" <br>Cidade: Huairou <br> País:China</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Chinganey: 5 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Sydney</strong></p><br>
      <a href="#demo7" data-toggle="collapse">
        <img src="imagens/ponte.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo7" class="collapse">
        <p>Local :"Ponte da baia de sydney" <br>Cidade: Sydney <br> País:Australia</p>
        <p>Passagens:Terrestre</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Serpiant: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Tokyo</strong></p><br>
      <a href="#demo8" data-toggle="collapse">
        <img src="imagens/museu.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo8" class="collapse">
        <p>Local :"Museu Edo-Tokyo" <br>Cidade: Tokyo <br> País:Japão</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Haikaiss: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Wellington St</strong></p><br>
      <a href="#demo9" data-toggle="collapse">
        <img src="imagens/parlamento.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo9" class="collapse">
        <p>Local :"Colina do parlamento" <br>Cidade:Wellington St <br> País:Canadá</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Caunt: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Toronto</strong></p><br>
      <a href="#demo10" data-toggle="collapse">
        <img src="imagens/museu.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo10" class="collapse">
        <p>Local :"museu real de ontario" <br>Cidade:Toronto <br> País:Canadá</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Stars: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Veneza</strong></p><br>
      <a href="#demo11" data-toggle="collapse">
        <img src="imagens/veneza.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo11" class="collapse">
        <p>Local :"Basilica di San Marco" <br>Cidade:Veneza <br> País:italia</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Venzena: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Veneza</strong></p><br>
      <a href="#demo12" data-toggle="collapse">
        <img src="imagens/palazzo.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo12" class="collapse">
        <p>Local :"Palazzo Ducale" <br>Cidade:Veneza <br> País:italia</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Dulapa: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Moscou</strong></p><br>
      <a href="#demo13" data-toggle="collapse">
        <img src="imagens/praça.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo13" class="collapse">
        <p>Local :"Praça Vermelha" <br>Cidade:Moscou <br> País:Russia</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Venpra: 3 estrelas</p>
      </div>
    </div>
     <div class="col-sm-4">
      <p class="text-center"><strong>Moscou</strong></p><br>
      <a href="#demo14" data-toggle="collapse">
        <img src="imagens/catedral.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo14" class="collapse">
        <p>Local :"Catedral do Criasto Salvador" <br>Cidade:Moscou <br> País:Russia</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Catcrisal: 3 estrelas</p>
      </div>
    </div>
       <div class="col-sm-4">
      <p class="text-center"><strong>Londres</strong></p><br>
      <a href="#demo15" data-toggle="collapse">
        <img src="imagens/brt.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo15" class="collapse">
        <p>Local :"Museu Britanico" <br>Cidade:Londres <br> País:Inglaterra</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel BritS: 3 estrelas</p>
      </div>
    </div>
     <div class="col-sm-4">
      <p class="text-center"><strong>Londres</strong></p><br>
      <a href="#demo16" data-toggle="collapse">
        <img src="imagens/london.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo16" class="collapse">
        <p>Local :"London Eye" <br>Cidade:Londres <br> País:Inglaterra</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Eyes's Tiger: 3 estrelas</p>
      </div>
    </div>
     <div class="col-sm-4">
      <p class="text-center"><strong>Chicago</strong></p><br>
      <a href="#demo17" data-toggle="collapse">
        <img src="imagens/sha.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo17" class="collapse">
        <p>Local :"Teatro Shakespeare" <br>Cidade:Chicago <br> País:EUA</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel MuchuMoney: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Chicago</strong></p><br>
      <a href="#demo18" data-toggle="collapse">
        <img src="imagens/navy.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo18" class="collapse">
        <p>Local :"Navy Pier" <br>Cidade:Chicago <br> País:EUA</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Navy: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>San Franscisco</strong></p><br>
      <a href="#demo19" data-toggle="collapse">
        <img src="imagens/gold.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo19" class="collapse">
        <p>Local :"Ponte Golden Gate" <br>Cidade:San Franscisco <br> País:California</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel GoldenHotel: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>San Franscisco</strong></p><br>
      <a href="#demo20" data-toggle="collapse">
        <img src="imagens/lom.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo20" class="collapse">
        <p>Local :"Lombard Street" <br>Cidade:San Franscisco <br> País:California</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Street Holte: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Italia</strong></p><br>
      <a href="#demo21" data-toggle="collapse">
        <img src="imagens/coli.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo21" class="collapse">
        <p>Local :"O Coliseu de Roma" <br>Cidade:Italia <br> País:Roma</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Roma Hotel: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Italia</strong></p><br>
      <a href="#demo22" data-toggle="collapse">
        <img src="imagens/vec.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo22" class="collapse">
        <p>Local :"Ponte Vecchio" <br>Cidade:Italia <br> País:Roma</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Vecchio Hotel: 3 estrelas</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Virgina</strong></p><br>
      <a href="#demo23" data-toggle="collapse">
        <img src="imagens/mys.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo23" class="collapse">
        <p>Local :"Mystic Falls" <br>Cidade:Virgina <br> País:EUA</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Mystic Hotel: 3 estrelas</p>
      </div>
    </div>
     <div class="col-sm-4">
      <p class="text-center"><strong>Virgina</strong></p><br>
      <a href="#demo24" data-toggle="collapse">
        <img src="imagens/grill.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo24" class="collapse">
        <p>Local :"Mystic Grill" <br>Cidade:Virgina <br> País:EUA</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Mystic Hotel: 3 estrelas</p>
      </div>
    </div>
      <div class="col-sm-4">
      <p class="text-center"><strong>Nova iorque</strong></p><br>
      <a href="#demo25" data-toggle="collapse">
        <img src="imagens/lib.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo25" class="collapse">
        <p>Local :"Estatua da Liberdade" <br>Cidade:Nova iorque <br> País:EUA</p>
        <p>Passagens:Aeria</p>
        <p>Preço:R$ 500,00</p>
        <p>Hotel Mystic Hotel: 3 estrelas</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="imagens/1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Sábado 11 de Junho de 2017</p>
          <p>Preço:R$1200</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar passagem</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="imagens/2.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Sábado 22 de Junho de 2017</p>
          <p>Preço:R$1000</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar passagem</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="imagens/3.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Quinta 22 de Junho de 2017</p>
          <p>Preço:R$1000</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar passagem</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Compra das Passagens </h4>
        </div>
        <form method="post" action="concluir_compra.php">
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
         <!--     <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Preço, 600,00R$ per person</label>-->
              <input type="number" class="form-control" id="psw" placeholder="
              Quantas Pessoas Irão?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> E-mail</label>
              <input type="text" class="form-control" id="usrname" name="email" placeholder="Digite o seu email">
            </div>
              <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>CPF</label>
              <input type="text" class="form-control" id="usrname" name="cpf" placeholder="Digite seu CPF">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Telefone</label>
              <input type="text" class="form-control" id="usrname" name="telefone" placeholder="Digite o seu telefone">
            </div>
              <button type="submit" class="btn btn-block">Comprar? 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button></form>
          <!--<p>Need <a href="#">ajuda?</a></p>-->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contatos</h3>
  <p class="text-center"><em>Eu amo Viajar!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Onde nos Encontrar?</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Fortaleza, CE</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: havenviagens@hotmail.com</p>
    </div><!-- Add Google Maps -->
<div id="googleMap">Localização <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.012957861192!2d-38.524621785201575!3d-3.807278044644869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74e540b3d8f57%3A0xb7514ac6ecd252e3!2sArena+Castel%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1466189198681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  <div id="map_canvas" style="width:250px;height:250px,"></div>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<div id="admin" class="container">
   <h3 class="text-left">Login do Administrador</h3> 

 </div>  
    <div class="col-md-8 form-group" >
<form method="POST" action="autenticado_usuario.php" class="form-horizontal" align="center"> 
      <div class="row">

        <div class="col-sm-8 form-group">
          <input class="form-control" id="name" name="usuario" placeholder="usuário" type="text" required>
        </div><br>
        <div class="col-sm-8 form-group">
          <input class="form-control" id="email" name="senha" placeholder="senha" type="password" required>
        </div>
     
      <br><br>
      <div class="row">
        <div class="col-md-6 form-group">
          <button class="btn pull-right" type="submit">Entrar</button>
        </div>
      </div>
    </div>
     </form>
  </div>
  <br><br><br><br><br><br>
  <div id="cads" class="container">
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
          <input  class="btn pull-right" type="submit" value="Entrar">
        </div>
      </div>
    </div>
     </form>
  </div>
  <br><br>
</div>
  <br><br><br><br><br><br>
  <div>
  <h3 class="text-center"></h3>  
  

  	<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   
    </div>
    <div id="menu1" class="tab-pane fade">
    
      
    </div>
     </form>
  </div></div>
    </div>
    <div id="menu2" class="tab-pane fade">
     

<div class="col-md-8 form-group" >


<div class="table-hover">

</div>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>