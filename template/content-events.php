<?php
/**
 * A part of the Event page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-18-2016 - Created
 * @date 05-06-2016 - Updated
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
          <div class="row">
            <div class="row"></div>
            <div class="row"></div>
            <?php
              $args    = array(
                'category_name'   => 'events',
                'orderby'         => 'DESC',
                'posts_per_page'  =>-1,
                'numberposts'     =>-1
              );
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post );
                $feature_image_id   = get_post_thumbnail_id($mypost->ID);
                $feature_image_meta = wp_get_attachment_image_src($feature_image_id, '32');
              ?>
                <div class="col s12 m6 l3">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp event-card">
                    <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $feature_image_meta[0]; ?>') no-repeat #46B6AC;padding: 0">
                      <div class="event-overlay">
                        <h2 class="mdl-card__title-text">
                          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="<?php echo get_page_link($mypost->ID); ?>">
                            <?php echo the_title(); ?>
                          </a>
                        </h2>
                      </div>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <?php echo '<br/>'. post_excerpt(get_field('post-events')); ?>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--teal" href="<?php echo get_page_link($mypost->ID); ?>">
                        View
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach;
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
