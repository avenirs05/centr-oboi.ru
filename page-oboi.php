<?php get_header(); ?>

<div class="container-fluid" id="pages-main">
	<div class="row">
        <div class="col-md-10 col-md-offset-1 content">
		
			<?php $oboi_catalogies = new WP_Query(array ('category_name' => 'oboi_catalogies')); ?>

			<?php if ($oboi_catalogies->have_posts()) : 
		  		while ($oboi_catalogies->have_posts()) : 
			  		$oboi_catalogies->the_post(); ?>	
					<?php global $post; ?> 
					<?php $post_slug = $post->post_name; ?>				
					<a href="<?php echo $post_slug; ?>"><p class="text-center"><?php the_title(); ?></p>
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