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

<section id="anounce">
  <div class="row ">
    <div class="col s12 l3">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail('medium max-hg');
      } ?>
    </div>
    <div class="col s12 l9">
      <?php the_content(); ?>
    </div>
  </div>
</section>
