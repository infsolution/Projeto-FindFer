<?php
        // put your code here
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
                                    
                                    <li><a href="#">Faça Login / Cadastre-se</a></li>
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
                <h1>Equipe responsável</h1>
                <section class="row destaques">
                    <div class="col-sm-4">
                        <figure><a href="profile.php" title="Analista de Sistemas e Administrador">
                                <img src="images/ciceroCEO.JPG" class="img-responsive" alt="banner para anúncios"></a>
                            <figcaption class="bc1"><a href="#" title="Analista de Sistemas e Administrador" class="cc1">
                                    Cicero Leonardo - CEO</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure><a href="profile.php" title="Analista de Sistemas">
                                <img src="images/marcos300x300.jpg" class="img-responsive" alt="banner para anúncios"></a>
                            <figcaption class="bc2"><a href="#" title="Analista de Sistemas" class="cc2">
                                    Marcos Abreu - COO</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4">
                        <figure><a href="profile.php" title="Analista de Sistemas e Administrador">
                                <img src="images/geovaneCMO.jpg" class="img-responsive" alt="banner para anúncios"></a>
                            <figcaption class="bc3"><a href="#" title="Analista de Sistemas e Administrador" class="cc3">
                                    Geovane Falco - CMO</a>
                            </figcaption>
                        </figure>
                    </div>
                </section>
                    
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


