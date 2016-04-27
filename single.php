<?php
/**
 * The template for single file
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-02-2016
 * @date 04-21-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
 */
?>
<?php get_header(); ?>
<main role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <?php
      while(have_posts()) : the_post();
        if (has_category(array('news', 'announcement'))) {
          get_template_part( 'template/content', 'news_article' );
        } elseif (has_category('activity')) {
          get_template_part( 'template/content', 'activity' );
        } elseif (has_category('download')) {
          get_template_part( 'template/content', 'download' );
        } else {
          get_template_part( 'template/content', 'single' );
        }
      endwhile;
    ?>
  </article>
</main>
<?php get_footer(); ?>
