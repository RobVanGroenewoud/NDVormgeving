<?php get_header(); ?>

<?php the_post(); ?>

<div class="swiper-area">
	<?php echo get_new_royalslider(2); ?>
</div>

<?php the_content(); ?>

<?php get_footer(); ?>