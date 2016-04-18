<?php
/**
 * The main template file
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-20-2015 - created
 * @date 02-03-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
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
          'posts_per_page' => 1
        );
        $myposts = get_posts( $args );
        $post    = $myposts[0];
        setup_postdata( $post );
        if (have_posts()) {
      ?>
      <?php the_title('<h3>','</h3>'); ?>
      <?php echo excerpt_limited( false, 120); ?>
      <p><a id="event" class="waves-effect waves-light btn teal btn-large tagline-button" href="<?php the_permalink(); ?>">VIEW ANNOUNCEMENT</a></p>
      <?php } wp_reset_postdata(); # close the query ?>
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
            $args    = array( 'include' => '11, 15, 7, 13' );
            $myposts = get_pages( );
            foreach ($myposts as $pages) {
              setup_postdata( $pages );
              $feature_image_id   = get_post_thumbnail_id($pages->ID);
              $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'medium');
              if ($pages->ID == 11 or $pages->ID == 15 or $pages->ID == 7 or $pages->ID == 13) { ?>
                <div class="card-wrap col s12 m6 l3">
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $feature_image_meta[0]; ?>') no-repeat #46B6AC;">
                      <h2 class="mdl-card__title-text"><?php echo $pages->post_title; ?></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <?php echo '<br/>'. excerpt_limited(get_page_link($pages->ID)); ?>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--teal" href="<?php echo get_page_link($pages->ID); ?>">
                        View
                      </a>
                    </div>
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
                  <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand" style="background:url('<?php echo $image[0]; ?>') no-repeat #46B6AC;">
                      <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <?php echo '<br/>'. excerpt_limited(get_the_permalink()); ?>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--teal" href="<?php echo the_permalink(); ?>">
                        View
                      </a>
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
