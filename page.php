<?php
/**
 * A template page for any page created in the dashboard
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-19-2016 - Created
 * @date 02-02-2016 - Updated
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
