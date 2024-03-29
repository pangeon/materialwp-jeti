<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaterialWP
 */

get_header(); ?>

	<header class="caption-header">
		<div 
			class="caption-header-image" 
			style="background: url(https://jeti.org.pl/wp-content/uploads/2022/02/niepelnosprawny.jpg);"
		>
			<div class="dark-overlay">
			</div>
			<!-- page title -->
			<div class="container">
				<div class="caption-header-title-box">
					<h1 class="caption-header-title">NASZE WPISY</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
