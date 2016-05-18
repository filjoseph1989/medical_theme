<?php
/**
 * The main template file
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-20-2015
 * @date 05-18-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
 */
?>
<section>
  <div class="row">
    <div id="anounce" class="col s12 center">
      <?php
        # Get the single post with the slug of home-announce
        $args    = array(
          'category_name'  => 'announcement',
          'orderby'        => 'DESC',
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => -1
        );
        $myposts = get_posts( $args );
        // $post    = $myposts[0];
      ?>
      <div id="slideshow">
        <?php foreach ($myposts as $post): setup_postdata( $post ); ?>
          <div>
            <?php the_title('<h1>','</h1>'); ?>
            <p><a id="event" class="waves-effect waves-light btn teal btn-large tagline-button" href="<?php the_permalink(); ?>">VIEW ANNOUNCEMENT</a></p>
          </div>
        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div id="featured" class="col s12 ">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <?php
            # Get the current post that has the category featured and limit the display to 4 post
            $myposts = get_pages( );
            foreach ($myposts as $pages) {
              setup_postdata( $pages );
              $feature_image_id   = get_post_thumbnail_id($pages->ID);
              $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'medium');
              if ($pages->ID == 11 or $pages->ID == 15 or $pages->ID == 7 or $pages->ID == 13) { ?>
                <div class="card-wrap col s12 m6 l3">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $feature_image_meta[0]; ?>') no-repeat #46B6AC;">
                      <h2 class="mdl-card__title-text">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="<?php echo get_page_link($pages->ID); ?>">
                          <?php echo $pages->post_title; ?>
                        </a>
                      </h2>
                    </div>
                    <!--
                    <div class="mdl-card__supporting-text">
                      <p><?php // echo excerpt_limited( false, 50); ?></p>
                    </div>
                    -->
                  </div>
                </div>
            <?php } ?>
          <?php } ?>
          <?php wp_reset_postdata();?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section>
  <div class="row">
    <div class="col s12 ">
      <div class="row">
        <div class="col s12 center">
          <h3>Our Campus</h3>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="row">
            <?php
            # Get the current post that has the category featured and limit the display to 4 post
            $args    = array( 'posts_per_page' => 8, 'category_name' => 'campus' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
              $image   = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large');
            ?>
              <?php if (have_posts()) { ?>
                <div class="card-wrap col s12 m6 l3">
                  <div class="demo-card-event mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $image[0]; ?>') no-repeat #46B6AC;">
                      <h2 class="mdl-card__title-text mdl-color-text--white">
                        <a href="<?php echo the_permalink(); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white" style="text-transform: capitalize;font-size: 19px;font-weight: 300;">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>
                  </div>
                </div>
              <?php } ?>
            <?php endforeach; ?>
          <?php wp_reset_postdata();?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
