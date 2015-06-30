<?php 
/*
	Template Name: Services
*/
?>
		<?php
			include (TEMPLATEPATH."/header2.php");
		?>	
<div class="Single">
	<section id="services" class="Services">
	<div class="u-container">
		<h2 class="u-title">Nos ponemos a tu disposicion</h2>
		<div class="OurServices">	
		<div class="u-flexbox" id="services-container">
			<p class="u-textMain">Todo lo que hacemos se centra en el éxito de su negocio. Trabajamos con usted para mejorar 
su plan de marketing, superar sus desafíos, alcanzar sus metas y cumplir con los plazos.</p>
			<?php query_posts(array('category_name' =>'servicios'));?>
 				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $post_actual = $wp_query -> current_post; ?>
			<article class="u-col3">
				<a title="<?php the_title();?>" href="<?php the_permalink(); ?>">	
					<?php the_post_thumbnail( array(200, 200) );  ?>
				</a>
				<h3 class="u-subtitle u-subtitleR">
					<a class="u-subtitleR" href="<?php the_permalink();?>">
						<?php the_title();?>
					</a>
				</h3>
				<p class="u-text">
					<?php the_excerpt();?>
				</p>
				<a class="u-button"href="<?php the_permalink(); ?>">Leer Mas</a>
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
	</div>
</section>
</div>	

<?php get_footer();?>