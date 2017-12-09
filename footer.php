<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage SHCC
 * @since SHCC 1.0
 */
?>

		
<footer>
 <section class="footer"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12 centered"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-logo-gray.png"> 
                        <p><?php _e( '© 2017 Sexual Harassment Claim Center.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section> 

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'SHCC' ) ); ?>"><?php printf( __( 'Powered by %s', 'SHCC' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>
