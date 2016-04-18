<?php
/**
 * The template for banner in single post
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-28-2016 - created
 * @date 01-28-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>
<header id="masthead-inner" class="row">
  <?php
    while(have_posts()) : the_post();
      if (has_category('news')) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large');
      }
    endwhile;
    # Display the default background image
    if ($image[0] == null) {
      $bg_img = get_posts( array( 'posts_per_page' => 1, 'category_name' => 'background' ) );
      $post   = $bg_img[0];
      $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
      setup_postdata($post);
    }
  ?>
  <div id="banner" class="col s12 center" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size:cover;">
    <div class="bg-overlay">
      <div class="row header-about">
        <div class="header-line center">
          <?php while (have_posts()) { the_post(); ?>
            <h1 class="mdl-color-text--white"><?php the_title(); ?></h1>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</header>
