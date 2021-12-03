<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialWP
 */

?>

<div>
	<!-- TODO: style property is temporary, you must define it other place -->
	<footer id="colophon" class="site-footer" role="contentinfo">

		<!-- WIGDGET BAR -->
		<div class="footer-widgets">
			<div class="container">
				<?php get_sidebar('footer'); ?>
			</div> 
		</div> 
		<!-- WIGDGET BAR -->

		<!-- COPYRIGHT INFO -->
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-info">
							Stowarzyszenie JETI ⒸKamil Cecherz - 
							<a href="http://cecherz.pl/">strona</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT INFO -->

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
