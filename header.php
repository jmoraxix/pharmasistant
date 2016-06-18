<!DOCTYPE html>
<?php
    function curPageURL() {
      $pageURL = "http://";
      if ($_SERVER["SERVER_PORT"] != "80") {
       $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
      } else {
       $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
      }
      return $pageURL;
    }
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pharmasistant</title>
        
        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,400italic,100,100italic,300,300italic,700,700italic,600,600italic' rel='stylesheet' type='text/css'>
        <!--font-family: 'Josefin Slab', serif; -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        </head><!--/head-->
        
        <body class="homepage">
            <header id="header">
                <div class="top-bar">
                    
                    <nav class="navbar navbar-inverse" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                            </div>
                            <div class="collapse navbar-collapse navbar-right">
                                <ul class="nav navbar-nav">
                                    <li <?php if(curPageURL() == 'http://localhost/pharmasistant/index.php') { ?> class="active" <?php }; ?>><a href="index.php">Inicio</a></li>
                                    <li <?php if(curPageURL() == 'http://localhost/pharmasistant/about-us.php') { ?> class="active" <?php }; ?>><a href="about-us.php">Sobre nosotros</a></li>
                                    <li <?php if(curPageURL() == 'http://localhost/pharmasistant/catalog.php') { ?> class="active" <?php }; ?>><a href="catalog.php">Catálogo</a></li>
                                    <!--
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-item.php">Blog Single</a></li>
                                            <li><a href="pricing.php">Pricing</a></li>
                                            <li><a href="404.php">404</a></li>
                                            <li><a href="shortcodes.php">Shortcodes</a></li>
                                        </ul>
                                    </li>
                                    -->
                                    <li <?php if(curPageURL() == 'http://localhost/pharmasistant/contact-us.php') { ?> class="active" <?php }; ?>><a href="contact-us.php">Contáctenos</a></li>
                                </ul>
                            </div>
                        </div><!--/.container-->
                    </nav><!--/nav-->

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-xs-8 pull-right">
                                <div class="social">
                                    <!--
                                    <ul class="social-share"> 
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    -->
                                    <div class="search">
                                        <form role="form">
                                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                            <i class="fa fa-search"></i>
                                            <a href="login.php"><i class="fa fa-user"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!--/.container-->
                        </div><!--/.top-bar-->
                    </div>
                            
            </header><!--/header-->