<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div class="sevencol last" id="content">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


					<span class="date"><?php the_time(get_option('date_format')); ?></span>
					<h1><?php the_title(); ?></h1>

						

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
							</a>
<?php endif; ?>

						<?php // twentyten_posted_in(); ?>
						<?php // edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<nav id="nav-below" class="navigation">
					
					<?php $prevPost = get_previous_post(true); 
					if($prevPost) { 
					?>
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . '</span> %title' ); ?></div>
					<?php } ; ?>
					
					<?php $nextPost = get_next_post(true); 
					if($nextPost) { 
					?>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '</span>' ); ?></div>
					 <?php } ; ?>
					
				</nav><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>