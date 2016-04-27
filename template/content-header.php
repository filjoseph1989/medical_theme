<?php
/**
 * The template for banner
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-17-2016
 * @date 04-27-2016
 * @package WordPress
 * @subpackage mmfc-site
 * @since mmfc-site 1.0
 */
?>
<?php
  $bg_img = get_posts( array( 'posts_per_page' => 1, 'category_name' => 'background' ) );
  $post   = $bg_img[0];
  $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
  wp_reset_postdata();
?>
<header id="masthead" class="row">
  <div id="banner" class="col s12" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size:cover;">
    <div class="bg-overlay">
      <div class="row waves-effect waves-light broch">
        <div id="left" class="col s8">
          <div class="row left-height"></div>
          <div class="row left-height">
            <div class="col s12">
              <div class="row">
                <div id="title" class="col s12">
                  <h2 class="certified"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
                  <p class="certified"><strong><?php bloginfo('description'); ?></strong></p>
                </div>
              </div>
              <div id="video" class="row">
                <div class="col s12">
                  <div id="video-thumb" class="row">
                    <?php $args        = array( 'posts_per_page' => 2, 'category_name' => 'video' ); ?>
                    <?php $myposts     = get_posts( $args ); ?>
                    <div class="col s3 center-align">
                      <div class="row waves-effect waves-light">
                        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                          <?php $result = url_class(); ?>
                          <div class="col s6 video-img">
                            <a class='<?php echo $result['class']; ?>' href="<?php echo $result['url']; ?>">
                              <?php the_post_thumbnail(); ?>
                            </a>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <!-- <div class="bullet">&nbsp;</div> -->
                    <div class="col s3 center-align">
                      <!-- No Content Here -->
                    </div>
                    <?php wp_reset_postdata(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s1">&nbsp;</div>
        <div id="right" class="col s3">
          <div class="row">
            <div class="quick col s12">
              <div class="row waves-effect waves-light broch">
                <?php $video_thumb = array( 'posts_per_page' => 2, 'category_name' => 'video-thumb' ); ?>
                <?php $video       = get_posts( $video_thumb ); ?>
                <div class="row left-height">&nbsp;</div>
                <div class="row left-height">&nbsp;</div>
                <div class="row">
                  <?php foreach ($video as $post): ?>
                    <?php $result = url_class(); ?>
                    <div class="col s6 video-img">
                      <a class='<?php echo $result['class']; ?>' href="<?php echo $result['url']; ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                  <?php endforeach; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
