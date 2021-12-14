<?php if (!defined('FW')) die('Forbidden');

$uri = get_template_directory_uri('/extensions/shortcodes/shortcodes/icon');
wp_enqueue_style('fw-shortcode-icon-custom', $uri . '/static/css/style.css');




