<?php
session_start();
$today=date("Y-m-d");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>FINDFER</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
		 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
       <script src="http://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
        </script>
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            (window.jQuery)||document.write('<script type="text/javascript"
		src="bootstrap/js/jquery.min.js"><\/script>');//]]>
	</script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/custom.css">
    </head>
    <body>       
        <div class="container">
            <div class="top-bar"></div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default" id="nav-top">
                            <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraSuperior">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#"
					 data-toggle="collapse" data-target="#barraSuperior">Menu</a>
                                        </button>
                            </div>
                            <div class="collapse navbar-collapse" id="barraSuperior">
                                <ul class="nav navbar-nav">
                                    <li><a href="http://www.findfer.com.br"> <img src="images/logotmp25.jpeg" alt="Findfer"></a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Estatisticas</a></li>
                                    <li><a href="businesmodel.php">Modelo de negócio</a></li>
                                    <li><a href="suport.php">Suporte</a></li>
                                    <li><a href="aboult.php">Sobre</a></li>
                              
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="https://www.facebook.com/findfer" title="facebook"> <img src="images/logoface.jpeg" alt="facebook"></a></li>
                                    <li><a href="facebook.com/findfer" title="facebook"> <img src="images/logoface.jpeg" alt="facebook"></a></li>
                              
                                    <li><a href="#">Login</a></li>
                                </ul>
                                </div>
                        </nav>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="bar1">
                        <img src="images/logotmp50.jpeg" alt="Finfer">
                        <span class="texto-logo">Findfer veio mudar a forma como as feiras são vistas</span>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Busca no site">
                            </div>
                            <button type="submit" class="btn btn-default">OK</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraPrincipal">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                             </button>
                            <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#" data-toggle="collapse" data-target="#barraPrincipal">Menu</a>
                        </div>
                        <div class="collapse navbar-collapse" id="barraPrincipal">
                            <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Funções<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
		 			 <li><a href="#">Vendas pelo app</a></li>
					<li><a href="#">Localização</a></li>
					<!-- mais itens -->
				</ul>
			</li>
			 <!-- mais dropdown -->
                                <li><a href="#">Mapa do site</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                 <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                    
                        </div>

                    
                        <div class="col-md-6">
                            <h1>Findfer</h1>
                            <p>
                                O Findfer é um aplicativo mobile que conecta feirantes e expositores a clientes e visitantes de feiras e eventos por meio de anúncios e localização gerando o trajeto exato do cliente até o feirante, também é disponibilizado aos feirantes realizar vendas pelo aplicativo.
                            </p> 
                            <strong>Principais funcionalidades</strong>
                            <p>
                                Mapa com localização de feiras próximas aos clientes, sendo que estando em uma dessa feiras será detalhado o local com informações de localização e trajeto de cada banca ou estande, sendo que, com os dados disponibilizados pelos anunciantes o sistema irá gerar um mapa do local detalhando a localização de cada feirante ou expositor dentro da feira, que mesmo sendo em local fechado irá disponibilizar informações precisas do local. Será exibida lista de anúncios de feirantes e/ou expositores, os anúncios detalham os produtos anunciados e possibilita ver detalhes dos anunciantes como localização exata e qualificação no sistema.
Os feirantes/expositores que possuírem conta gratuita poderão manter relacionamento direto com um número limitado de clientes, uma condição para isso é que o cliente aceite esse relacionamento, o que possibilitará ao feirante um marketing direcionado. Mediante assinatura no app esse número é ampliado de acordo com o plano, os feirantes serão informados quando seus clientes (relacionados) estiverem nas proximidades do local, podendo gerar promoções voltadas para esse cliente em especial.
Os clientes usuários de feira podem configurar os anúncios que desejam receber, gerando uma lista de produtos do seu interesse, os quais receberão foco por parte do sistema, o cliente poderá solicitar relacionamento com feirantes, desde que o feirante não tenha ultrapassado seu limite de relacionamentos (solicitação de relacionamento por parte do cliente gera melhor qualificação para o feirante) clientes podem se relacionar com quantos feirantes quiser. Clientes podem “pedir promoção” nos casos em que o cliente não se agrade dos preços encontrados ele pode fazer uma solicitação aos feirantes que baixem seus preços, caso algum feirante atenda ao cliente o mesmo é notificado e o trajeto até o feirante é traçado, este feirante é automaticamente qualificado pelo sistema e pode ser qualificado pelo cliente.
Vendas pelo aplicativo estão disponíveis para os feirantes com contas gratuitas e pagas, o feirante cria sua “Banca virtual” detalhando os produtos e configura o raio em que pode fazer entregas, o sistema “exigirá um tempo máximo para entregas” e solicitará avaliação do serviço prestado pelo feirante ao cliente, o cliente poderá recusar a entrega caso os produtos esteja em desacordo com o anunciado. Para realizar a compra o cliente acessa uma banca virtual e cria uma cesta onde seleciona os produtos e poderá realizar o pagamento em dinheiro diretamente ao feirante ou pelo aplicativo com cartão de credito ou debito, o que será especificado na compra.  
                            </p>
                        </div>
                   
                    
                        <div class="col-md-3">
                    
                        </div>
                    </div>
                </div>   
            </div>
            <div class="container-fluid">
                <section class="row noticias">
                    <div class="container">
                        <div class="col-sm-3">
                            
                                 <h3><span class="cc1"></span> #</h3>
                                <p><a href="#"></a></p>
                            
                        </div>
                        <div class="col-sm-3">
                            
                                <h3><span class="cc2"></span> #</h3>
                                <p><a href="#"></a></p>
                            
                        </div>
                        <div class="col-sm-3">
                            
                                <h3><span class="cc3"></span> #</h3>
                                <p><a href="#"></a></p>
                            
                        </div>
                        <div class="col-sm-3">
                            
                                <h3><span class="cc4"></span> #</h3>
                                <p><a href="#"></a></p>
                            
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
