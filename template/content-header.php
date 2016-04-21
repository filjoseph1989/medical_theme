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
 * @date 04-19-2016
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<?php
  $bg_img = get_posts( array( 'posts_per_page' => 1, 'category_name' => 'background' ) );
  $post   = $bg_img[0];
  $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
?>
<header id="masthead" class="row">
  <div id="banner" class="col s12" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size:cover;">
    <div class="bg-overlay">
      <div class="row">
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
                <div class="col s8">
                  <div id="video-thumb" class="row">
                    <?php $args = array( 'posts_per_page' => 4, 'category_name' => 'video' ); ?>
                    <?php $myposts = get_posts( $args ); ?>
                    <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                      <div class="col s3 video-img">
                        <?php if (has_post_thumbnail()): ?>
                          <?php
                            $url = "";
                            if (grab_post_image() != null) {
                              $url   = grab_post_image();
                              $class = 'group1';
                            } elseif (empty($url)) {
                              $url   = wp_strip_all_tags( get_the_content());
                              $class = 'vimeo';
                            }
                          ?>
                          <a class='<?php echo $class; ?>' href="<?php echo $url; ?>">
                            <?php the_post_thumbnail(); ?>
                          </a>
                        <?php endif; ?>
                      </div><!-- col s3 video-img -->
                    <?php endforeach; ?>
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

                </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
