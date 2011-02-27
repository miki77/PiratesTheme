<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten_Five 
 * @since Twenty Ten Five 1.0
 */
?>
	</div><!-- #main -->

	<footer role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			<a href="http://pirata.cat">Pirates de Catalunya</a>. Contingut sota <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Llicència de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a> 
		</div><!-- #colophon -->
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
