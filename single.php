<?php get_header(); ?>

<div class="container-fluid" id="pages-main">
	<div class="row descr-wrapper">
        <div class="col-md-10 col-md-offset-1">
			<div>
			
			<?php global $post; ?>
			<?php $post_slug = $post->post_name; ?>	
			<?php $oboi = new WP_Query(array ('category_name' => "$post_slug")); ?>
			<?php $factory = new WP_Query(array ('category_name' => "oboi")); ?>
			
			<?php if ($factory->have_posts()) : 
		  		while ($factory->have_posts()) : 
			  		$factory->the_post(); ?>	 
					<?php if ($post->post_name == $post_slug) : ?>
						<div class="card-img">
						<?php the_post_thumbnail(); ?>
						</div>
						<div>
						<?php the_content(); ?>
						</div>
					<?php endif; ?>				
				<?php endwhile; ?>
			<?php endif; ?>
			
			</div>
		</div>
	</div>
	
	<div class="row">
        <div class="col-md-10 col-md-offset-1 content">					
	
			<?php if ($oboi->have_posts()) : 
		  		while ($oboi->have_posts()) : 
			  		$oboi->the_post(); ?>					 
					<?php $post_slug = $post->post_name; ?>				
					<div class="card"><p class="text-center"><?php the_title(); ?></p>
						<div>
							<?php the_post_thumbnail(); ?>
						</div>
					</div>					
				<?php endwhile; ?>
			<?php endif; ?>		
			
		</div>
	</div>
</div>

<?php get_footer(); ?>

