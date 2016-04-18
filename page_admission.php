<?php
/**
 * The main template file
 * Template Name: Admission
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-28-2015
 * @date 04-18-2015
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
get_header(); ?>
<?php get_header(); ?>
<main role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <?php get_template_part( 'template/content', 'president' ); ?>
  </article>
</main>
<?php get_footer(); ?>
