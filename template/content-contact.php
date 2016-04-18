<?php
/**
 * A part of the contact page
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 01-17-2016 - Created
 * @date 01-27-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
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
<div class="row contact-row">
  <div class="col s12 l6">
      <?php if (have_posts()) { ?>
        <?php while (have_posts()) { ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
      <?php  } # end while ?>
      <?php } # end if ?>
  </div>
  <div class="col s12 l6">
    <table class="table">
      <tr>
        <td class="center"><i class="fa fa-map-marker fa-2x"></i></td>
        <td>P. Villanueva St., R. Castillo, Brgy Agdao, <br>Davao City</td>
      </tr>
      <tr>
        <td class="center"><i class="fa fa-envelope fa-2x"></i></td>
        <td>mmfc_edu@yahoo.com</td>
      </tr>
      <tr>
        <td class="center"><i class="fa fa-phone fa-2x"></i></td>
        <td>(+63) 82 221 6225</td>
      </tr>
    </table>
  </div>
</div>
</section>
