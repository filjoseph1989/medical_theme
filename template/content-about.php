<?php
/**
 * A part of the about us page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-14-2016 - Created
 * @date 02-01-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 * @updated by Claide
 */
?>
<section>
	<div class="row">
		<div class="col s12">
			<div class="row line-bottom">
				<div class="col s12">
					<h4><?php bloginfo('name'); ?></h4>
					<p><?php bloginfo('description'); ?></p>
				</div>
			</div>
    </div>
	</div>
  <div class="row">
    <div class="col s12 m6 l3">
			<?php
				# Display the image set in the post
				if (has_post_thumbnail()) {
					the_post_thumbnail('', array('class' => 'responsive-img'));
				}
			?>
      </div>
      <div id="about-message" class="col s12 m6 l9">
				<div class="row">
          <div class="col s12">
            <?php if (have_posts()) { ?>
              <?php while (have_posts()) { ?>
              <?php the_post(); ?>
              <?php the_content(); ?>
            <?php  } # end while ?>
            <?php } # end if ?>
          </div>
        </div>
			  <div class="row">
			    <div class="col s12">
			      <?php
			        $args = array( 'posts_per_page' => -1, 'category_name' => 'about' );
			        $myposts = get_posts( $args );
			        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			          <h4><?php the_title(); ?></h4>
			          <?php the_content(); ?>
			      <?php
			        endforeach;
			        wp_reset_postdata();
			      ?>
			    </div>
			  </div>
    </div>
  </div>
</section>
