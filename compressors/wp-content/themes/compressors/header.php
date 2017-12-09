<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/helper.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/settings.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/rev-style.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/yamm.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/cubeportfolio.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/yamm.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse pattern navbar-static-top yamm" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_url')?>/img/logo-light.png" alt="Ace-compressors"></a>
                </div>
                <div class="navbar-collapse collapse">
                <?php 
                    $args = array(
                        'theme_location' => 'menu',
                        'menu_class' => 'nav navbar-nav navbar-right',     
                        'container' => false   
                    );
                    wp_nav_menu( $args ); 
                ?>    
                </div>
            </div>
        </div>

        <!--carousel slider-->
        <?php $slider = new WP_Query(array('post_type' => 'slider')); ?>
        
        <?php if ( $slider->have_posts() ) : ?> 
            <div id="carousel-slider" class="carousel carousel-slider-wrapper slide" data-ride="carousel">
           

            <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
                 
                <div class="item active" >   
                       
                   <?php the_post_thumbnail('full') ?>
                     
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
               </div>
  
            <?php endwhile; ?>
      
            </div> 
        <!-- post navigation -->
        <?php else: ?>
            <p>Место под слайдер</p>
        <?php endif; ?>

           
           <!-- 
           <div id="carousel-slider" class="carousel carousel-slider-wrapper slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-slider" data-slide-to="1"></li>
                  <li data-target="#carousel-slider" data-slide-to="2"></li>
              </ol>
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
               </div> -->
               
               <!--  <div class="item " id="carousel-slide-2">
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
               </div> --><!--item-->
               
                <!-- <div class="item " id="carousel-slide-3">
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
                </div> --><!--item-->

            <!-- </div> --><!--carousel inner-->
           
            <!-- Carousel nav -->
            <!-- <a class="carousel-control left" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right" href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
                    </div> --><!--carousel slider-->

        <div class="divide60"></div>