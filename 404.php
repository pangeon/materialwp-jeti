<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MaterialWP
 */

get_header(); ?>

	<div class="container" style="padding-top: 100px">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<div class="error-404-icon">
							<i class="fas fa-exclamation-circle"></i>
						</div>
						<header class="page-header">
							<h1 class="page-title">
								<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'materialwp' ); ?>
							</h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p>
								<?php esc_html_e( 'It looks like nothing was found at this location.', 'materialwp' ); ?>
								<?php echo '<br />' ?>
								<?php esc_html_e( 'Maybe try one of the links below or a search?', 'materialwp' ); ?>
							</p>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--  .row -->
	</div><!--  .container -->

<?php
get_footer();
