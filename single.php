<?php get_header(); ?>

<div class="container-fluid" id="pages-main">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 content">
			
			<?php global $post; ?>
			<?php $post_slug = $post->post_name; ?>	
			<?php $oboi = new WP_Query(array ('category_name' => "$post_slug")); ?>
			<?php if ($oboi->have_posts()) : 
		  		while ($oboi->have_posts()) : 
			  		$oboi->the_post(); ?>					 
					<?php $post_slug = $post->post_name; ?>				
					<a href="#"><p class="text-center"><?php the_title(); ?></p>
						<div>
							<?php the_post_thumbnail(); ?>
						</div>
					</a>					
				<?php endwhile; ?>
			<?php endif; ?>		
			
		</div>
	</div>
</div>

<?php get_footer(); ?>

