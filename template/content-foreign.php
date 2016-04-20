<?php
/**
 * A part of the foreign page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 04-19-2016
 * @date 04-19-2016
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
          <div class="row"></div>
          <div class="row">
            <?php $args = array( 'category_name' => 'foreign' ); ?>
            <?php $myposts = get_posts( $args ); ?>
            <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div id="program-img" class="col s3">
                <?php if (has_post_thumbnail()) { ?>
                  <?php
                    if (grab_post_image() != null) {
                      $url   = grab_post_image();
                      $class = 'group1';
                    }
                  ?>
                  <a class='<?php echo $class; ?>' href="<?php echo $url; ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
                <?php } ?>
              </div>
              <div class="col s9 col-sm-offset-3">
                <a href="<?php the_permalink(); ?>" style="color:black;"><?php the_title('<h5>','</h5>'); ?></a>
                <?php  the_content(); ?>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
