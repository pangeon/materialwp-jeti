<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialWP
 */

 ?>

<div class="footer-widgets-wrapper">
	<div class="row footer-widgets-wrapper-inner">
		<div class="col-xs-12 col-md-4 col-lg-4 footer-widget">
			<?php dynamic_sidebar( 'footer-widget-1' ) ?>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4 footer-widget">
			<?php dynamic_sidebar( 'footer-widget-2' ) ?>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4 footer-widget">
			<?php dynamic_sidebar( 'footer-widget-3' ) ?>
		</div>
	</div> 
</div> 



