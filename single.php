<?php get_header();?>
<div class="Post">
			<?php if(have_posts()):while(have_posts()):the_post();?>
			<h2 class="PostTitle"><?php the_title();?></h2>
			<div class="PostThumb">
					<?php the_post_thumbnail("large");?>
			</div>
			<div class="u-date"> Por: <?php  the_author();?>
				
				<?php echo " el ";
				the_date();
			?>	
			</div>
			<span class="u-category"><?php the_category();?></span>

			<?php the_content('Read More...');?>
			<?php endwhile?>
			<?php endif;?>
			<div class="post-nav">
				<div class="previous-post">
					<?php previous_posts_link();?> 
				</div>	
				<div class="next-post">
					<?php next_posts_link();?>
				</div>
			</div>


		</div>
<?php get_footer();?>
