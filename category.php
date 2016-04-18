<?php
/**
 * A template page for category.php
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 02-01-2016 - Created
 * @date 02-01-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<?php get_header(); ?>
<main role="main">
  <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="row">
      <div class="col s12">
        <?php
    		while ( have_posts() ) : the_post();
          the_content();
    		endwhile;
    		?>
      </div>
    </div>
  </article>
</main>
<?php get_footer(); ?>
