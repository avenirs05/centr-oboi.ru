<?php get_header(); ?>

<?php global $post; ?>
<?php $post_slug = $post->post_name; ?>	

<div class="container-fluid" id="pages-main">
	<div class="row">
       	<div class="col-md-10 col-md-offset-1 content-oboi">

<?php $factories = new WP_Query(array ('category_name' => "$post_slug")); ?>
	<?php if ($factories->have_posts()) : 
	  		while ($factories->have_posts()) : 
			  	    $factories->the_post(); ?>	
					 <?php $post_slug = $post->post_name; ?>				
					<a href="<?php echo get_bloginfo('url') . '/'; ?><?php echo $post_slug; ?>"><p class="text-center"><?php the_title(); ?></p>
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