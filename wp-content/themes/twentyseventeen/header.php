<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace-compressors</title>

    <link href="/wp-content/themes/twentyseventeen/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/helper.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/flexslider.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/animate.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/settings.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/rev-style.css" rel="stylesheet" >
    <link href="/wp-content/themes/twentyseventeen/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/owl.theme.css" rel="stylesheet" >
    <link href="/wp-content/themes/twentyseventeen/assets/css/yamm.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/wp-content/themes/twentyseventeen/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar navbar-inverse pattern navbar-static-top yamm" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/wp-content/themes/twentyseventeen/assets/img/logo-light.png" alt="Ace-compressors"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="index.html">О нас</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Оборудование <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="compressors.html">Компрессорное оборудование</a></li>
                        <li><a href="air.html">Системы подготовки воздуха</a></li>
                    </ul>
                </li>
                <li><a href="service.html">Сервис</a> </li>
                <li><a href="partners.html">Партнеры</a></li>
                <li><a href="news.html">Новости</a></li>
                <li><a href="contacts.html">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>

<!--carousel slider-->
<div id="carousel-slider" class="carousel carousel-slider-wrapper slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active" id="carousel-slide-1">
            <div class="carousel-overlay">
                <div class="carousel-item-content">
                    <div class="container">
                        <div class="wow slideInRight">
                            <div class="item-text">
                                <div class="wow slideInRight" data-wow-delay=".3s">Профессионализм</div>
                                <div class="wow slideInRight" data-wow-delay=".6s">Оперативность</div>
                                <div class="wow slideInRight" data-wow-delay=".9s"><span>Учет всех желаний</span></div>
                            </div>
                        </div>
                    </div>
                    <a href="support.html" class="btn btn-transparent btn-lg tech-btn"><i class="fa fa-cogs fa-1-5x"></i> Техническая поддержка</a>
                </div>
            </div>
        </div><!--item-->
        <div class="item " id="carousel-slide-2">
            <div class="carousel-overlay">
                <div class="carousel-item-content">
                    <div class="container">
                        <div class="wow slideInRight">
                            <div class="item-text">
                                <div class="wow slideInRight" data-wow-delay=".3s">Профессионализм</div>
                                <div class="wow slideInRight" data-wow-delay=".6s">Оперативность</div>
                                <div class="wow slideInRight" data-wow-delay=".9s"><span>Учет всех желаний</span></div>
                            </div>
                        </div>
                    </div>
                    <a href="support.html" class="btn btn-transparent btn-lg tech-btn"><i class="fa fa-cogs fa-1-5x"></i> Техническая поддержка</a>
                </div>
            </div>
        </div><!--item-->
        <div class="item " id="carousel-slide-3">
            <div class="carousel-overlay">
                <div class="carousel-item-content">
                    <div class="container">
                        <div class="wow slideInRight">
                            <div class="item-text">
                                <div class="wow slideInRight" data-wow-delay=".3s">Профессионализм</div>
                                <div class="wow slideInRight" data-wow-delay=".6s">Оперативность</div>
                                <div class="wow slideInRight" data-wow-delay=".9s"><span>Учет всех желаний</span></div>
                            </div>
                        </div>
                    </div>
                    <a href="support.html" class="btn btn-transparent btn-lg tech-btn"><i class="fa fa-cogs fa-1-5x"></i> Техническая поддержка</a>
                </div>
            </div>
        </div><!--item-->

    </div><!--carousel inner-->
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel-slider" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right" href="#carousel-slider" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div><!--carousel slider-->

<div class="divide60"></div>