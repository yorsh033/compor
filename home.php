<?php 
/*
	Template Name: home
*/ 
?>
<?php get_header();?>


<!-- !!! ACA IRIA EL SLIDER -->
<section class="Slideshow">
	<div class="swiper-container">
        <div class="swiper-wrapper">
        	<?php query_posts("category_name=slideshow&post_status=publish,future")?>
        	<?php if (have_posts()): while (have_posts()) : the_post(); 
        	?>

            <div class="swiper-slide">
				<?php the_post_thumbnail("full");?>
				<h2 class="Slideshow-title"><?php the_title();?></h2>
				<div class="Slideshow-action"><?php the_content();?></div>
			</div>

			
			<?php endwhile; else: endif;?>
			<?php wp_reset_query();?>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- QUIENES SOMOS -->
<section id="ourteam" class="Ourteam">
	<div class="u-container">
		<h2 class="u-title u-titlelineW">Quienes Somos</h2>
		<div class="u-flexbox">
			<div class="u-content">
				<p class="u-text u-textBig">
			Somos un grupo de jovenes profesionales con muchas ganas de llevar soluciones profesionales a las necesidades de nuestros Clientes.
				</p>
				<p class="u-text u-textBig">
Nuestra mayor virtud es la de servir a los demás y que mejor que hacerlo brindandoles soluciones tecnológicas.
				</p>
			</div>
			<div class="u-image" data-move-x="100px" data>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ourteam.png" alt="Nuestro Equipo"/>
			</div>
		</div>
	</div>	
</section>
<!-- SERVICES -->
<section id="services" class="Services">
	<div class="u-container">
		<h2 class="u-title">Te brindamos Soluciones</h2>
		<h3 class="u-text u-textBig u-textBigG">En <span class="u-textBigR">Compor Solutions</span> nos encargamos de todos los detalles para aumentar tus ventas</h3>
		<div class="u-flexbox" id="services-container">
			<div class="u-content">
				<p class="u-text u-textBig u-textBigR">Creamos Paginas Web útiles e increibles!</p>
				<p class="u-text">Somos apasionados por el diseño y desarrollo web, nos gusta lo que hacemos y esa es la clave 
					para crear Sitios Web increibles, especialmente diseñados a las medidas que el cliente lo necesite. 
				</p>
			</div>
			<div class="u-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/webpage.png" alt="Creamos Paginas Increibles"/>
			</div>
		</div>	
	</div>	
</section>
<section class="Products-landing">
	<div class="u-container">
			<div class="u-flexbox">
				<div class="u-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/challenge2.png" alt="Creamos Paginas Increibles"/>
				</div>
				<div class="u-content">
				<p class="u-text u-textBig u-textBigW">	
					Abordamos sus retos y objetivos como si fueran nuestros
				</p>
				<p class="u-text u-textGray">Cada nuevo proyecto lo tomamos con el compromiso que se merece, usted nos cuenta su idea y nosotros
					nos encargamos de lo demás, nuestro objetivo es brindarle soluciones que resuelvan sus necesidades.</p>
		
				</div>
			</div>
	</div>		
</section>		

<!-- llamando services -->
		<?php
			include (TEMPLATEPATH."/soluciones.php");
		?>	
<section class="u-boxS">	
	<div class="u-container">
			<h2 class="u-title u-titleW u-titlelineB">Algunos de Nuestros Clientes</h2>
			<div class="u-flexbox">
			<!-- <div class="u-content">
			</div>
			<div class="u-image">
				lasdlsj
			</div> -->
		<div class="swiper-container2">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide">Slide 1</div>
	            <div class="swiper-slide">Slide 2</div>
	            <div class="swiper-slide">Slide 3</div>
	            <div class="swiper-slide">Slide 4</div>
	            <div class="swiper-slide">Slide 5</div>
	            <div class="swiper-slide">Slide 6</div>
	            <div class="swiper-slide">Slide 7</div>
	            <div class="swiper-slide">Slide 8</div>
	            <div class="swiper-slide">Slide 9</div>
	            <div class="swiper-slide">Slide 10</div>
	        </div>
	        <!-- Add Pagination -->
	        <div class="swiper-pagination2"></div>
    	</div>
		<a class="u-contactanos u-contactanosR" href="//localhost:8080/compor/contacto/">Contáctanos</a>
			</div>


	</div>
</section>

<!-- contact -->
<!-- <section id="contact" class="Contact">
	<div class="u-container">
		<h2 class="Contact-title u-title">Escribenos</h2>
		<h2 class="u-subtitle Contact-suscessfully">Gracias por tu mensaje!</h2>
		<form action="#" class="u-flexbox" id="form-contact">
			<div></div>
			<input type="text" class="Contact-name" placeholder="Name" required="true"/>

			<input type="email" class="Contact-email"placeholder="Email" required="true"/>

			<input type="text" class="Contact-subject" placeholder="Subject" required="true"/>
			<textarea class="Contact-message" name="" id="" cols="10" rows="5" placeholder="Message" required="true"></textarea>
			<a class="Contact-send u-contactanos" name="form-contact-btn" id="form-contact-btn" value="Enviar Mensaje">Enviar Mensaje</a>

		</form>
		<?php
			//include (TEMPLATEPATH."/contacto.php");
		?>	
	</div>
</section>
 -->
<?php get_footer();?>