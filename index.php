<?php
require "init.php";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pantanal Store</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>
<body>
<div id="topo">
<h1 style="text-align: center;">Pantanal Store</h1>
</div>





<body id="topo">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="menu">
    <div class="container">
      <div align= "center"> <a class="navbar-brand js-scroll-trigger" href="?">P&aacute;gina Inicial</a></div>	
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
     
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="?area=produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="?area=carrinho">Ver meu Carrinho de Compras</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

















 						<?php 
							if(isset($_SESSION['usuario_compra']))
							{
						 print '
								Voc&ecirc; esta logado como: '.$_SESSION['usuario_compra']['email'].'  -  <a href="?area=logar&acao=sair">Sair</a>
						 ';
							}
							else
							{
						print '
							<form name="" method="post" action="?area=logar&acao=logar" style="margin: 0px ; padding: 0px; float:right;"> 	Quero comprar:
								<input name="login" type="text" size="10" class="caixa_texto_logar" placeholder="usu&aacute;rio" />
								<input name="senha" type="password" size="10" class="caixa_texto_logar" placeholder="Senha" />
		            			<button type="submit" >Logar</button>
		            			</form>
	            				<a href="?area=logar&acao=cadastro"> <u>Cadastro</u> </a>
	            		 ';
							}
	            		?>
	            		</li>
	            		
</ul>
</div>

<div id="conteudo">
<?php
if (isset ($_GET['area']))
{
	switch ($_GET['area'])
	{
		case "carrinho":
		  include "carrinho.php";
		  break;
		case "produtos":
		  include "produtos.php";
		  break;
		case "finalizar":
		  include "finalizar.php";
		  break;
		  case "logar":
		  	include "logar.php";
		  	break;
		default:
		  include "inicial.php";
		  break;
	}
}
else
{
	include "inicial.php";
}
?>

</div>
</body>
</html>