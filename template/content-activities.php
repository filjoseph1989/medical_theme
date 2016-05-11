<?php
/**
 * A part of the activities page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-14-2016
 * @date 01-21-2016
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
          <div class="row">
            <?php
              $args = array(
                'category_name' => 'activity',
                'numberposts' => 20,
              );
            ?>
            <?php $posts = get_posts( $args ); ?>
            <?php foreach ( $posts as $post ) : setup_postdata( $post ) ?>
              <?php
                $feature_image_id   = get_post_thumbnail_id($post->ID);
                $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'medium');
              ?>
              <div class="card-wrap col s12 m6 l3">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                  <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $feature_image_meta[0]; ?>') no-repeat #46B6AC;">
                    <h2 class="mdl-card__title-text">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="<?php echo get_page_link($pages->ID); ?>">
                        <?php echo $post->post_title; ?>
                      </a>
                    </h2>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
