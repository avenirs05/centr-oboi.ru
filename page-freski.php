<?php get_header(); ?>

<?php global $post; ?>
<?php $post_slug = $post->post_name; ?>	

<div class="container-fluid" id="pages-main">
	<div class="row">
       	<div class="col-md-10 col-md-offset-1 content-freski">

<?php $factories = new WP_Query(array ('category_name' => "$post_slug")); ?>
	<?php if ($factories->have_posts()) : 
	  		while ($factories->have_posts()) : 
			  	    $factories->the_post(); ?>	
					 <?php $post_slug = $post->post_name; ?>		
						<div>
							<div>
								<?php the_post_thumbnail(); ?>
							</div>
							<?php the_content(); ?>				
						</div>										
				<?php endwhile; ?>
			<?php endif; ?>		
		</div>
	</div>
</div>

<?php get_footer(); ?>