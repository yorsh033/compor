<?php 
/*
	Template Name: Controles de acceso
*/
?>
<?php //php get_header();
	include (TEMPLATEPATH."/header2.php");
?>
<div class="Single">
	<div class="u-container">
		<h2 class="u-title">Controles de acceso</h2>
		<div class="u-flexbox">
			<div class="u-content">
				Los sistemas de control de acceso, con lectores biométricos, son los únicos esquemas de seguridad que permiten que a determinadas áreas de su empresa o  su hogar solo ingresen las personas autorizadas.
				En estos sistemas de control de acceso se usa la huella digital, u otra cualidad diferencial, a manera de llave o pase de entrada y así se evitan muchos problemas. Tal vez usted se pregunte: ¿qué ventajas tiene un control de acceso biométrico, en comparación con los métodos comunes y corrientes? La verdad es que son muchos los puntos positivos, para comenzar; cuando se usa un control de acceso biométrico se evita el costo y el riesgo que ocasionan la pérdida, la clonación y el robo de llaves o tarjetas de entrada.
			</div>

			<div class="u-image">

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
