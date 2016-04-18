<?php
/**
 * The template for single file
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-02-2016
 * @date 04-18-2016
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<?php get_header(); ?>
<main role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <?php
      while(have_posts()) : the_post();
        if (has_category(array('news', 'announcement'))) {
          get_template_part( 'template/content', 'news_article' );
        } else {
          get_template_part( 'template/content', 'single' );
        }
      endwhile;
    ?>
  </article>
</main>
<?php get_footer(); ?>
