<?php
/**
 * The template to display a single post for news
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-28-2016
 * @date 04-27-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
 */
?>

<section id="news-article">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 l3">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('', array('class' => 'responsive-img')); ?>
        <?php endif; ?>
      </div>
      <div class="col s12">
        <?php
        the_content();
        ?>
      </div>
    </div>
  </div>
</section>
