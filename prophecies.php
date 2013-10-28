<?php
/**
 * Template Name: Prophecies Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>



<div class="sevencol last" id="content">




<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
						
						
						
						
						<?php /*
						// create a loop to show all prophecies
						query_posts( 'post_type=prophecy'); 
						$prophecies = new WP_Query();
						$prophecies->query('showposts=5');
						if ( have_posts() ) while ( have_posts() ) : the_post();
							get_template_part( 'loop', 'prophecy' );
						endwhile;
						
						
						*/
						?>

<?php $custom_query = new WP_Query('post_type=prophecy&orderby=title&order=asc&posts_per_page=-1'); 
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<?php 
	// Let's split the number from the prophecy!
	$prophecy = get_the_title();
	$prophecy = explode('. ', $prophecy);
	$prophecy = $prophecy[1];
	?>

	<p class="prophecy"><?php echo $prophecy; ?></p>
	<?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>







<?php endwhile; ?>
</div>

<?php get_footer(); ?>

