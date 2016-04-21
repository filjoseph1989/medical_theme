<?php
/**
 * A part of the programs page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-18-2016
 * @date 04-21-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
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
          <div id="list">
            <?php
              $args    = array(
                'category_name'   => 'courses',
                'orderby'         => 'DESC',
                'posts_per_page'  =>-1,
                'numberposts'     =>-1
              );
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="row">
                  <div id="program-img" class="col s12 m6 l3">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('medium');
                    } else { ?>
                      <img src="<?php bloginfo('template_url'); ?>/img/default.png" alt="default image" />
                    <?php } ?>
                  </div>
                  <div class="col s12 l9">
                    <a href="<?php the_permalink(); ?>" style="color:black;"><?php the_title('<h5>','</h5>'); ?></a>
                    <?php echo excerpt_limited( get_the_permalink(), 300 ); ?>
                  </div>
                </div>
              <?php endforeach;
              wp_reset_postdata();
            ?>
          </div>
          <!--
          <div class="row">
            <div class="col offset-s4 s4 offset-4 center-align">
              <button id="loadMore" class="btn waves-effect waves-light btn-large" type="submit" name="action">Load more...
              </button>
            </div>
          </div>
          -->
        </div>
      </div>
    </div>
  </div>
</section>
