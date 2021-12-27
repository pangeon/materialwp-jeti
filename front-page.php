<?php
// require_once "custom_utils.php";
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>

<!-- SECTION TOP-SLIDER -->
<div class="top-slider">
    <?php add_content_to_main_page(95) ?>
</div>
<!-- SECTION TOP-SLIDER -->

<!-- SECTION ABOUT-US -->
<div class="about-us">
    <div class="container section-padding">
        <?php add_content_to_main_page(29); ?>
    </div>
</div>
<!-- SECTION ABOUT-US -->

<!-- SECTION CONTACT -->
<div class="contact bg-lightgrey">
    <div class="container section-padding">
        <?php add_content_to_main_page(55); ?>
    </div>
</div>
<!-- SECTION CONTACT -->

<!-- SECTION FIND-US -->
<div class="find-us">
    <div class="container section-padding">
        <?php add_content_to_main_page(77); ?>
    </div>
</div>
<!-- SECTION FIND-US -->

<!-- SECTION SEND-INFO -->
<div class="send-info bg-accent">
    <div class="container section-padding">
        <?php add_content_to_main_page(89); ?>
    </div>
</div>
<!-- SECTION SEND-INFO -->

<?php get_footer(); ?>
