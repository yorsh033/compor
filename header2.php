<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory')?>/css/normalize.min.css"/>
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory')?>/css/slicknav.css"/>
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory')?>/css/swiper.min.css"/> 
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' /> 

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
         <style>
    html, body {
        position: relative;
        height: 100%;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;

    }
    .swiper-slide img{
        height: auto;
    }
    </style>



        
    <?php wp_head(); ?>    
    </head>
    <body>
        <header class="Header">
            <div class="u-container">
                <div class="Header__logo">
                    <a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name');?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Bienvenid@s a Compor Solutions" width="60"/>
                        <h1>
                            <span class="u-red">Compor</span><span class="u-black">Solutions</span>
                        </h1>
                    </a>
                </div>

<!--                 <ul id="navToggle" class="burger slide"> 
    <li></li>
    <li></li>
    <li></li>
</ul> -->
                <nav class="Header__menu slide">
                    <?php //wp_nav_menu(array('menu-secundario'=>'Second Nav'));?>
                    <?php wp_nav_menu(
                        array(
                            "container" => false,
                            "theme_location" => "menu-secundario"
                        ));
                    ?>
                </nav>
<!--                 <div class="Header__searcher">
                    <input type="search" placeholder="Search"/>

                </div> -->
            </div>  
             <div class="Header--menumobile"></div>  
        </header>