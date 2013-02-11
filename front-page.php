<?php get_header(); ?>

<?php the_post(); ?>

<div class="swiper-area">

	<?php 
	// Determine royal slider id properly
	echo get_new_royalslider(1); 
	?>
</div>

<?php the_content(); ?>

<?php get_footer(); ?>