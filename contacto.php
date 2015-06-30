<?php 
/*
	Template Name: Contacto
*/
?>
		<?php
			include (TEMPLATEPATH."/header2.php");
		?>	
<div class="Single">
<?php
if (have_posts()) :while (have_posts()) : the_post();
?>
<section id="contact" class="Contact">
<div class="u-container">
	<?php remove_filter( 'the_content', 'wpautop' ); ?> 
	<?php the_content();?>
	<?php endwhile; else:?>
	<h3>Nada que mostrar por aca</h3>
	<?php endif;?>
</div>
</section>
</div>
<?php get_footer();?>