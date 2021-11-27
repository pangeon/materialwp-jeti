<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>

	<header class="caption-header">
		<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000, 1000), false, '') ?>
		<div 
			class="caption-header-image" 
			style="background: url(<?php echo $src[0]; ?>);"
		>
			<div class="dark-overlay">
			</div>
			<!-- page title -->
			<div class="container">
				<div class="caption-header-title-box">
					<?php the_title('<h1 class="caption-header-title">', '</h1>'); ?>
				</div>
			</div>
		</div>
	</header>

	<div class="container section-padding">
		<div class="row">
			<div id="primary" class="full-content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div> <!-- row --> 
	</div> <!-- container --> 
<?php
get_footer();
