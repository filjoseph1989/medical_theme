<?php
/**
 * A part of the news page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-14-2016 - Created
 * @date 01-28-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<section>
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="col s12">
          <div class="row line-bottom">
            <div class="col s12">
              <h4><?php bloginfo('name'); ?></h4>
              <p><?php bloginfo('description'); ?></p>
            </div>
          </div>
          <div class="row"></div>
          <?php
            $args    = array('category_name' => 'News' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="row">
                <div id="program-img" class="col s12 m3 l3">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } ?>
                </div>
                <div class="col s12 m9 l9">
                  <a href="<?php the_permalink(); ?>" style="color:black;"><?php the_title('<h5>','</h5>'); ?></a>
                  <?php echo excerpt_limited( get_the_permalink(), 1500 ); ?>
                  <p>
                    By: <span class="mdl-color-text--pink-100"><?php the_author(); ?></span>
                    Time posted: <?php the_date(); the_time(); ?>
                  </p>
                </div>
              </div>
            <?php endforeach;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
