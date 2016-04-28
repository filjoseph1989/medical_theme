<?php
/**
 * The template for banner in single post
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-27-2016 - created
 * @date 01-27-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>

<header id="masthead-inner" class="row">
  <?php
    $bg_img = get_posts( array( 'posts_per_page' => 1, 'category_name' => 'background-page' ) );
    $post   = $bg_img[0];
    $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
    setup_postdata($post);
  ?>
  <div id="banner" class="col s12 center" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; background-size:cover;">
    <div class="bg-overlay">
      <div class="row header-about">
        <?php if (have_posts()) {
          while (have_posts()) {
            the_post();?>
            <div class="header-line center">
              <h1 class="mdl-color-text--white"><?php the_title(); ?></h1>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
</header>
