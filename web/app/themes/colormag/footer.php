<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->
   <?php if ( is_active_sidebar('colormag_advertisement_above_the_footer_sidebar') ) { ?>
      <div class="advertisement_above_footer">
         <div class="inner-wrap">
            <?php dynamic_sidebar('colormag_advertisement_above_the_footer_sidebar'); ?>
         </div>
      </div>
   <?php } ?>
	<?php do_action( 'colormag_before_footer' ); ?>
		<footer id="colophon" class="clearfix">
			<?php get_sidebar( 'footer' ); ?>
			<div class="footer-socket-wrapper clearfix">
				<div class="inner-wrap">
					<div class="footer-socket-area">
                  <div class="footer-socket-right-section">
   						<?php if( get_theme_mod( 'colormag_social_link_activate', 0 ) == 1 ) { colormag_social_links(); } ?>
                  </div>
                  <div class="footer-socket-left-sectoin">
   						<!-- <?php do_action( 'colormag_footer_copyright' ); ?> -->
                  </div>
									<div class="licencia">
										<!-- <?php do_action( 'colormag_footer_copyright' ); ?> -->
										<p>
											<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
										</p>
										<p>
											Los contenidos, salvo mención expresa, se publican bajo <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">licencia de Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional</a>. Se permite la utilización de los contenidos manteniendo los términos de la licencia.
										</p>
									</div>
					</div>
				</div>
			</div>
		</footer>
		<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>
