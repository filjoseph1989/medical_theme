<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-29-2015 - created
 * @date 02-10-2016 - updated
 * @package WordPress
 * @subpackage mmfc
 * @since mmfc 1.0
 */

get_header(); ?>
	<section class="">
		<div class="row">
			<div class="col s12">
				<div class="col s4 error">404</div>
				<div class="col s8">
					<h1 class="page-title line-bottom margin"><?php _e( 'Oops! That page can&rsquo;t be found.', 'mmfc' ); ?></h1>
					<p>
						<a class="waves-effect waves-light btn teal" href="<?php bloginfo('wpurl'); ?>"> BACK TO HOME</a>
					</p>
				</div>
		  </div>
		</div>
		<div class="row">
			<div class="col l12">
				<div class="row">
					<h3 class="center">You can also visit some of our post below</h3>
					<?php
						$posts = get_posts('orderby=rand&numberposts=4');
						foreach($posts as $post) {
							setup_postdata( $post );
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large'); ?>
							<div class="col s12 m6 l3">
								<div class="demo-card-square mdl-card mdl-shadow--2dp" style="margin-bottom:10px;">
								  <div class="mdl-card__title mdl-card--expand" style=" background:url('<?php echo $image[0]; ?>') bottom right 15% no-repeat #46B6AC;">
								    <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
								  </div>
								  <div class="mdl-card__supporting-text">
										<?php echo excerpt_limited( get_the_permalink(), $limit=false) ?>
								  </div>
								  <div class="mdl-card__actions mdl-card--border">
								    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								      Visit
								    </a>
								  </div>
								</div>
							</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
