<?php 
/*
	Template Name: Controles de Asistencia
*/
?>
<?php //php get_header();
	include (TEMPLATEPATH."/header2.php");
?>
<div class="Single">
	<div class="u-container">
		<h2 class="u-title">Controles de Asistencia</h2>
		<div class="u-flexbox">
			<div class="u-content">
				<p>
					Siempre quiso tener el control de sus empleados pero no sabía como hacerlo?
					Le ofrecemos sistemas Biométricos los cuales le facilitarán el control de asistencia de sus empleados, garantizando un exacto cálculo de horas trabajadas, llegadas tardías, cálculo de horas extras, entre otras.
				</p>

				<ul>
					<li>
						Una identificación segura y única del individuo.	
					</li>
					<li>
						El "código" de identificación es intransferible. Solamente la persona autorizada es identificada como tal.
					</li>
					<li>
						El código biométrico ni se puede perder ni se puede olvidar, pues la persona autorizada siempre lo lleva consigo.
					</li>
					<li>
						Un sistema de huellas dactilares tiene coste cero en consumibles y mantenimiento.
					</li>
				</ul>
			</div>

			<div class="u-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/control-asistencia.png ?>" alt="">	
			</div>
		</div>
			<!-- end flexbox -->
		<h3 class="u-subtitle">Nuestros Modelos</h3>
		<div class="u-flexbox">
			<?php query_posts("category_name=controles-de-acceso&post_status=publish,future")?>
	        	<?php if (have_posts()): while (have_posts()) : the_post(); 
	        	?>
	        <div class="u-col3">
				<a href="<?php the_permalink();?>">
					<h2 class="u-subtitle u-subtitleR">
						<?php the_title();?>
					</h2>			
				</a>
				<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail("thumbnail");?>
				</a>
	        </div>	
				<?php endwhile; else: endif;?>
				<?php wp_reset_query();?>
				<!-- <span class="u-category"><?php the_category();?></span> -->

				<!-- <a href="#" class="u-contactanos u-contactanosR">Preguntanos</a> -->
		</div>
	</div>
</div>
<?php get_footer();?>
