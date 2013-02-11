<?php
/*
Template Name: Page with related posts
*/
?>

<?php get_header(); ?>

<?php 
	the_post();
	$currentpagename = $wp_query->queried_object->post_name;
 ?>

<h1><?php the_title(); ?></h1>
<div class="page-content">
<?php the_content(); ?>
</div>
<div class="related-posts">
<?php 
wp_reset_postdata();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
	'category_name' => $currentpagename,
	'paged' => $paged
  );

  $list_of_posts = new WP_Query( $args ); 
  ?>
  
  <?php while ( $list_of_posts->have_posts() ): $list_of_posts->the_post(); ?>
	<div class="related-post">
    	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    		<?php if ( has_post_thumbnail() ) { 
				the_post_thumbnail();
			} ?>
    		<?php //the_title(); ?>
    	</a>
	</div>
  <?php endwhile; ?>

</div>

<?php get_footer(); ?>