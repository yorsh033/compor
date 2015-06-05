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
				<!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/control-de-acceso4.jpg" alt=""/>
				 -->
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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ourteam.png" alt=""/>
			</div>
		</div>
	</div>	
</section>
<!-- SERVICES -->
<section id="services" class="Services">
	<div class="u-container">
		<h2 class="u-title">lo que hacemos</h2>
		<div class="u-flexbox" id="services-container">
			<?php query_posts(array('category_name' =>'servicios'));?>
 				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $post_actual = $wp_query -> current_post; ?>
			<article class="u-col3">
				<a title="<?php the_title();?>" href="<?php the_permalink(); ?>">	
					<span class="Icon Icon-webDevelopment"></span>
				</a>
				<h3 class="u-subtitle u-subtitleR">
					<a class="u-subtitleR" href="<?php the_permalink();?>">
						<?php the_title();?>
					</a>
				</h3>
				<p class="u-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum labore aut, necessitatibus possimus eligendi. Molestiae dolore consectetur eveniet sit, doloremque, blanditiis cumque recusandae pariatur cum est tenetur, nemo, nostrum unde!</p>
				<a class="u-button"href="<?php the_permalink(); ?>">Read More</a>
			</article>
			<!-- Si no hay post mostramos este mensaje -->
 					<?php endwhile; else: ?>
					<?php _e('Lo sentimos no hay entradas .'); ?>
				<!-- Cerramos el primer if -->
 					<?php endif; ?>
			<!-- 
			<article class="u-col3">
				<span class="Icon Icon-mobileApps"></span>
				<h3 class="u-subtitle u-subtitleR">Aplicaciones Moviles</h3>
				<p class="u-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum labore aut, necessitatibus possimus eligendi. Molestiae dolore consectetur eveniet sit, doloremque, blanditiis cumque recusandae pariatur cum est tenetur, nemo, nostrum unde!</p>
				<a class="u-button"href="#">Read More</a>
			</article> -->
			<a class="u-contactanos" href="#">Contáctanos</a>
		</div>
	</div>
</section>


<section id="solutions" class="Products-landing">
	<div class="u-container">
		<h2 class="u-title u-titleW">Te ofrecemos soluciones</h2>
		<div class="u-flexbox">
			<div class="u-content">
				<p class="u-text u-textW">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptatum quia maiores harum perspiciatis ab modi quos, quis maxime repellendus totam unde dolores, optio! Adipisci facere dicta corporis incidunt asperiores.
				</p>
				<ul>
					<li>Control de entradas/salidas de empleados</li>
					<li>Fácil manejo de Reportes</li>
					<li>Efectivo registro de horas trabajadas</li>
					<li>gs</li>
					<li>sf</li>
				</ul>
			</div>
			<div class="u-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/control-asistencia.png" alt=""/>
			</div>
			<a href="#" class="u-contactanos u-contactanosR">Preguntanos</a>
		</div>
		

		
	</div>
</section>
<section class="u-boxS">
	<div class="u-container">
		<div class="u-flexbox ">
			<?php query_posts(array('category_name' =>'productos'));?>
 				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $post_actual = $wp_query -> current_post; ?>

			<?php //while ( have_posts()) : the_post()?>	
			<article class="u-col3">
					
				<h3 class="u-subtitle u-subtitleW">
					<a class="u-subtitleW" href="<?php the_permalink(); ?>">
						<?php the_title();?>
					</a>
				</h3>
				

				<?php the_excerpt();?>
			
				<a class="u-button u-buttonW"href="<?php the_permalink();?>">leer mas</a>

				
			</article>
			<!-- Si no hay post mostramos este mensaje -->
 					<?php endwhile; else: ?>
					<?php _e('Lo sentimos no hay entradas .'); ?>
				<!-- Cerramos el primer if -->
 					<?php endif; ?>
<!-- 			<article class="u-col3">
	<h3 class="u-subtitle u-subtitleW">Controles de Acceso</h3>
	<p class="u-text u-textW">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum labore aut, necessitatibus possimus eligendi. Molestiae dolore consectetur eveniet sit, doloremque, blanditiis cumque recusandae pariatur cum est tenetur, nemo, nostrum unde!</p>
	<a class="u-button u-buttonW"href="#">Read More</a>
</article> -->
			
		</div>
	</div>	
</section>
<!-- Products -->
<!-- <section class="Products">
	<div class="u-container">
		<h2 class="u-title  u-titleW">nuestros productos</h2>
		<h3 class="u-subtitle u-subtitleW">Controles de Asistencia</h3>
		<div class="u-flexbox">
			<article class="u-col3 w"data-move-y="50px" data>
				<a href="#">
					<figure>
						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/products/t2.jpg" alt="T2"/>
						<figcaption>
							<h3 class="u-subtitle">Control de Asistencia</h3>
							<span>Modelo t2</span>
						</figcaption>
					</figure>
				</a>
			</article>
			<article class="u-col3 w"data-move-y="100px" data>
				<a href="#">
					<figure>
						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/products/3000tc5.jpg" alt="T2"/>
						<figcaption>
							<h3 class="u-subtitle">Control de Asistencia</h3>
							<span>Modelo 3000-TC</span>
						</figcaption>
					</figure>
				</a>
			</article>
			<article class="u-col3  w"data-move-y="150px" data>
				<a href="#">
					<figure>
						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/products/qclearc.jpg" alt="T2"/>
						<figcaption>
							<h3 class="u-subtitle">Control de Asistencia</h3>
							<span>Modelo Q-CLEAR-C</span>
						</figcaption>
					</figure>
				</a>
			</article>
		</div>
	</div>
</section> -->

<!-- contact -->
<section id="contact" class="Contact">
	<div class="u-container">
		<h2 class="u-title">Escribenos</h2>
		<form action="#" class="u-flexbox">
			<input type="text" class="Contact-name" placeholder="Name" required="true"/>
			<input type="email" class="Contact-email"placeholder="Email" required="true"/>
			<input type="text" class="Contact-subject" placeholder="Subject" required="true"/>
			<textarea class="Contact-message" name="" id="" cols="10" rows="5" placeholder="Message" required="true"></textarea>
			<input class="Contact-send" type="submit" name="" id="" value="Enviar Mensaje"/>

		</form>
	</div>
</section>

<?php get_footer();?>