<?php
/**
 * The main template file
 * Template Name: Contact Us
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-28-2015 - created
 * @date 12-29-2015 - updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
get_header(); ?>
<main class="row">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <?php get_template_part( 'template/content', 'contact' ); ?>
  </article>
</main>
<?php get_footer(); ?>
