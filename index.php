
<?php
 	get_header(); 
?>

<?php
if (have_posts()) :while (have_posts()) : the_post();
?>
<div class="u-container">
	<h3>
		<?php the_title();?>
	</h3>
	<div>
		<?php the_content();?>
	</div>
	<?php endwhile; else:?>
	<h3>Nada que mostrar por aca</h3>
	<?php endif;?>
</div>

<?php
	get_footer();
?>
