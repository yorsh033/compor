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
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory')?>/css/trunk.css"/> 
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory')?>/css/swiper.min.css"/> 
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
       <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' /> -->

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
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
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
    </style>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/trunk.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/swiper.min.js"></script>

        <!--
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.7/jquery.smoove.min.js"></script>  -->
        <!--<script src="<?php //echo get_stylesheet_directory_uri();?>/js/main.js"></script> -->

        <!--<script src="<?php //echo get_stylesheet_directory_uri();?>/js/jquery.localScroll.min.js"></script>
        <script src="<?php //echo get_stylesheet_directory_uri();?>/js/jquery.scrollTo.min.js"></script>-->
        <script>



        // codigo

        $(document).on("ready", iniciar);
        function iniciar(){
            $(".u-col3 p").addClass("u-text u-textW");
            $("#services p").removeClass("u-textW");
            $(".u-boxS p").removeClass("u-textW");
            
            var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,
            autoplay: true,
            speed: 4000
    });

        }







        </script>
    <?php wp_head(); ?>    
    </head>
    <body>
        <header class="Header">
            <div class="u-container">
                <div class="Header__logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Bienvenid@s a Compor Solutions" width="60"/>
                    <h1>
                        <span class="u-red">Compor</span><span class="u-black">Solutions</span>
                    </h1>
                </div>

                    <ul id="navToggle" class="burger slide">    <!--    Add "slideRight" class to items that move right when viewing Nav Drawer  -->
            <li></li><li></li><li></li>
        </ul>
                <nav class="Header__menu slide">
                    <?php wp_nav_menu(array('menu'=>'Main'));?>
                </nav>
<!--                 <div class="Header__searcher">
                    <input type="search" placeholder="Search"/>

                </div> -->
            </div>    
        </header>