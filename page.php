<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div class="sevencol last" id="content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>






		<?php
		// show recent prophecies
		
		/*
		echo "<h3>Recently fulfilled prophecy</h3>";
			$post_id = 133;
			$prophecy = get_post($post_id); 
			$title = $prophecy->post_title;
			$content = $prophecy->post_content;
		
		echo $title;
		echo $content;
		
		*/
		?> 


<?php endwhile; ?>
</div>

<?php get_footer(); ?>

