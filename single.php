<?php

/**
 * The main template file.
 *
 * @package WPLOOK
 * @subpackage vip
 * @since vip 1.0
*/

get_header(); ?>

<?php get_template_part('content', 'single' ) ;?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>