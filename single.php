<?php //php get_header();
	include (TEMPLATEPATH."/header2.php");
?>
<div class="Single">
	<div class="u-container">
		<?php if(have_posts()):while(have_posts()):the_post();?>

		<h2 class="u-title"><?php the_title();?></h2>
		<div class="u-flexbox">
			<div class="u-content">
				<?php the_content();?>
			</div>
			<div class="u-image">
					<?php the_post_thumbnail("large");?>
			</div>
			<!-- <span class="u-category"><?php the_category();?></span> -->
			<?php endwhile?>
			<?php endif;?>

		<a href="//localhost:8080/compor/contacto/" class="u-contactanos u-contactanosR">Contactanos</a>	
		</div>

			<!-- end flexbox -->
	</div>
</div>
<?php get_footer();?>
