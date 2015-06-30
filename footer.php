<footer class="Footer">
	<div class="u-container">
		<div class="u-flexbox Footer-content">
            <!-- SERVICIOS -->
			<div class="u-col3">
                <?php query_posts(array('category_name' =>'servicios'));?>
                    <h3 class="u-subtitle Footer-nameCat">
                            <?php
                    //mostrando el nombre de la categoria     
                    echo  single_cat_title("", false);?>
                    </h3>
                    <ul>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php $post_actual = $wp_query -> current_post; ?>
                        <li>
                            <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                        </li>
                <!-- Si no hay post mostramos este mensaje -->
                        <?php endwhile; else: ?>
                        <?php _e('Lo sentimos no hay entradas .'); ?>
                    <!-- Cerramos el primer if -->
                        <?php endif; ?>
			        </ul>
            </div>
            <!-- PRODUCTOS -->
			<div class="u-col3">
                <h3 class="u-subtitle Footer-nameCat">Productos</h3>
                <?php //wp_nav_menu(array('menu-secundario'=>'Second Nav'));?>
                    <?php wp_nav_menu(
                        array(
                            "container" => false,
                            "theme_location" => "menu-footer"
                        ));
                    ?>
			</div>
            <!-- SOCIAL MEDIA -->
			<div class="u-col3 u-col3Social  Footer-socialMedia">
				<h3 class="u-subtitle Footer-nameCat">Nuestras Redes Sociales</h3>
				<ul>
					<li><a target="_blank" title="Nuestro Facebook" href="//www.facebook.com/ComporSolutions" class="Icon Icon-facebook"></a></li>
					<li><a target="_blank" title="Siguenos en Twitter" href="" class="Icon Icon-twitter"></a></li>
					<li><a target="_blank" title="Conecta por Skype" href="#" class="Icon Icon-skype"></a></li>
				</ul>	
			</div>
        </div>      
        <p><span class="Footer-phone"></span> +(503)7878-8888 o escribenos contacto@comporsolutions.com</p>
		Compor Solutions 2015 &copy;	
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php bloginfo( 'template_url' )?>/js/vendor/jquery.js"></script>
<script src="<?php bloginfo( 'template_url' )?>/js/jquery.smoove.js"></script>
<script src="<?php bloginfo( 'template_url' )?>/js/jquery.slicknav.min.js"></script>
<script src="<?php bloginfo( 'template_url' )?>/js/swiper.min.js"></script>
<script>



        // codigo

        $(document).on("ready", iniciar);
        function iniciar(){
            //$(".u-col3 p").addClass("u-text u-textW");
            $(".u-col3 p").addClass("u-text u-textGray");
            $("#services p").removeClass("u-textW");
            $(".OurServices p").removeClass("u-textGray");
            $(".u-boxS p").removeClass("u-textW");
            $(".Slideshow-action a").addClass("u-contactanos");

            //ICONOS SERVICIOS
            //var icon = $(".OurServices span");
            //for(i = 0; i <= 6 ; i++){
            //    icon.addClass("")        
            //}


            //slideshow
            var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            setWrapperSize: true,
            loop: true,
            speed: 1000,
            parallax: true,
            effect: "coverflow"

            });
            //clients
             var swiper2 = new Swiper('.swiper-container2', {
                pagination: '.swiper-pagination2',
                slidesPerView: 2,
                paginationClickable: true,
                spaceBetween: 30
                //freeMode: true
            });

            //mobile menu SlickNav
            
            $('#menu-menu-principal').slicknav({
                prependTo:'.Header--menumobile',
                label: '',
                closeOnClick: true,  
            });
            //menu secundario    
            $("#menu-menu-secundario").slicknav({
                prependTo:'.Header--menumobile',
                label: '',
                closeOnClick: true,  
            });

        $("#form-contact-btn").on("click", sendMessaje);
    

        //animacion a las imagenes    
       $(".u-image").smoove({
           offset  : '15%',
           moveX   : '100px',
           moveY   : '0',
        });
        //REMOVIENDO EL TAG PADRE DE LOS INPUT    
        $('.Contact-item').unwrap(); 


 
        }
        //fin INICIAR
        function sendMessaje(e){    
            e.preventDefault();    
            $(".Contact-title").text("Tu mensaje ha sido enviado =)");
            $(".Contact-title").css("")
            $("#form-contact").css({"display": "none"});
            $(".Contact-suscessfully").slideDown();
        }



        </script>
</body>
	
</html>