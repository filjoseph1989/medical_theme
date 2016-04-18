<?php
/**
 * The template file for program page
 * Template Name: Events
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-18-2016 - Created
 * @date 01-18-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<?php get_header(); ?>
<main role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <?php get_template_part( 'template/content', 'events' ); ?>
  </article>
</main>
<?php get_footer(); ?>
