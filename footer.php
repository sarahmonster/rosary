<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

</div> <!-- .row -->

				
			</div><!-- container -->
			
			
					<div id="footer">
						<?php get_sidebar( 'footer' ); ?>
						
						<span class="copyright">&copy; <?php echo date(Y); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<span class="separator">&nbsp; &middot; &nbsp;</span>					
						<span class="credit"><a href="http://triggersandsparks.com">Website by Triggers &amp; Sparks</a></span>
					</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>