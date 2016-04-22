<?php
/**
 * The template for single file
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-02-2016 - created
 * @date 01-02-2016 - updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */
?>

<section id="anounce">
  <div class="row ">
		<div class="col s12 l6">
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail('medium max-hg');
			} ?>
		</div>
    <div class="col s12 l6">
			<?php the_content(); ?>
		</div>
	</div>
</section>
