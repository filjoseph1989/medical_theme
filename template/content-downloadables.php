<?php
/**
 * A part of the downloadables page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-14-2016 - Created
 * @date 02-02-2016 - Updated
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
            $args    = array('category_name' => 'Download' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="row">
                <div id="program-img" class="col s12 m6 l4">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } ?>
                </div>
                <div class="col s12 m6 l8">
                  <a href="#" style="color:black;"><?php the_title('<h5>','</h5>'); ?></a>
                  <?php the_content(); ?>
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
