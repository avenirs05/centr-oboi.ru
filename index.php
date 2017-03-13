<?php get_header(); ?>

<div class="container-fluid main-screen">
	<div class="row">
        <div class="col-md-12 title text-center">
			<p>ОБОИ и ЛАМИНАТ ведущих фабрик</p>
			<p>От эконом до премиум!</p>
		</div>
	</div>
</div>

<div class="container-fluid" id="about-us">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">		
			
			<?php $page_main = new WP_Query(array('category_name' => 'page_main')); ?>
			<?php if ($page_main->have_posts()) : 
		  		while ($page_main->have_posts()) : 
			  		$page_main->the_post(); ?>
			  		<?php the_content(); ?>
			  		<br><br>              
		  		<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
	</div>
</div>
<?php echo 'Хуй'; ?>
<?php get_footer(); ?>
